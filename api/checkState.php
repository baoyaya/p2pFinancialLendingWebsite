<?php
session_start();
if (isset($_SESSION['username'])) {
    $username=$_SESSION['username'];
    $msgArray=['isSuccess'=>true,'msg'=>'登录成功','username'=>$username];
    echo json_encode($msgArray);
}else{
    $msgArray=['isSuccess'=>false,'msg'=>'该页面需登录后方可操作，现为你跳转到登录页面'];
    echo json_encode($msgArray);
}

?>