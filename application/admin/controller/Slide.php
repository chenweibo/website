<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\controller\Common;
use app\admin\model\Slide as SlideModel;
use app\admin\model\Log;
class Slide extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {   $slide = new SlideModel;
        $list =SlideModel::all();
        $this->assign('list',$list);
        
       return $this->fetch('slide');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {   
        return $this->fetch('create');   
    }
     


    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save()
    {
        $slide = new SlideModel($_POST);
        $slide->allowField(true)->save();
        $log= new Log;
        $log->createlog('添加','添加幻灯片:'.$_POST['slide_name']);
        $this->redirect('slide/index');    
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
   
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
      $data=SlideModel::get($id);
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
   $slide = new SlideModel();
   $slide->allowField(true)->save($_POST,['id' => $id]);
   $log= new Log;
   $log->createlog('更新','更新幻灯片:'.$_POST['slide_name']);
   $this->redirect('slide/index');         
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
    $user = SlideModel::get($id);
    $user->delete();
    $log= new Log;
    $log->createlog('删除','删除幻灯片:'.$user['slide_name']);
    $this->redirect('slide/index');     
    }
    
    public function ajaxdelete($id)
    {   
        SlideModel::destroy($id);
        return $id;
    }

    public function ajaxsortupdate($slide_sort="",$id="")
    {   
        $slide = new SlideModel();
        $slide->allowField(true)->save($_POST,['id' => $id]);
        return '成功';
    }




}
