<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"/www/wwwroot/o.dqzd.cpm/public/../application/admin/view/productlist/productlist.html";i:1488592452;s:75:"/www/wwwroot/o.dqzd.cpm/public/../application/admin/view/public/header.html";i:1489116328;s:73:"/www/wwwroot/o.dqzd.cpm/public/../application/admin/view/public/left.html";i:1489041906;s:75:"/www/wwwroot/o.dqzd.cpm/public/../application/admin/view/public/footer.html";i:1488521156;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="chenweibo">
    <meta name="renderer" content="webkit">
    <title>产品列表设置-企业网站管理后台</title>
    <!-- Bootstrap core CSS -->
    <link href="__static__/bootstrap3.37/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="__static__/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link rel="stylesheet" href="__static__/css/buttons.css">
    <!-- Custom styles for this template -->
    <link href="__static__/css/dashboard.css" rel="stylesheet">
    <link href="__static__/css/news.css" rel="stylesheet">
     <link href="__static__/datetime/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="__static__/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="__static__/js/ie-emulation-modes-warning.js"></script>
    <script src="__static__/js/jquery.min.js"></script>    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="__static__/js/html5shiv.min.js"></script>
      <script src="__static__/js/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript" src="__static__/UEditor/ueditor.config.js"></script>
<script type="text/javascript" src="__static__/UEditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="__static__/UEditor/lang/zh-cn/zh-cn.js"></script> 
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo url('/admin'); ?>">网站后台管理</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a target="_blank" href="/">网站首页</a></li>
            <li><a href="">清除缓存</a></li>
          
            <li><li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    您好，<?php echo $a; ?>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li  ><a href="javascript:;"  data-toggle="modal" data-target="#myModal">修改密码</a></li>
                    <li><a href="<?php echo url('login/logindelet'); ?>">退出登录</a></li>
                  
                </ul>
            </li></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
          修改密码
        </h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
      
      <div class="form-group"> 
        <label for="lastname" class="col-sm-2 control-label">旧密码</label> 
        <div class="col-sm-10">
          <input type="text" class="form-control" id="oldname"
              placeholder="请输入旧密码">
         </div>
       </div>

             <div class="form-group"> 
        <label for="lastname" class="col-sm-2 control-label">新密码</label> 
        <div class="col-sm-10">
          <input type="text" class="form-control" id="newsname"
              placeholder="请输入新密码">
         </div>
       </div>
        <label id="targetp"  for="inputPassword" class="sr-only zh">帐号不能为空</label>

     </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pwgb" data-dismiss="modal">关闭
        </button>
        <button type="button" id="updatapw" class="btn btn-primary updatapw">
          提交更改
        </button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal -->
</div>






    <div class="container-fluid">
      <div class="row">


        <div class="col-sm-3 col-md-2 sidebar gaoliang">
          <ul class="nav nav-sidebar">
            <li  ><a href="<?php echo url('/admin/system'); ?>"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 系统设置 <span class="sr-only"></span></a></li>
            
            <li><a href="<?php echo url('/admin/others'); ?>"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span> 其他设置</a></li>
            <li><a href="<?php echo url('/admin/slide'); ?>"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> 首页幻灯片</a></li>
            <li><a href="<?php echo url('/admin/page'); ?>"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> 单篇文章</a></li>
            <li><a href="<?php echo url('/admin/gbook'); ?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 建议反馈</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="<?php echo url('/admin/productcate'); ?>">  <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 产品分类</a></li>
            <li><a href="<?php echo url('/admin/productlist'); ?>"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> 产品列表</a></li>
            <li><a href="<?php echo url('/admin/articlecate'); ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 文章分类</a></li>
            <li><a href="<?php echo url('/admin/articlelist'); ?>"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> 文章列表</a></li>
            <li><a href="<?php echo url('/admin/imagecate'); ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 图片分类</a></li>
            <li><a href="<?php echo url('/admin/imagelist'); ?>"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> 图片列表</a></li>
            <li><a href="<?php echo url('/admin/downcate'); ?>"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 下载分类</a></li>
            <li><a href="<?php echo url('/admin/downlist'); ?>"><span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span> 下载列表</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> 回收站</a></li>
            
            <li><a href="<?php echo url('/admin/user'); ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 添加管理员</a></li>
          </ul>
        </div>



   <script type="text/javascript">
     
     $(".gaoliang .nav:eq(1) li:eq(1)").addClass('active');
  
   </script>

  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">产品列表</h1>
<div class="controllerbut">
  <a href="<?php echo url('create',['pid'=>$pid]); ?>" class="button button-primary button-rounded button-small">添加</a>
    <a  class="button chanpsc  button-caution button-rounded button-small">批量删除</a>
   
</div>

<form method="get" action="<?php echo url('/admin/productlist'); ?>" >
 <div class="row" style="margin-bottom:20px">
  <div class="col-lg-1">
    <div class="input-group">
  <select class="form-control " name="pid"  style="width:120px" >
   <option value="0" >全部</option>
  <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

  <option <?php if($vo['id'] == $pid): ?>
