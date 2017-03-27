<?php

namespace app\admin\model;

use think\Model;

class Article extends Model
{
     protected	$table	=	'wb_article'; 

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


      return  $this->belongsTo('Articlecate');
     }

     public function pageveiwint($id=""){
         
              $art=Article::get($id);
              $data['pageview']=$art['pageview']+1;
              $art->save($data); 

     }
}
