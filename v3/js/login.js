$(document).ready(function(){
  var windowHeight = $(window).innerHeight();
  // Margin-top for Mobile and web
  var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
  if (!isMobile) {
    $('.login-container').css('margin-top', windowHeight/6);
  } else {
    $('.login-container').css('margin-top', 40);
  }

  


});

wow = new WOW({
  animateClass: 'animated',
  offset:       20,
  mobile:       true,       // trigger animations on mobile devices (default is true)
  live:         true,       // act on asynchronously loaded content (default is true)
  callback:     function(box) {
    // console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
  }
}); 
wow.init();
