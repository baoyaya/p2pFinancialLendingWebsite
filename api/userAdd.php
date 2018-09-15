<?php 
    // 接收前端数据
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $mobilePhone=$_POST['mobilePhone'];
    $email=$_POST['email'];
    
    // 引入连接
    require_once('./conn.php');
    // 构造sql语句
    $sql='insert into userinfo(username,pwd,mobile,email) values("'.$username.'","'.$password.'","'.$mobilePhone.'","'.$email.'")';
    //执行sql语句
    $result=mysqli_query($link,$sql);
    //条件判断
    if($result){
        $msgArray=['issuccess'=>true,'msg'=>'用户注册成功'];
        echo json_encode($msgArray);
        
    }else{
        $msgArray=['issuccess'=>false,'msg'=>'用户注册失败'];
        echo json_encode($msgArray);
    }

//    require_once("./closeFree.php");
?>