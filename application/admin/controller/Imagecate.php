<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\controller\Common;
use app\admin\model\Imagecate as ImagecateModel;
use proCategory\Category;
use think\Db;
use app\admin\model\Log;
class Imagecate extends Common
{
   /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {    $cate=ImagecateModel::all();
         $Category = new Category();        
         $list=$Category::unlimitedForLever($cate,'--');
         $this->assign('list',$list); 
         return $this->fetch('imagecate');
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
        $slide = new ImagecateModel();
        if(input('pid')==0)
        {
         $data['pid']=0;
         $data['path']=0;
        }
        else{

         $data['pid'] =  input('pid');
         $pPath    =   Db::name('imagecate')->where('id',$data['pid'])->select();     
         $data['path'] = $pPath['0']['path'].'-'.(string)$data['pid'];
        }
         $data['name']=input('name');
         $data['icon']=input('icon');       
         $slide->isUpdate(false)->allowField(true)->save($data);
         $log= new Log;
         $log->createlog('添加','添加图片分类:'.$data['name']);
         $this->redirect('imagecate/index'); 
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
         $data=ImagecateModel::get($id);
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
   $slide = new ImagecateModel();
   $slide->allowField(true)->save($_POST,['id' => $id]);
   $log= new Log;
   $log->createlog('更新','更新图片分类:'.$_POST['name']);
   $this->redirect('imagecate/index');   
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
   $user = ImagecateModel::get($id);
   $user->delete();
   $log= new Log;
   $log->createlog('删除','删除图片分类:'.$user['name']);
   $this->redirect('imagecate/index'); 
    }

     public function ajaxdelete($id)
    {  
        ImagecateModel::destroy($id);
        return $id;
    }
        public function ajaxsortupdate($sort="",$id="")
    {   
        $slide = new ImagecateModel();
        $slide->allowField(true)->save($_POST,['id' => $id]);
        return '成功';
    }
}
