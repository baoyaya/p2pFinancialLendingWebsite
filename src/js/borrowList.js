// 自动加载数据到借款列表
$.get("./api/borrowList.php",function(result){
   $("#borrowTmpl").tmpl(result).appendTo("#borrowData");
},"json");