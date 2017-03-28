<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
use think\Url;
use think\Db;

//admin,route start


// Route::rule('login','admin/Login/index');
// Route::rule('admin/index','admin/Index/index');

// Route::rule('admin/login/logindelet','admin/Login/logindelet');
// Route::rule('admin/system','admin/System/index');
// Route::rule('admin/system/save','admin/System/save');
// Route::rule('admin/others','admin/Others/index');
// Route::rule('admin/others/save','admin/Others/save');

// // Route::rule('admin/slide','admin/Slide/index');
// // Route::rule('admin/slide/create','admin/Slide/create');
// // Route::rule('admin/slide/save','admin/Slide/save');
// // Route::rule('admin/slideedit/:id','admin/Slide/edit');
// // Route::rule('admin/slidedelete/:id','admin/Slide/delete');



//admin ending

Route::alias('honor','index/Honor/index');
Route::alias('about','index/About/index');
Route::alias('down','index/Down/index');
Route::alias('contact','index/About/contact');
Route::alias('news','index/News/index');
Route::rule('news_show/:id','index/News/news_show');
Route::alias('products','index/About/products');
Route::alias('concept','index/About/concept');
Route::resource('admin_slide','admin/Slide');


Route::rule('/','index/Index/index');
Route::get('pro/:tid/:cid','index/Pro/index');
Route::get('pro/:tid','index/Pro/index');

Route::get('proshow/:id','index/Pro/pro_show');
// Route::get(':jin/:jint','index/Pro/pro2');
// Route::get(':jingtai','index/Pro/pro1');

Route::rule('pro','index/Pro/index');
Route::alias('search','index/Index/search');

return [
    '__pattern__' => [
      
    ],



      

];



