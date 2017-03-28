<?php
namespace app\admin\controller;
use think\Controller;
use think\Session;
use think\Hook;
use app\admin\controller\Common;
use app\admin\model\User;
use think\Db;
use app\admin\model\Log;

class Index extends Common
{
    public function index()
    {   
         
     
     $log= new Log;
     $list=$log->order('id desc')->paginate(15);
     $page=count(Db::table('wb_page')->select());
     $procount=count(Db::table('wb_product')->select());
     $artcount=count(Db::table('wb_article')->select());
     $imgcount=count(Db::table('wb_image')->select());

     $this->assign('list',$list);
     $this->assign('page',$page);
     $this->assign('procount',$procount);
     $this->assign('artcount',$artcount);
     $this->assign('imgcount',$imgcount);
     return $this->fetch();
    }


     public function updatapassword($old="",$news=""){
             
     	      $id=Session::get('uid');

               //$result    =   Db::name('user')->where('id',$id)->find();
               $result = User::get($id);
               if($result['password']==$old)
              {  
              	$user= new User;
              	$user = User::get($id);
              	$user->password = $news;
                $user->save();    
                return json('1');

              }

              else{

              	 return json('0');
              }
            

     }
}
