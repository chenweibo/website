<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\controller\Common;
use app\admin\model\Downcate as DowncateModel;
use app\admin\model\Down;
use proCategory\Category;
use think\Db;
use app\admin\model\Log;
class Downlist extends Common
{
     /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {   if (input('keyword'))
         {                
        $map['wb_down.name'] = ['like','%'. input('keyword').'%'];
              }
         if(!input('keyword')&&!input('pid'))
         {

        $map="";
         } 
          if (input('pid'))
         {                
        $map['wb_down.lid'] = ['like','%'. input('pid').'%'];
              }

        $cate=DowncateModel::all();
        $Category = new Category();        
        $list=$Category::unlimitedForLever($cate,'--');
        $this->assign('list',$list);
        $pcate= new DowncateModel;
        $pro=$pcate->where($map)        
        ->alias('a')
        ->join('wb_down w','w.lid = a.id')
        ->order('w.sort asc,w.id asc')
        ->field(['w.id'=>'id','w.name'=>'name','a.name'=>'cate','w.sort'=>'sort','a.icon'=>'cateicon','w.icon'=>'icon','w.createtime','w.updatetime'])
        ->paginate(15,false,['query' => ['keyword'=>input('keyword'),'id'=>input('pid')] ]);

        $this->assign('pro',$pro);
        $this->assign('pid',input('pid'));
        $this->assign('keyword',input('keyword'));       
        return $this->fetch('downlist');


    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {   $cate=DowncateModel::all();
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
         $pro = new Down();
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
         $data['downcate_id']=$data['lid'];
         $pro->save($data);
         $log= new Log;
         $log->createlog('添加','添加下载:'.$data['name']);
         $this->redirect('downlist/index'); 

         
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
      $data=Down::get($id);
      $cate=DowncateModel::all();
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
     $product = new Down();
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
     $data['downcate_id']=$data['lid'];
     $product->allowField(true)->save($data,['id' => $id]);
     $log= new Log;
     $log->createlog('更新','更新下载:'.$data['name']);
     $this->redirect('downlist/index');   
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
    $user = Down::get($id);
    $user->delete();
    $log= new Log;
    $log->createlog('删除','删除下载:'.$user['name']);
    $this->redirect('downlist/index'); 
    }

         public function ajaxdelete($id)
    {  
        Down::destroy($id);
        return $id;
    }

       public function ajaxsortupdate($sort="",$id="")
    {   
        $slide = new Down();
        $slide->allowField(true)->save($_POST,['id' => $id]);
        return '成功';
    }
}
