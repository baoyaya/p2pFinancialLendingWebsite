<?php
// 获取登录用户的id
   session_start();
   $userid=$_SESSION['id'];
  // 连接数据库
  require_once("./conn.php");
  // 构造sql语句(查询登录用户的所有数据)
  $sql="select * from borrowinfo where userid=$userid";
  // 执行sql语气
  $data=mysqli_query($link,$sql);
  //定义一个数组
  $sumData=[
      ["value"=>0,"name"=>"房易贷"],
      ["value"=>0,"name"=>"车易贷"],
      ["value"=>0,"name"=>"信用贷"]
  ];
  //逐行读取
  while($rs=mysqli_fetch_assoc($data)){
    //  <option value="1">信用贷</option>
    // <option value="2">车易贷</option>
    // <option value="3">房易贷</option>
     if($rs['borrowType']==1){
        $sumData[2]["value"]+=$rs['borrowAmount'];
     }else if($rs['borrowType']==2){
        $sumData[1]["value"]+=$rs['borrowAmount'];
     }else if($rs['borrowType']==3){
        $sumData[0]["value"]+=$rs['borrowAmount'];
     }
  }
    // 返回的结果
  $result=[
      'title'=>['房易贷','车易贷','信用贷'],
      'data'=>$sumData
  ];
  echo json_encode($result);
?>