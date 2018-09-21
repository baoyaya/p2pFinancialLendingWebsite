//发起ajax请求到后端API验证是否登录
$.get("./api/checkState.php",function(result){
    //处理前端的业务逻辑
    if(!result.isSuccess){
        alert(result.msg);
        location.href="login.php";
       
    }
},"json")