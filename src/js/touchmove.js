$(function(){
    $(".btnOn").on("click",function(){
        $("#person").toggleClass("active");
        if($("#person").hasClass("active")){
          $(this).text("显示");      
        }else{
  
          $(this).text("隐藏");
        }
  
      });
      var x1,y1;
      $(window).on("touchstart",function(e){
        x1=e.originalEvent.changedTouches[0].clientX;
      });
      $(window).on("touchend",function(e){
        var x2=e.originalEvent.changedTouches[0].clientX;
        var dx=x2-x1;
        if(Math.abs(dx)>100){
        $(".btnOn").trigger("click");
        }
      });
})