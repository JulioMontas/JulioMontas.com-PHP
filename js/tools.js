/***

W W W . J U L I O M O N T A S . C O M
Interative Designer 
http://juliomontas.com

***/

/*
################################
###### Full Screen Loader ######
################################
*/  

$(window).load(function(){
  $('#cover').fadeOut(1000);
});


/*
##################################
###### Navation Burger Icon ######
##################################
*/      

$( ".burger" ).click(function() {
  $( "#fullMenu" ).fadeToggle( "250" );
});  

$('.burger').click(function(){
  $(this).toggleClass('open');
});

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


/*
##############################################################################
###### Random link button- By JavaScript Kit (http://javascriptkit.com) ######
##############################################################################
*/  

var randomlinks=new Array()

   randomlinks[0]="helloCode.php"
   randomlinks[1]="catchSuperman.php" 
   randomlinks[2]="pixelxpixel.php"
    
   randomlinks[3]="nike.php"
   randomlinks[4]="sebastianfaena.php"      
   randomlinks[5]="kateSpade.php"   
   randomlinks[6]="homeMade.php"
   randomlinks[7]="lancome.php"
    
   randomlinks[8]="recyclingCode.php"   
   randomlinks[9]="VirtualRelaxation.php"   
   randomlinks[10]="slitScan.php"   
                                
  function randomlink(){
   window.location=randomlinks[Math.floor(Math.random()*randomlinks.length)]
}
