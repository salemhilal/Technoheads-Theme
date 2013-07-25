jQuery(document).ready(function(){
  jQuery(window).scroll(function(){
    if(window.scrollY > 200) {
      jQuery(".sidebar-container").addClass("faded");
    } else {
      jQuery(".sidebar-container").removeClass("faded");
    }
  });
});

jQuery(window).load(function(){
  // fade in the sidebar after everything's loaded.
  jQuery(".sidebar-container").fadeIn(200);

});