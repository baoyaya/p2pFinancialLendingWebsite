<?php
    // 连接数据
    require_once('./conn.php');
    // 构造sql语句
    $sql="select * from borrowinfo";
    // 执行查询数据的sql语句
    $result=mysqli_query($link,$sql);
    //获取总记录数
    $total=mysqli_num_rows($result);
    //接收分页参数    
    $pageIndex=$_GET['pageIndex'];
    $pageSize=$_GET['pageSize'];
    //跳过的数据
    $skipNum=$pageIndex*$pageSize;
    $sql.=" limit $skipNum,$pageSize";
    //在执行一次查询
    $result=mysqli_query($link,$sql);
    //定义数组变量
    $dataArray=[];
    // 遍历获取结果集
    //mysqli_fetch_assoc 有结果返回行记录的关联数组，没有结果null
    while($rs=mysqli_fetch_assoc($result)){
        array_push($dataArray,$rs);
    }
    // 把结果集转换为json发给前端
    $result=[
        "total"=>$total,
        "list"=>$dataArray
    ];
    echo json_encode($result);
?>