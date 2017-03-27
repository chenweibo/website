<?php

namespace app\admin\model;

use think\Model;

class Image extends Model
{
    protected	$table	=	'wb_image'; 

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
     
     public function imagecate(){


      return  $this->belongsTo('Imagecate');
     }
     
}
