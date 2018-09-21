<?php
    //设置编码方式
    header("Content-Type:text/html;charset=utf-8");
    //接收前端数据
        // 借款类型 borrowType
        // 借款金额 borrowAmount
        // 借款利息 currentRate
        // 借款期限 monthes2Return
        // 还款方式 repayment
        // 最小投标 minAmount
        // 最大投标 maxAmount
        // 投标奖金 rewardAmount
        // 招标天数 disableDays
        // 借款标题 borrowTitle
        // 借款描述 description
        // 借款人编号 userid
      
    $borrowType=$_POST['borrowType'];
    $borrowAmount=$_POST['bidRequestAmount'];
    $currentRate=$_POST['currentRate'];
    $monthes2Return=$_POST['monthes2Return'];
    $repayment=$_POST['inlineRadioOptions'];
    $minAmount=$_POST['minBidAmount'];
    $maxAmount=$_POST['maxBidAmount'];
    $rewardAmount=$_POST['totalRewardAmount'];
    $disableDays=$_POST['disableDays'];
    $borrowTitle=$_POST['title'];
    $description=$_POST['description'];
    session_start();
    $userid=$_SESSION['id'];

    // 连接数据库
    require_once('./conn.php');
    // 构造sql语句
    $borrowsql="insert into borrowinfo(borrowType,borrowAmount,currentRate,monthes2Return,repayment,minAmount,rewardAmount,maxAmount,disableDays,borrowTitle,description,userid) values('$borrowType',$borrowAmount,$currentRate,$monthes2Return,$repayment,$minAmount,$rewardAmount,$maxAmount,$disableDays,'$borrowTitle','$description', $userid)";
    // 执行sql语句
    $result=mysqli_query($link,$borrowsql);
    //条件判断
    if($result){
        $msgArrary=['issuccess'=>true,'msg'=>'借款申请提交成功'];
        echo json_encode($msgArrary);
    }else{
        $msgArrary=['issuccess'=>false,'msg'=>'借款申请提交失败'];
        echo json_encode($msgArrary);
    }
?>