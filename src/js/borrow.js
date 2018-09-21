// 借款类型
var borrowUrl=location.href;
var borrowType=borrowUrl.split("=")[1];
$("#borrowId").val(borrowType);

$(".btn").on("click",function(){

    // 获取表单数据（该值为拼接的字符串）
    var borrowData=$("#formData").serialize();
        
    //发送ajax请求
    $.post("./api/borrowAdd.php",borrowData,function(result){
        if(result.issuccess){
            alert(result.msg);
            location.href='./borrow-list.php';
        }else{
            alert(result.msg);
        }
    },"json");
});
