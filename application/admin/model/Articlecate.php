<?php

namespace app\admin\model;

use think\Model;

class Articlecate extends Model
{
    protected	$table	=	'wb_articlecate'; 

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
         public function article(){

        return  $this->hasOne('Article');
     
     }

}
