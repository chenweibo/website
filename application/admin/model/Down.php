<?php

namespace app\admin\model;

use think\Model;

class Down extends Model
{
    protected	$table	=	'wb_down'; 

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
     
     public function downcate(){


      return  $this->belongsTo('Downcate');
     }
     
}
