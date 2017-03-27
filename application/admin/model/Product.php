<?php

namespace app\admin\model;

use think\Model;

class Product extends Model
{
    protected	$table	=	'wb_product'; 

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
     
     public function productcate(){


      return  $this->belongsTo('Productcate');
     }
     
          

}
