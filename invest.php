<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- bootstrap样式 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <!-- 引入分页样式 -->
  <link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
  <!-- 引入编译和压缩后的css文件 -->
  <link rel="stylesheet" href="./dist/css/minCss/invest.min.css">
</head>

<body>
  <!-- 引入header -->
  <?php
  require_once('header.php');
?>
  <!-- section开始 -->
  <div class="container">
    <h4>投资列表</h4>
    <div class="row">
      <div class="col-md-1 col-xs-3">
        <p>标的状态</p>
      </div>
      <div class="col-md-3 col-xs-8">
        <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
          <a href="#" class="btn btn-default" role="button">全部</a>
          <a href="#" class="btn btn-default" role="button">招标中</a>
          <a href="#" class="btn btn-default" role="button">还款中</a>
        </div>
      </div>
    </div>
    <div class="bs-example" data-example-id="simple-table">
      <table class="table">
        <thead>
          <tr>
            <th>借款人</th>
            <th width="180px">借款标题</th>
            <th>年利率</th>
            <th>金额</th>
            <th>还款方式</th>
            <th>进度</th>
            <th width="80px">操作</th>
          </tr>
        </thead>
        <tbody id="inventData">

        </tbody>
      </table>
    </div>
    <div id="page" class="m-pagination"></div>
  </div>
  <!-- section结束 -->

  <!-- 引入footer -->
  <?php
  require_once('footer.php');
?>
  <!-- 引入jquery -->
  <script src="./lib/jquery/jquery.min.js"></script>
  <!-- 引入bootstrap -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- 引入JqueryPagination分页 -->
  <script src="./lib/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
  <!-- 引入jqueryTemplate模块 -->
  <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
  <!-- 引入myJqueryPagination -->
  <script src="./dist/js/p2p.min.js"></script>
  <script id="borrowTmpl" type="text/html">
    <tr>
        <td>zs</td>
        <td>${borrowTitle}</td>
				<td>${currentRate}%</td>
				<td>${borrowAmount}</td>
        <td>${currentRate}</td>
				<td>
					<div class="">100.00%</div>
				</td>
				<td><a class="btn btn-danger btn-sm" href="borrow_info.html?id=7">查看</a></td>
            </tr>
  </script>
  <script src="./src/js/myJqueryPagination.js"></script>

</body>

</html>