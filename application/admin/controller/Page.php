<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Page as PageModel;
use app\admin\model\Log;
class Page extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {   

         $list=PageModel::all();
         $this->assign('list' ,$list);
         return $this->fetch('page');
         
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {  
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
        $slide = new PageModel($_POST);
        $slide->allowField(true)->save();
        $log= new Log;
        $log->createlog('添加','添加单篇文章:'.$_POST['name']);
        $this->redirect('page/index'); 
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
      $data=PageModel::get($id);
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
   $slide = new PageModel();
   $slide->allowField(true)->save($_POST,['id' => $id]);
   $log= new Log;
   $log->createlog('更新','更新单篇文章:'.$_POST['name']);
   $this->redirect('page/index'); 
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
    $user = PageModel::get($id);
    $user->delete();
    $log= new Log;
    $log->createlog('删除','删除单篇文章:'.$user['name']);
    $this->redirect('page/index');     
    }
    
    public function ajaxdelete($id)
    {  
        PageModel::destroy($id);
        return $id;
    }
}
