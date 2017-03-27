<?php

namespace app\admin\model;

use think\Model;

class Imagecate extends Model
{
     protected	$table	=	'wb_imagecate'; 

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
         public function image(){

        return  $this->hasOne('Image');
     
     }

}
