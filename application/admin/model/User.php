<?php

namespace app\admin\model;

use think\Model;

class User extends Model
{
     protected	$table	=	'wb_user';


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
