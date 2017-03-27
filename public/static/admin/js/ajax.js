
    var old=$("#oldname");
       var news=$("#newsname");
       $("#updatapw").click(function(){


          if(old.val()==0){

              $("#oldname").focus();
                $("#targetp").text('*  旧密码不能为空');
                $("#targetp").removeClass("sr-only");  

             return false;
          }else 
          if(news.val()==0){

                $("#newsname").focus();
                $("#targetp").text('*  新密码不能为空');
                $("#targetp").removeClass("sr-only");
                  return false;
          }
             else{
            $.ajax({

                     type:'POST',
                     url:'/admin/index/updatapassword' ,
                     data: { "old" :old.val() , "news":news.val() } ,  
                     dataType:'json',
                     success:function(data){
                            if(data==0)
                            {
              $("#targetp").text('*  旧密码错误');
                $("#targetp").removeClass("sr-only");  

                            }

                            if(data==1)
                      {
                       $(".pwgb").click();
    
                     } 

                   },


                     error: function () { alert("登录出错,联系管理员") }

            });
           
          
}


       });


var up=$("#photoCover");
  var upfile=$("#lefile");
$('input[id=lefile]').change(function() {  
$('#photoCover').val($(this).val());  
});  

var up1=$("#photoCover1");
  var upfile1=$("#lefile1");
$('input[id=lefile1]').change(function() {  
$('#photoCover1').val($(this).val());  
});  

$(".ut2").click(function(){
        
      if(up.val()==0 ||upfile.val()==0){

            up.focus();
          $("#targetwz").removeClass("sr-only");
                 return false;
      }

      else{
       var formData = new FormData($( "#cess" )[0]);  
       $.ajax({  
          url: '/admin/common/upload' ,  
          type: 'POST',  
          data: formData,  
          async: false,  
          cache: false,  
          contentType: false,  
          processData: false,  
          success: function (data) {  
               
               $('#photoCover').val('uploads/'+data); 
          },  
          error: function () {  
              alert('上传错误联系管理员');  
          }  
     });  

       }


     });

$(".ut3").click(function(){
        
      if(up1.val()==0 ||upfile1.val()==0){

            up.focus();
          $("#targetwz1").removeClass("sr-only");
                 return false;
      }

      else{
       var formData = new FormData($( "#cess" )[0]);  
       $.ajax({  
          url: '/admin/common/downupload' ,  
          type: 'POST',  
          data: formData,  
          async: false,  
          cache: false,  
          contentType: false,  
          processData: false,  
          success: function (data) {  
               
               $('#photoCover1').val('uploads/'+data); 
          },  
          error: function () {  
              alert('上传错误联系管理员');  
          }  
     });  

       }


     });



 // 批量删除
$(document).ready(function(){
$(".psc").click(function(){
if($('input[name="delete[]"]').is(':checked')){
var chk_value =[]; 
$('input[name="delete[]"]:checked').each(function(){ 
chk_value.push($(this).val()); 
}); 

          $.ajax({
              
              type:'POST',
              url:'/admin/slide/ajaxdelete' ,
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
 　　
　　}); // 批量删除结束



//异步更新排序


$(document).ready(function(){

$(".clicksort").click(function(){
//123
var td = $(this);


var txt = td.text();
var id = $(".clicksort").data("id");
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
              url:'/admin/slide/ajaxsortupdate' ,
              data: { "id" :id, "slide_sort" :newtxt } ,  
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
//异步更新排序结束


