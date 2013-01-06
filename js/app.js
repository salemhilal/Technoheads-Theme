$(document).ready(function(){

  //Ensure videos embedded in posts fit well.
  $(".post").fitVids();

  //Crop images as necessary.
  $(".featured-image img").filter(function(i,e){return $(e).height() > 400}).each(function(i,e){
    var overflow = 400 - $(e).height();
    var top = overflow/2; bottom = overflow/2;
    if(overflow%2 == 1){top++;}

    $(e).css("margin-top", top + "px").css("margin-bottom", bottom + "px");
  });

  //Navigation menu expanding and such.
  $(".menu ul ul").hide();
  $(".menu li").on("mouseenter", function(){
    if($(this).children("a").next("ul").length != 0){
      $(this).children("a").next("ul").slideDown();
    }
  });
  $(".menu li").on("mouseleave", function(){
    if($(this).children("a").next("ul").length != 0){
      $(this).children("a").next("ul").slideUp();
    }
  });

});