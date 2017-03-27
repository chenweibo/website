<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Gbook as GbookModel;
class Gbook extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {  
       $list=GbookModel::all();
       $this->assign('list' ,$list);
        return $this->fetch('gbook');
    }


    public function read($id)
    {
       $data=GbookModel::get($id);
       $this->assign('data' ,$data);
        return $this->fetch();
    }



    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
  public function delete($id)
    {
    $user = GbookModel::get($id);
    $user->delete();
    $this->redirect('gbook/index');     
    }
    
    public function ajaxdelete($id)
    {  
        GbookModel::destroy($id);
        return $id;
    }
}