selected="select"<?php endif; ?> value="<?php echo $vo['id']; ?>" ><?php echo $vo['html']; ?><?php echo $vo['name']; ?></option>
  <?php endforeach; endif; else: echo "" ;endif; ?>
  </select>
    </div><!-- /input-group -->

    
  </div>
  <div class="col-lg-3">
    <div class="input-group">
      <input type="text" class="form-control" name="keyword" value="<?php echo $keyword; ?>" placeholder="搜索...">
      <span class="input-group-btn">
      <button class="btn btn-default" >Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row --> 

</form>

<div class="panel panel-default">
  <div class="panel-heading">
   产品列表
  </div>
  <table class="table">
    <thead>
      <tr>
        <th><input class="all shancu"   type="checkbox"/></th>
        <th>id</th>        
        <th>名称</th>
        <th>排序</th> 
        <th>所属分类</th>
        <th>缩略图</th>      
        <th>添加时间</th>
        <th>更新时间</th>
        <th>操作</th>
        
      </tr>
    </thead>
    <tbody>
       <form>
<!--  -->       <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
           <tr>
             <td><input name="delete[]" class="ckid" type="checkbox" value="<?php echo $vo['id']; ?>" /></td>
             <td><?php echo $vo['id']; ?></td>
             <td><?php echo $vo['name']; ?></td>
             <td data-id="<?php echo $vo['id']; ?>" class="clicksortcp"><?php echo $vo['sort']; ?></td>
             <td ><?php echo $vo['cate']; ?></td> 
             <td class="dingwei" ><?php if($vo['icon'] == ''): ?>

                      <img src="__static__/img.png" alt=""  class="suolue">
                      <img src="__static__/img.png" alt=""  class="suolueft"  >
             <?php else: ?>
            
                      <img src="/<?php echo $vo['icon']; ?>" alt=""  class="suolue">
                      <img src="/<?php echo $vo['icon']; ?>" alt=""  class="suolueft"  >

                      <?php endif; ?>
             </td>                       
             <td><?php echo $vo['createtime']; ?></td>
            <td><?php echo $vo['updatetime']; ?></td>
           <td>

             <a href="<?php echo url('edit',['id' =>$vo['id']]); ?>" class="button button-royal button-rounded button-tiny">编辑</a>
             <a href="<?php echo url('delete',['id' =>$vo['id']]); ?>" class="button button-caution button-rounded button-tiny">删除</a>
           </td>
           </tr>
        
        

       
<?php endforeach; endif; else: echo "" ;endif; ?>


       </form>
    </tbody>
  </table>



</div>
<div style="float:right"><?php echo $pro->render(); ?></div>

        </div>
      </div>
    </div>
   <script type="text/javascript">
$(document).ready(function(){
$(".chanpsc").click(function(){
if($('input[name="delete[]"]').is(':checked')) {
var chk_value =[]; 
$('input[name="delete[]"]:checked').each(function(){ 
chk_value.push($(this).val()); 
}); 

          $.ajax({
              
              type:'POST',
              url:'/admin/productlist/ajaxdelete' ,
              data: { "id" :chk_value } ,  
              dataType:'json',
              success:function(data){
                  window.location.reload();
              },
                error: function () { alert("错误") }
          });     
 }
 else{
  alert('请选择要删除的内容');
 }


});
  });


　　$(".shancu").click(function(){
 　
 　　$("input[name='delete[]']").attr("checked", $(this).attr("checked")); 
 　　
 　　$("input[name='delete[]']").prop("checked", $(this).prop("checked"));
　　　
 　　var str = '';
 　　$($("input[name='delete[]']:checked")).each(function(){
 　　str += $(this).next().text() + ',';
 　　});
 　　
　　}); 


$(document).ready(function(){

$(".clicksortcp").click(function(){
//123
var td = $(this);


var txt = td.text();
var id = $(".clicksortcp").data("id");
var input = $("<input  class='ssort'   type='text' value='" + txt + "'/>"); 
td.html(input);
input.click(function() { return false; }); 
input.trigger("focus"); 
input.blur(function() { 
var newtxt = $(this).val();
if(newtxt==txt){
td.html(newtxt);
}
else{
 var id=td.data('id');
     $.ajax({
              
              type:'POST',
              url:'/admin/productlist/ajaxsortupdate' ,
              data: { "id" :id, "sort" :newtxt } ,  
              dataType:'json',
              success:function(data){
                 td.html(newtxt);

              },
                error: function () { alert("错误") }
          });

}
});
});
});


   </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="__static__/js/ajax.js"></script>
    <script src="__static__/bootstrap3.37/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script type="text/javascript" src="__static__/datetime/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="__static__/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="__static__/datetime/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="__static__/datetime/js/locales/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>


<script type="text/javascript">
	
		$('.form_date').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
         format: 'yyyy-mm-dd hh:ii',
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
</script>
  </body>
</html>
