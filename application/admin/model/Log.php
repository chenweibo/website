<?php

namespace app\admin\model;

use think\Model;

class Log extends Model
{
     protected	$table	=	'wb_log'; 

        protected $auto = [ 'ip'];
        protected $type = [
        
            'createtime'  =>  'timestamp',
        'updatetime'  =>  'timestamp', 
     
    ]; 


    	 protected	$createTime	=	'createtime';
     protected	$updateTime	=	'updatetime'; 


         protected function setIpAttr()
    {
          return request()->ip();
    } 

         public function createlog($str="",$neirong=""){
               
              $log= new Log;
              $data['curd']=$str;
              $data['content']=$neirong;
              $log->save($data);


         }     


     
}
