<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Productcate as ProductcateModel;
use proCategory\Category;
use think\Db;
use app\admin\controller\Common;
use app\admin\model\Log;

class Productcate extends Common
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {    $cate=ProductcateModel::all();
         $Category = new Category();        
         $list=$Category::unlimitedForLever($cate,'--');
         $this->assign('list',$list); 
         return $this->fetch('productcate');
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
        $slide = new ProductcateModel();
        if(input('pid')==0)
        {
         $data['pid']=0;
         $data['path']=0;
        }
        else{

         $data['pid'] =  input('pid');
         $pPath    =   Db::name('productcate')->where('id',$data['pid'])->select();     
         $data['path'] = $pPath['0']['path'].'-'.(string)$data['pid'];
        }
         $data['name']=input('name');
         $data['icon']=input('icon');
         $data['jingtai']=input('jingtai');       
         $slide->isUpdate(false)->allowField(true)->save($data);
         $log= new Log;
         $log->createlog('添加','添加分类:'.$data['name']);
         $this->redirect('Productcate/index'); 
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
         $data=ProductcateModel::get($id);
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
   $data=ProductcateModel::get($id);    
   $log= new Log;
       
   $slide = new ProductcateModel();
   $slide->allowField(true)->save($_POST,['id' => $id]);

   $this->redirect('Productcate/index');   
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
   $user = ProductcateModel::get($id);
   $user->delete();
   $log= new Log;
   $log->createlog('删除','删除分类:'.$user['name']);
   $this->redirect('/admin/productcate'); 
    }

     public function ajaxdelete($id)
    {  
        ProductcateModel::destroy($id);

        return $id;
    }
        public function ajaxsortupdate($sort="",$id="")
    {   
        $slide = new ProductcateModel();
        $slide->allowField(true)->save($_POST,['id' => $id]);
        $user=ProductcateModel::get($id);
        $log= new Log;
        $log->createlog('更新','更新排序:'.$user['name']);

        return '成功';
    }
}
