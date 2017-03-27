
document.onkeydown = function (e) { 
var theEvent = window.event || e; 
var code = theEvent.keyCode || theEvent.which; 
if (code == 13) { 
$("#loginbt").click(); 
} 
}  

     function refreshVerify() {
        var ts = Date.parse(new Date())/1000;
        $('#verify_img').attr("src", "/captcha?id="+ts);
    }

  $(document).ready(function() { 
   
    $("#loginbt").bind('click',function(){ 
                var username=$("#inputuser").val(); 
                var password=$("#inputPassword").val(); 
                 var code=$("#code").val(); 
                 if(username==0)
                 {
                  $("#inputuser").focus();
                  $("#target").removeClass("sr-only"); 
                
               return false;
                 }
                 else if(password==0){
               $("#inputPassword").focus();

               $("#target1").removeClass("sr-only"); 
               return false;
                 }
                 else if(code==0)
                 {
                  $("#code").focus();
                  $("#target2").removeClass("sr-only"); 
                
               return false;
                 }

                 else
                 {
                    
                $.ajax({

                        type:'POST',
                        url: '/admin/login/loginajax' ,
                        data:{  "un":username , "pw":password ,"code":code },
                        dataType:'json',
                        success:function(data){
                          if(data==-1)
                          {

                          $("#code").focus();

                $("#target2").text('验证码错误');
                $("#target2").removeClass("sr-only"); 
                  

                          }  

                            if(data==0)
                          {

                          $("#inputPassword").focus();
                          refreshVerify();
                          $("#target1").text('帐号或者密码错误');
                          $("#target1").removeClass("sr-only"); 
                  

                          } 
                          if(data==1){

                           window.location.href="index";
                          }   


                                                        
                        },

                          error: function () { alert("登录出错,联系管理员") }
                 });
                 return ture;
                 
                 }

               


               

    });

  
});





