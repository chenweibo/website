<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\model\Article;
class News extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {   $data['show']=1;
        $data['lid']=1;
        $list=Db::table('wb_article')->where($data)->order('id desc')->paginate(6);
        $this->assign('list',$list);

    
        return $this->fetch('news');
    }

    public function news_show($id="")
    {    $npro=Db::table('wb_product')->limit(3)->select();
         $page= new Article;
         $page->pageveiwint($id);
         $this->assign('npro',$npro);
         $data=Db::table('wb_article')->where('id',$id)->find();
         $prev = Db::table('wb_article')->where("id<".$id)->order('id desc')->limit('1')->find();
         $next = Db::table('wb_article')->where("id>".$id)->order('id')->limit('1')->find();	
         $this->assign('next', $next);
         $this->assign('prev', $prev);
         $this->assign('data',$data);
    	 return $this->fetch();
    }

  
}
