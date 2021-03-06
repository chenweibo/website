<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\admin\model\Productcate as ProductcateModel;
use app\admin\model\Product;
use proCategory\Category;
use think\Db;
use app\admin\model\Log;
use app\admin\controller\Common;
class Productlist extends Common
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
        $map['wb_product.lid'] = ['like','%'. input('pid').'%'];
              }

        $cate=ProductcateModel::all();
        $Category = new Category();        
        $list=$Category::unlimitedForLever($cate,'--');
        $this->assign('list',$list);
        $pcate= new ProductcateModel;
        $pro=$pcate->where($map)        
        ->alias('a')
        ->join('wb_product w','w.lid = a.id')
        ->order('w.sort asc,w.id asc')
        ->field(['w.id'=>'id','w.name'=>'name','a.name'=>'cate','w.sort'=>'sort','a.icon'=>'cateicon','w.icon'=>'icon','w.createtime','w.updatetime'])
        ->paginate(15,false,['query' => ['keyword'=>input('keyword'),'id'=>input('pid')] ]);
       
        $this->assign('pro',$pro);
        $this->assign('pid',input('pid'));
        
        $this->assign('httpref',$_SERVER['HTTP_REFERER']);
        $this->assign('keyword',input('keyword'));       
        return $this->fetch('productlist');


    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {   $cate=ProductcateModel::all();
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
         $pro = new Product();
         $data['name']=input('name');
         $data['pageview']=input('pageview');
         $data['info']=input('info');
         $data['icon']=input('icon');
         $data['down']=input('down');
         $data['keywords']=input('keywords');
         $data['description']=input('description');
         $data['lang']=input('lang');
         $data['show']=input('show');
         $data['p_jintai']=input('p_jintai');         
         $data['imgmore']=input('imgmore');         
         $data['recommend']=input('recommend');
         $data['gaishu']=input('gaishu');
         $data['lPath']=input('lPath');
         $stringArr = explode("-",$data['lPath']);
         $data['lid'] = $stringArr[count($stringArr)-1];
         $data['productcate_id']=$data['lid'];
         $pro->save($data);
         $log= new Log;
         $log->createlog('添加','添加产品:'.$data['name']);
         $this->redirect('index',array('pid'=>$data['lid'])); 
         
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
      $data=Product::get($id);
      $cate=ProductcateModel::all();
      $Category = new Category();        
      $list=$Category::unlimitedForLever($cate,'--');
      $this->assign('list',$list);
      $this->assign('data',$data);
      if($data['imgmore']==null){
             $str=0;
      }else{
        $str=explode(',',$data['imgmore']);
      }
      
      $this->assign('str',$str);
         
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
     $product = new Product();
     $data['name']=input('name');
     $data['pageview']=input('pageview');
     $data['info']=input('info');
     $data['icon']=input('icon');
     $data['down']=input('down');
     $data['keywords']=input('keywords');
     $data['description']=input('description');
     $data['lang']=input('lang');
     $data['show']=input('show');
     $data['p_jintai']=input('p_jintai');   
     $data['imgmore']=input('imgmore');  
     $data['recommend']=input('recommend');
     $data['gaishu']=input('gaishu');
     $data['lPath']=input('lPath');
     $stringArr = explode("-",$data['lPath']);
     $data['lid'] = $stringArr[count($stringArr)-1];
     $data['productcate_id']=$data['lid'];

     $product->allowField(true)->save($data,['id' => $id]);
    
     $log= new Log;
     $log->createlog('更新','更新产品:'.$data['name']);
     $this->redirect($_POST['httpref']);   
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
    $user = Product::get($id);
    $user->delete();


    $log= new Log;
    $log->createlog('删除','删除产品:'.$user['name']);
    $this->redirect($_POST['httpref']);   
    }

        public function deletefinily($id)
    {
    $user = Product::get($id);


    $user->delete();
    $log= new Log;
    $log->createlog('删除','删除产品:'.$user['name']);
    $this->redirect('Productlist/index'); 
    }





         public function ajaxdelete($id)
    {  
        Product::destroy($id);
        return $id;
    }

       public function ajaxsortupdate($sort="",$id="")
    {   
        $slide = new Product();
        $slide->allowField(true)->save($_POST,['id' => $id]);
        return '成功';
    }


    function recycle(){

 if (input('keyword'))
         {                
        $map['wb_product.name'] = ['like','%'. input('keyword').'%'];
              }
         if(!input('keyword')&&!input('pid'))
         {

        $map="";
         } 
          if (input('pid'))
         {                
        $map['wb_product.lid'] = ['like','%'. input('pid').'%'];
              }
        $map['is_delete']=1;
        $cate=ProductcateModel::all();
        $Category = new Category();        
        $list=$Category::unlimitedForLever($cate,'--');
        $this->assign('list',$list);
        $pcate= new ProductcateModel;
        $pro=$pcate->where($map)        
        ->alias('a')
        ->join('wb_product w','w.lid = a.id')
        ->order('w.sort asc,w.id asc')
        ->field(['w.id'=>'id','w.name'=>'name','a.name'=>'cate','w.sort'=>'sort','a.icon'=>'cateicon','w.icon'=>'icon','w.createtime','w.updatetime'])
        ->paginate(15,false,['query' => ['keyword'=>input('keyword'),'id'=>input('pid')] ]);
       
        $this->assign('pro',$pro);
        $this->assign('pid',input('pid'));
        $this->assign('keyword',input('keyword')); 
       return $this->fetch('Productlist/recycle');   
     

    }


     function restore($id=""){
        $pcate= new Product;
        $pcate->save([
    'is_delete'  => '0',
],['id' => $id]);
      $this->redirect('Productlist/recycle');       
     }
}
