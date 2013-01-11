//"Static" values. 
var featuredHeight = 350,
    animationTime = 200;

$(document).ready(function(){
  //Temp stuff for testing.
  $($(".page_item").splice(3)).hide();

  //Ensure videos embedded in posts fit well.
  $(".post").fitVids();

  //Navigation menu expanding and such.
  $(".menu ul ul").hide();
  $(".menu li").on("mouseenter", function(){
    if($(this).children("a").next("ul").length != 0){
      $(this).children("a").next("ul").slideDown(animationTime);
    }
  });
  $(".menu li").on("mouseleave", function(){
    if($(this).children("a").next("ul").length != 0){
      $(this).children("a").next("ul").slideUp(animationTime);
    }
  });

  $(".menu li:first").addClass("page_item");
  $(".page_item, .menu li:first").hover(function(){
    if(!$(this).hasClass("current_page_item")){
      var that = $(this).children("a").first();
      var c = $(that).clone().addClass("slide-over");
      $(c).css({
        "background-color":"#222222",
        "color":"#EFEFEF",
        "position":"absolute",
        "left":"-500px"
      });
      $(that).after(c);
      var that = that;
      $(c).animate({left: '0px'});
    }
  }, function(){
    var hover = $(this).children(".slide-over").first();
    $(hover).animate({left: '-500px'}, function(){$(hover).remove()});
  });

});

$(window).load(function(){
  //Crop images as necessary.
  console.log("Window loaded");


  $("#page, .footer-wrapper").fadeIn(function(){
      $(".featured-image img").filter(function(i,e){return $(e).height() > 400}).each(function(i,e){
        console.log("cropping", $(this));
        var overflow = featuredHeight - $(e).height();
        var top = overflow/2; bottom = overflow/2;
        if(overflow%2 == 1){top++;}
        $(e).animate({
          'margin-top' : top + 'px',
          'margin-bottom' : bottom + 'px'
        });

    // $(e).css("margin-top", top + "px").css("margin-bottom", bottom + "px");
    });
  });

  //Set current width.
  var prevwidth = $(window).width();

  $(window).resize(function(){
    var now = $(window).width()

    if(Math.abs(now - prevwidth > 100)){
      prevwidth = now;
      $(".featured-image img").each(function(i,e){

        var top, bottom;
        if($(e).height() > 400){
          var overflow = featuredHeight - $(e).height();
          top = overflow/2; bottom = overflow/2;
          if(overflow%2 == 1){top++;}
        }
        else{
          top = 0; bottom = 0;
        }
        
        $(e).animate({
          'margin-top' : top + 'px',
          'margin-bottom' : bottom + 'px'
        }, 100);
      });
    }

  });

});