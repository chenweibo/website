<?php

namespace app\admin\model;

use think\Model;

class Downcate extends Model
{
    protected	$table	=	'wb_downcate'; 

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

        return  $this->hasOne('Article');
     
     }
}
