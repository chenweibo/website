<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Others as OthersModel;
class Common extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        
    }

     public function _initialize()
    {
      $system=Db::table('wb_system')->where('id',1)->find();
      $this->assign('system',$system); 
      $pro=Db::table('wb_productcate')->where('pid=0')->order('sort asc')->select();
      $proall=Db::table('wb_productcate')->select();
      $this->assign('pro',$pro);
      $this->assign('proall',$proall);
      $others=OthersModel::get(1); 
      $link=explode(',', $others['link']);
      $this->assign('link',$link);
      $this->assign('pro',$pro);    
    }

   
}
