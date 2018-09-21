<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<!-- bootstrap样式 -->
	<link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
	<!-- 引入编译和压缩后的css文件 -->
	<link rel="stylesheet" href="./dist/css/minCss/personal.min.css">
</head>

<body>
	<!-- 引入header -->
	<?php
	require_once('header.php');
	?>
	<!-- section开始 -->
	<div class="container">
		<div class="row" id="person">
			<?php
			require_once("leftTablist.php");
			?>
			<!-- 功能页面 -->

			<div class="col-sm-9 col-xs-12" id="mainContent">
				<!-- content开始 -->
				<button type="button" class="btn btn-primary btn-xs btnOn">隐藏</button>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="el-tip-info">
							<h3>信用借款</h3>
							<p>
								<span class="text-info">授信额度：</span>
								<span class="text-danger">2000 </span> &emsp;&emsp;&emsp;
								<span class="text-info">可借金额：</span>
								<span class="text-danger">2000</span>
							</p>
						</div>
						<div class="page-header lead">
							借款信息
							<label class="label label-primary">信用标</label>
						</div>
						<form class="form-horizontal el-borrow-form" novalidate="novalidate" method="post" id="formData">
						<div class="form-group">
								<label class="col-sm-3 col-xs-4 control-label">
									借款类型
								</label>
								<div class="col-sm-3  col-xs-6 input-group">
									<select class="form-control" name="borrowType" id="borrowId">
										<option value="1">信用贷</option>
										<option value="2">车易贷</option>
										<option value="3">房易贷</option>
									</select>
								
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 col-xs-4 control-label">
									借款金额
								</label>
								<div class="col-sm-3  col-xs-6 input-group">
									<input class="form-control" name="bidRequestAmount" />
									<span class="input-group-addon">元</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-4 control-label">
									借款利息
								</label>
								<div class="col-sm-3  col-xs-6  input-group">
									<input class="form-control" name="currentRate" />
									<span class="input-group-addon">%</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-4 control-label">
									借款期限
								</label>
								<div class="col-sm-3  col-xs-6 input-group">
									<select class="form-control" name="monthes2Return">
										<option value="1">1</option>
										<option value="3">3</option>
										<option value="6">6</option>
										<option value="9">9</option>
										<option value="12">12</option>
										<option value="24">24</option>
									</select>
									<span class="input-group-addon">月</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 col-xs-4 control-label">
									还款方式
								</label>
								<label class="radio-inline">
									<input type="radio" value="0" checked="checked" name="inlineRadioOptions" /> 按月分期
								</label>
								<label class="radio-inline">
									<input type="radio" value="1" name="inlineRadioOptions" /> 按月到期
								</label>
							</div>

							<div class="form-group">
								<label class="col-sm-3 col-xs-4 control-label">
									最小投标
								</label>
								<div class="col-sm-3  col-xs-6  input-group">
									<input class="form-control" name="minBidAmount" />
									<span class="input-group-addon">元</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 col-xs-4 control-label">
									投标奖金
								</label>
								<div class="col-sm-3  col-xs-6  input-group">
									<input class="form-control" name="totalRewardAmount" value="0" />
									<span class="input-group-addon">%</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 col-xs-4 control-label">
									最大投标
								</label>
								<div class="col-sm-3  col-xs-6  input-group">
									<input class="form-control" name="maxBidAmount" />
									<span class="input-group-addon">元</span>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 col-xs-4 control-label">
									招标天数
								</label>
								<div class="col-sm-3  col-xs-6 input-group">
									<select class="form-control" name="disableDays">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
									<span class="input-group-addon">天</span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-4 control-label">
									借款标题
								</label>
								<div class="col-sm-6  col-xs-6 input-group">
									<input name="title" class="form-control" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 col-xs-4 control-label">
									借款描述
								</label>
								<div class="col-sm-6  col-xs-6  input-group">
									<textarea name="description" rows="4" class="form-control" style="resize: none;"></textarea>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-primary col-lg-offset-3 col-xs-offset-2" type="button" data-loading-text="提交">
									提交申请
								</button>
							</div>

							<div class="el-borrow-form-tip">
								<h4>相关费用</h4>
								<p>
									<span class="text-info">利息</span>
									<span class="el-borrow-cost" id="cost01">--</span>
								</p>
								<p>
									<span class="text-info">奖金</span>
									<span class="el-borrow-cost" id="cost02">--</span>
								</p>
								<p>
									<span class="text-info">管理费</span>
									<span class="el-borrow-cost" id="cost03">--</span>
								</p>
							</div>
						</form>
					</div>
				</div>

				<!-- content结束 -->
			</div>
		</div>
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
		<script src="./dist/js/p2p.min.js"></script>
		<!-- 引入手机端滑动 -->
		<script src="./src/js/touchmove.js"></script>
		<!-- 引入借款申请添加 -->
		<script src="./src/js/borrow.js"></script>
		<!-- 验证登录状态 -->
		<script src="./src/js/userStateCheck.js"></script>
</body>

</html>