<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
 function f3($str) 
{ 
$result = array(); 
preg_match_all("/(?:\()(.*)(?:\))/i",$str, $result); 
return $result[1][0]; 


}

function quchu($str){


	$a=preg_replace("/\(.*\)/", '', $str);
	return $a; 
}