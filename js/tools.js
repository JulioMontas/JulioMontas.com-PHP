/***
W W W . J U L I O M O N T A S . C O M
Interative Designer
http://juliomontas.com
***/

/*
#######################
###### Scroll Up ######
#######################
*/
$(document).ready(function(){
  $(".boxScrollUp").hide();
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 2000) {
        $('.boxScrollUp').fadeIn();
      } else {
        $('.boxScrollUp').fadeOut();
      }
    });
    $('.boxScrollUp').click(function () {
      $('body,html').animate({scrollTop: 0}, 2000);
      return false;
    });
  });
});
