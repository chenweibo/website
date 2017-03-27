<?php

namespace app\admin\model;

use think\Model;

class Productcate extends Model
{
     protected	$table	=	'wb_productcate'; 

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
         public function product(){

        return  $this->hasOne('Product');
     
     }




}
