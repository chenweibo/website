<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\controller\Common;
use app\admin\model\Articlecate as ArticlecateModel;
use app\admin\model\Article;
use proCategory\Category;
use think\Db;
use app\admin\model\Log;
class Articlelist extends Common
{
     /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {   if (input('keyword'))
         {                
        $map['wb_article.name'] = ['like','%'. input('keyword').'%'];
              }
         if(!input('keyword')&&!input('pid'))
         {

        $map="";
         } 
          if (input('pid'))
         {                
        $map['wb_article.lid'] = ['like','%'. input('pid').'%'];
              }

        $cate=ArticlecateModel::all();
        $Category = new Category();        
        $list=$Category::unlimitedForLever($cate,'--');
        $this->assign('list',$list);
        $pcate= new ArticlecateModel;
        $pro=$pcate->where($map)        
        ->alias('a')
        ->join('wb_article w','w.lid = a.id')
        ->order('w.sort asc,w.id asc')
        ->field(['w.id'=>'id','w.name'=>'name','a.name'=>'cate','w.sort'=>'sort','a.icon'=>'cateicon','w.icon'=>'icon','w.createtime','w.updatetime'])
        ->paginate(15,false,['query' => ['keyword'=>input('keyword'),'id'=>input('pid')] ]);

        $this->assign('pro',$pro);
        $this->assign('pid',input('pid'));
        $this->assign('keyword',input('keyword'));       
        return $this->fetch('articlelist');


    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {   $cate=ArticlecateModel::all();
        $Category = new Category();        
        $list=$Category::unlimitedForLever($cate,'--');
        $this->assign('list',$list);
        $this->assign('pid',input('pid'));
         return $this->fetch();
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
         $pro = new Article();
         $data['name']=input('name');
         $data['pageview']=input('pageview');
         $data['info']=input('info');
         $data['icon']=input('icon');
         $data['down']=input('down');
         $data['keywords']=input('keywords');
         $data['description']=input('description');
         $data['lang']=input('lang');
         $data['show']=input('show');
         $data['recommend']=input('recommend');
         $data['time']=input('time');
         $data['lPath']=input('lPath');
         $stringArr = explode("-",$data['lPath']);
         $data['lid'] = $stringArr[count($stringArr)-1];
         $data['articlecate_id']=$data['lid'];
         $pro->save($data);
         $log= new Log;
         $log->createlog('添加','添加文章:'.$data['name']);
         $this->redirect('Articlelist/index'); 
         
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    { 
      $data=Article::get($id);
      $cate=ArticlecateModel::all();
      $Category = new Category();        
      $list=$Category::unlimitedForLever($cate,'--');
      $this->assign('list',$list);
      $this->assign('data',$data);
      return $this->fetch();
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
     $Article = new Article();
     $data['name']=input('name');
     $data['pageview']=input('pageview');
     $data['info']=input('info');
     $data['icon']=input('icon');
     $data['down']=input('down');
     $data['keywords']=input('keywords');
     $data['description']=input('description');
     $data['lang']=input('lang');
     $data['show']=input('show');
     $data['time']=input('time');
     $data['recommend']=input('recommend');
     $data['lPath']=input('lPath');
     $stringArr = explode("-",$data['lPath']);
     $data['lid'] = $stringArr[count($stringArr)-1];
     $data['articlecate_id']=$data['lid'];
     $Article->allowField(true)->save($data,['id' => $id]);
     $log= new Log;
     $log->createlog('更新','更新文章:'.$data['name']);
     $this->redirect('Articlelist/index');   
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
    $user = Article::get($id);
    $user->delete();
    $log= new Log;
    $log->createlog('删除','删除文章:'.$user['name']);
    $this->redirect('Articlelist/index'); 
    }

         public function ajaxdelete($id)
    {  
        Article::destroy($id);
        return $id;
    }

       public function ajaxsortupdate($sort="",$id="")
    {   
        $slide = new Article();
        $slide->allowField(true)->save($_POST,['id' => $id]);
        return '成功';
    }
}
