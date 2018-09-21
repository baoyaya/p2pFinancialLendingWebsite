  // 基于准备好的dom，初始化echarts实例
  var myChart=echarts.init(document.getElementById("main"));
  // 准备图表的配置项和数据
  var option=  {
  title : {
      text: '借款类型的金额统计',
      subtext: '2018-9',
      x:'center'
  },
  tooltip : {
      trigger: 'item',
      formatter: "{a} <br/>{b} : {c} ({d}%)"
  },
  legend: {
      orient : 'vertical',
      x : 'left',
      data:[]
  },
  toolbox: {
      show : true,
      feature : {
          mark : {show: true},
          dataView : {show: true, readOnly: false},
          magicType : {
              show: true, 
              type: ['pie', 'funnel'],
              option: {
                  funnel: {
                      x: '25%',
                      width: '50%',
                      funnelAlign: 'left',
                      max: 1548
                  }
              }
          },
          restore : {show: true},
          saveAsImage : {show: true}
      }
  },
  // 是否重新计算
  calculable : true,
  series : [
      {
          name:'访问来源',
          type:'pie',
          radius : '55%',
          center: ['50%', '60%'],
          data:[]
      }
  ]
};
  // 使用刚指定的配置项和数据显示图表
  myChart.setOption(option);
  // 发送ajax请求到后端拿取数据
  $.get("./api/borrowData.php",function(data){
    option.legend.data=data.title;
    option.series[0].data=data.data;
    myChart.hideLoading();//隐藏loading动画
    myChart.setOption(option);
  },"json");