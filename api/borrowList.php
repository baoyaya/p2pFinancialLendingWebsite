<?php
    // 获取登录用户的id
    session_start();
    $userid=$_SESSION['id'];
    
    // 连接数据
    require_once('./conn.php');
    // 构造sql语句
    $sql="select * from borrowinfo where userid=$userid";
    // 执行查询数据的sql语句
    $result=mysqli_query($link,$sql);
    //定义数组变量
    $dataArray=[];
    // 遍历获取结果集
    //mysqli_fetch_assoc 有结果返回行记录的关联数组，没有结果null
    while($rs=mysqli_fetch_assoc($result)){
        array_push($dataArray,$rs);
    }
    echo json_encode($dataArray);
?>