<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Session;
use think\Hook;
use think\Db;
use app\admin\model\Product;

class Common extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
        public function _initialize()
    {
          \think\Hook::listen('UserCheck',$params);
          $a=Session::get('uname','login');
          


          $this->assign('a',$a);
    }


    public function index()
    {
       
     

    }

 public function upload(){




    $file = request()->file('image');


   
    $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');
    if($info){
      
        return $info->getSaveName();
       
    }else{
        // 上传失败获取错误信息
        return $file->getError();
    }
}

 public function uploadmore(){




    $file = request()->file('more');


   
    $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');
    if($info){
      
        return $info->getSaveName();
       
    }else{
        // 上传失败获取错误信息
        return $file->getError();
    }
}

public function downupload(){
    // 获取表单上传文件 例如上传了001.jpg



    $file = request()->file('down');
    // 移动到框架应用根目录/public/uploads/ 目录下

   
    $info = $file->rule('uniqid')->move(ROOT_PATH . 'public' . DS . 'uploads');
    if($info){
      
        return $info->getSaveName();
       
    }else{
        // 上传失败获取错误信息
        return $file->getError();
    }
}

   public function removecate($oldid="",$newid="",$path=""){
      


     $product= new Product;
     $product->save([
    'lid'  => $newid,
    'lPath' => $path
],['lid' => $oldid[0]]);
     return 1;

   }


   public function copycate($oldid="",$newid="",$path=""){
           $id=$oldid[0];
           $product= new Product;
           $list=Db::table('wb_product')->field('id',true)->select(); 
           foreach ($list as $key => $v) {
              $list[$key]['lid'] = $newid;
              $list[$key]['lPath'] = $path;
           }
           foreach($list as $data){
           $product->data($data,true)->isUpdate(false)->save();
           }
           return 1;

   }


     public function file(){

         $dir ="./uploads";
           $list = scandir($dir);  
        for($n=0;$n<count($list);$n++)
            {
              if($list[$n] == "." || $list[$n] == "..")
                 {

                 $list[$n]="";

                 }

            }
     
      
      $list=array_filter($list);
      $this->assign('list',$list);
      return $this->fetch('file/file');

     }
  
    public function filedelete($path=""){


         $file="./uploads/".$path;
         

         if(unlink($file))
         {
            return 1;

         }
         else{
          
             return 0;

         }
       

    }


}
