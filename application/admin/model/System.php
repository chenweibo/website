<?php

namespace app\admin\model;

use think\Model;

class System extends Model
{
     protected	$table	=	'wb_system';  

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

 
}
