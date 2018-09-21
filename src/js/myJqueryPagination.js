$("#page").page({
    debug: true,
    showInfo: true,
    showJump: true,
    pageSize:5,
    showPageSizes: true,
    remote: {
        url: './api/inventList.php',
        success: function (data) {
            var htmlstr=$("#borrowTmpl").tmpl(data.list);
            $("#inventData").html(htmlstr);
            // console.log("页数：",data);
        }
    }
});

$("#page").on("pageClicked", function (event, pageIndex) {
    $("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
}).on('jumpClicked', function (event, pageIndex) {
    $("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
}).on('pageSizeChanged', function (event, pageSize) {
    $("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
});