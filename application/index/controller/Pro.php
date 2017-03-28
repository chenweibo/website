<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Product;
use app\admin\model\Productcate;

class Pro extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($tid="",$cid="")
    {    $promodel= new Product();
         $procate= new Productcate();        
         $pro=$procate->where('pid=0')->order('sort asc')->select();
         $proall=$procate->select();

         // $list=$promodel->where('lPath','like', '%-'.$tid.'-%')->whereOr('lPath','like', '%0-'.$tid.'%')->select();
         if($tid && !$cid)
         {
           
         $sql="SELECT * FROM wb_product WHERE lPath LIKE '%-$tid-%' OR lPath LIKE '%0-$tid%' order by id limit 16 " ;      
         }else
         if( $tid && $cid)
         {    
           $sql="SELECT * FROM wb_product where lid = $cid order by id limit 16  " ;   
        
         }
         else{
           $sql="SELECT * FROM wb_product order by id limit 16 " ;
         }
           
         $list=Db::query($sql);
         $this->assign('pro',$pro);
         $this->assign('proall',$proall);
         $this->assign('list',$list);
         $this->assign('tid',$tid);
         $this->assign('cid',$cid);
         return $this->fetch('pro');
    }

       


         public function pro_show($id=""){

               
         $promodel= new Product();
         $procate= new Productcate();
         $pro=$procate->where('pid=0')->order('sort asc')->select();
         
         $proall=$procate->select();
         $data=$promodel->where('id',$id)->find();
         $tid=$procate->where('id',$data['lid'])->find();
         $pname=$tid['name'];
         if($tid['pid']==0){
         $tid=$tid['id'];
         }
         else{
         $tid=$tid['pid'];
         } 
         $cid=$data['lid'];
         $str=explode(',', $data['imgmore']);
         $this->assign('pname',$pname);
         $this->assign('str',$str);
         $this->assign('data',$data); 
         $this->assign('pro',$pro);
         $this->assign('proall',$proall);
         $this->assign('tid',$tid);
         $this->assign('cid',$cid);
         dump($tid.$cid);
         return $this->fetch();



         }
}
