<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="row">
      <div class="col-md-3">
        <!-- 手风琴开始 -->
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <!-- 投资项目 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  投资项目
                </a>
              </h4>
            </div>
            <!-- <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <ul class="list-group">
                <li class="list-group-item">Bootply1</li>
                <li class="list-group-item">One itmus ac facilin</li>
                <li class="list-group-item">Second eros</li>
              </ul>
            </div> -->
          </div>

          <!-- 借款项目 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                  aria-controls="collapseTwo">
                  借款项目
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
              <ul class="list-group">
                <li class="list-group-item">
                  <a href="">借款项目</a>
                </li>
                <li class="list-group-item">
                  <a href="">还款明细</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- 我的账户 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree">
                  我的账户
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <ul class="list-group">
                <li class="list-group-item">
                  <a href="">账户信息</a>
                </li>
                <li class="list-group-item">
                  <a href="">实名认证</a>
                </li>
                <li class="list-group-item">
                  <a href="">银行卡管理</a></li>
                <li class="list-group-item">
                  <a href="">登录记录</a>
                </li>
              </ul>
            </div>
          </div>

          <!-- 资产详情 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  资产详情
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <ul class="list-group">
                <li class="list-group-item">
                  <a href="">账户流水</a>
                </li>
                <li class="list-group-item">
                  <a href="">充值明细</a>
                </li>
                <li class="list-group-item">
                  <a href="">提现记录</a>
                </li>
                <li class="list-group-item">
                  <a href="">收款明细</a>
                </li>
              </ul>
              <!-- <div class="panel-footer">Footer</div> -->
            </div>
          </div>

          <!-- 个人资料 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                  aria-controls="collapseFive">
                  个人资料
                </a>
              </h4>
            </div>
            <!-- <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <ul class="list-group">
                <li class="list-group-item">Bootply2</li>
                <li class="list-group-item">One itmus ac facilin</li>
                <li class="list-group-item">Second eros</li>
              </ul>
            </div> -->
          </div>
        </div>
        <!-- 手风琴结束 -->
      </div>
      <div class="col-md-9">
        <!-- content开始 -->
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="part1">
                  <img src="./images/head_icon.jpg">
            </div>
            <div class="part2">

            </div>
            <div class="part3">

            </div>
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
</body>

</html>