<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"G:\xampp\htdocs\website\public/../application/admin\view\login\index.html";i:1490075780;}*/ ?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <title>登录界面</title>

    <!-- Bootstrap core CSS -->
    <link href="__static__/bootstrap3.37/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="__static__/css/buttons.css">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="__static__/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="__static__/css/signin.css" rel="stylesheet">
     <link href="__static__/css/news.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="__static__/js/ie-emulation-modes-warning.js"></script>
     <script src="__static__/js/jquery.min.js"></script>
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   <style>
   	

   	#inputPassword{margin-top: 20px;}
   </style>


  </head>

  <body>

    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">网站后台登录</h2>
        <label for="inputEmail" class="sr-only">帐号</label>
        <input type="username" id="inputuser" class="form-control" placeholder="请输入帐号"   >

          <label id="target"  for="inputPassword" class="sr-only">帐号不能为空</label>
          <input type="password"  id="inputPassword" class="form-control" placeholder="密码" >
         
            <label id="target1" for="inputPassword" class="sr-only">密码不能为空</label>
     <div class="">     <input type="password"  id="code" name="code" class="fl form-control yz" placeholder="验证码" >
<img id="verify_img" src="/index.php/captcha"  alt="验证码" onclick="refreshVerify()">
 <div class="clear"></div>
  <label id="target2"  for="inputPassword" class="sr-only">验证码不能为空</label>         
</div>
  
 <div class="clear"></div>
 


                <script>
    function refreshVerify() {
        var ts = Date.parse(new Date())/1000;
        $('#verify_img').attr("src", "/captcha?id="+ts);
    }
</script>    
           <button  id="loginbt" type="button"   class="button button-3d button-primary button-rounded">登录</button>
      </div>

    </form> <!-- /container -->

 
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src="__static__/js/loginajax.js"></script>
    <script src="__static__/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
