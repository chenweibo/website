<?php 

namespace app\admin\behavior;
use think\Session;
use think\Controller;
class UserCheck extends Controller {
        public function run(&$params){
        
     
              	if(!Session::has('uid','login')||!Session::has('uname','login'))

              	{

                 $this->redirect( url('/login')); 

              	}


             	 
              
        }
    }