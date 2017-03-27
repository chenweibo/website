<?php

namespace app\admin\model;

use think\Model;

class Slide extends Model
{
       protected	$table	=	'wb_slide'; 

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
