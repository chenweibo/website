<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use app\admin\model\Gbook;

class Index extends Common
{
     public function index()
    {   
        $slide=Db::table('wb_slide')->order('slide_sort asc')->select();
        $news=Db::table('wb_article')->order('id desc')->limit(3)->select();
        $this->assign('slide',$slide);      
        $this->assign('news',$news);
        return $this->fetch();

    }


     public function search($keys=""){

        
        $pro=Db::table('wb_productcate')->where('pid=0')->select();
        $proall=Db::table('wb_productcate')->select();   
        $a=input('keys');
        $map['name']=['like','%'.$a.'%'];
               $info=Db::table('wb_product')->where($map)->select();
            if($info)
            {
                $list=$info;
                $cid='';
                $c="";
               
            }
             else
               {
                $cid='';
                $list='';
                $c="搜索不到相关的产品，请重新输入";
               } 

              
        $this->assign('proall',$proall);
        $this->assign('pro',$pro);
        $this->assign('cid',$cid);
        $this->assign('c',$c); 
        $this->assign('list',$list);

        return $this->fetch();

     }


     public function gbook(){

          $gbook= new Gbook;
          $gbook->save($_POST); 
         return 1;
     }


}
