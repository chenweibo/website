<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Others as OthersModel;
use app\admin\model\Log;
class Others extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {  $others=OthersModel::get(1);
       $this->assign('others',$others);
       return $this->fetch('others');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        
        $others=OthersModel::get(1);
        $others->allowField(true)->save($_POST,['id' => 1]);
        $log= new Log;
        $log->createlog('更新','更新:其他设置');
        $this->redirect('others/index');     
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
        //
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
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
