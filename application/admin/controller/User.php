<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\controller\Common;
use app\admin\model\User as UserModel;
use app\admin\model\Log;
class User extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    { 
      $list=UserModel::all();
      $this->assign('list',$list);
      return $this->fetch('user');
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
        $slide = new UserModel($_POST);
        $slide->allowField(true)->save();
         $log= new Log;
         $log->createlog('添加','添加管理员:'.$_POST['username']);
        $this->redirect('user/index');
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
      $data=UserModel::get($id);
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
          $slide = new UserModel();
    $slide->allowField(true)->save($_POST,['id' => $id]);
    $log= new Log;
    $log->createlog('更新','更新管理员:'.$_POST['username']);
    $this->redirect('user/index');    
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
           $user = UserModel::get($id);
    $user->delete();
    $log= new Log;
    $log->createlog('删除','删除管理员:'.$user['username']);
    $this->redirect('user/index'); 
    }

         public function ajaxdelete($id)
    {  
        UserModel::destroy($id);
        return $id;
    }
}
