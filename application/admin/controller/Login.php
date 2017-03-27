<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\admin\controller\Common;
use think\Session;
use app\admin\model\Log;
class Login extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()


    {    
   
           
           return $this->fetch();
    }


    /**
     * 登录AJAX验证
     *
     * @return \think\Response
     */
    public function loginajax($code="",$un="",$pw=""){          
               
         $captcha    =   new \think\captcha\Captcha();
         $result    =   Db::name('user')->where('username',$un)->find();
         $pwd= $result['password'];
         $log= new Log;
         if  (!$captcha->check($code))   
         {
            $log->createlog('登录','用户:'.$_POST['un'].'尝试登录验证码错误登录失败'); 
            return json('-1');

           }
        
        if($result && $pwd==$pw )
          {
              Session::set('uid',$result['id'],'login');
              Session::set('uname',$result['username'],'login');
              Session::set('time',time(),'login');
              $log->createlog('登录','用户:'.$result['username'].'登录成功');
              return json('1');

          }
          if($pwd!==$pw)
            {
             $log->createlog('登录','用户:'.$_POST['un'].'尝试登录帐号或者密码错误登录失败');
              return json('0');
          }
         
          if(!$result || $result['password']!=$pw)
            {
              $log->createlog('登录','用户:'.$_POST['un'].'尝试登录帐号或者密码错误登录失败');
              return json('0');
          }
 


    }

    public function logindelet(){
             $log= new Log;
            $log->createlog('登出','用户:'.Session::get('uname').'登出成功');
            Session::delete('uid','login');
            Session::delete('uname','login');

             $this->redirect( url('/login'));

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
        //
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
