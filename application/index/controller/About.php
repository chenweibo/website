<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;
class About extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    { 
      $data=Db:: table('wb_page')->where('id',1)->find();
      $this->assign('data',$data);  
      return $this->fetch('about');
    }

    /**
     * 
     *
     * @return \think\Response
     */
    public function contact()
    { 
      $data=Db:: table('wb_page')->where('id',2)->find();
      $this->assign('data',$data);  
      return $this->fetch('contact');
    }

        public function concept()
    { 
      $data=Db:: table('wb_page')->where('id',3)->find();
      $this->assign('data',$data);  
      return $this->fetch();
    }

        public function products()
    { 
      $data=Db:: table('wb_page')->where('id',5)->find();
      $this->assign('data',$data);  
      return $this->fetch();
    }

        public function map(){

         return $this->fetch(); 
        }



    
}
