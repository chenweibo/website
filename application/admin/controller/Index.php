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
     $this->assign('list',$list);
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
