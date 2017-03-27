<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\controller\Common;
use app\admin\model\Downcate as DowncateModel;
use proCategory\Category;
use think\Db;
use app\admin\model\Log;
class Downcate extends Common
{
   /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {    $cate=DowncateModel::all();
         $Category = new Category();        
         $list=$Category::unlimitedForLever($cate,'--');
         $this->assign('list',$list); 
         return $this->fetch('downcate');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {   
        if(input('pid')==null)
        {   $pid=0;
             
               }
        else{
          $pid=input('pid');

        }
        $this->assign("pid",$pid);
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
        $slide = new DowncateModel();
        if(input('pid')==0)
        {
         $data['pid']=0;
         $data['path']=0;
        }
        else{

         $data['pid'] =  input('pid');
         $pPath    =   Db::name('downcate')->where('id',$data['pid'])->select();     
         $data['path'] = $pPath['0']['path'].'-'.(string)$data['pid'];
        }
         $data['name']=input('name');
         $data['icon']=input('icon');       
         $slide->isUpdate(false)->allowField(true)->save($data);
         $log= new Log;
         $log->createlog('添加','添加下载分类:'.$data['name']);
         $this->redirect('downcate/index'); 
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
         $data=DowncateModel::get($id);
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
           $slide = new DowncateModel();
   $slide->allowField(true)->save($_POST,['id' => $id]);
   $log= new Log;
   $log->createlog('更新','更新下载分类:'.$_POST['name']);
   $this->redirect('downcate/index');   
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
   $user = DowncateModel::get($id);
   $user->delete();
   $log= new Log;
   $log->createlog('删除','删除下载分类:'.$user['name']);
   $this->redirect('downcate/index'); 
    }

     public function ajaxdelete($id)
    {  
        DowncateModel::destroy($id);
        return $id;
    }
        public function ajaxsortupdate($sort="",$id="")
    {   
        $slide = new DowncateModel();
        $slide->allowField(true)->save($_POST,['id' => $id]);
        return '成功';
    }
}
