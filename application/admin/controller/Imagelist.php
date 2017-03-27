<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\controller\Common;
use app\admin\model\Imagecate as ImagecateModel;
use app\admin\model\Image;
use proCategory\Category;
use think\Db;
use app\admin\model\Log;
class Imagelist extends Common
{
   /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {   if (input('keyword'))
         {                
        $map['wb_product.name'] = ['like','%'. input('keyword').'%'];
              }
         if(!input('keyword')&&!input('pid'))
         {

        $map="";
         } 
          if (input('pid'))
         {                
        $map['wb_image.lid'] = ['like','%'. input('pid').'%'];
              }

        $cate=ImagecateModel::all();
        $Category = new Category();        
        $list=$Category::unlimitedForLever($cate,'--');
        $this->assign('list',$list);
        $pcate= new ImagecateModel;
        $pro=$pcate->where($map)        
        ->alias('a')
        ->join('wb_image w','w.lid = a.id')
        ->order('w.sort asc,w.id asc')
        ->field(['w.id'=>'id','w.name'=>'name','a.name'=>'cate','w.sort'=>'sort','a.icon'=>'cateicon','w.icon'=>'icon','w.createtime','w.updatetime'])
        ->paginate(15,false,['query' => ['keyword'=>input('keyword'),'id'=>input('pid')] ]);

        $this->assign('pro',$pro);
        $this->assign('pid',input('pid'));
        $this->assign('keyword',input('keyword'));       
        return $this->fetch('imagelist');


    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {   $cate=ImagecateModel::all();
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
         $pro = new Image();
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
         $data['lPath']=input('lPath');
         $stringArr = explode("-",$data['lPath']);
         $data['lid'] = $stringArr[count($stringArr)-1];
         $data['imagecate_id']=$data['lid'];
         $pro->save($data);
         $log= new Log;
         $log->createlog('添加','添加图片:'.$data['name']);
         $this->redirect('imagelist/index'); 
         
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
      $data=Image::get($id);
      $cate=ImagecateModel::all();
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
     $Image = new Image();
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
     $data['lPath']=input('lPath');
     $stringArr = explode("-",$data['lPath']);
     $data['lid'] = $stringArr[count($stringArr)-1];
     $data['imagecate_id']=$data['lid'];
     $Image->allowField(true)->save($data,['id' => $id]);
     $log= new Log;
     $log->createlog('更新','更新图片:'.$data['name']);
     $this->redirect('imagelist/index');   
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
    $user = Image::get($id);
    $user->delete();
    $log= new Log;
    $log->createlog('删除','删除图片:'.$data['name']);
    $this->redirect('imagelist/index'); 
    }

         public function ajaxdelete($id)
    {  
        Image::destroy($id);
        return $id;
    }

       public function ajaxsortupdate($sort="",$id="")
    {   
        $slide = new Image();
        $slide->allowField(true)->save($_POST,['id' => $id]);
        return '成功';
    }
}
