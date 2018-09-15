<?php
    // 接收前端数据
    $username=$_POST['username'];
    $password=md5($_POST['password']);
   
    // 引入连接
    require_once('./conn.php');
    // 构造sql语句
    $sql="select * from userinfo where username='".$username."' and pwd='".$password."'";

    //执行sql语句
    $result=mysqli_query($link,$sql);
    $rs=mysqli_fetch_assoc($result);
    if($rs!=null){
        $msgArray=['issuccess'=>true,'msg'=>'用户登录成功'];
        echo json_encode($msgArray);
       
    }else{
        $msgArray=['issuccess'=>false,'msg'=>'用户登录失败'];
        echo json_encode($msgArray);

    }

require_once("./closeFree.php");

?>