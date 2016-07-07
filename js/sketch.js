// Index page
$(document).ready(function (){
    $("#welcome").click(function (){
        $('html, body').animate({
            scrollTop: $(".portfolio").offset().top
        }, 700);
    });
});
// Index page
$(document).ready(function (){
    $("#goingUp").click(function (){
        $('html, body').animate({
            scrollTop: $(".intro").offset().top
        }, 2500);
    });
});



// Index page
$(document).ready(function (){
  $('.three-dimensional-cube').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeIn',
      offset: 85,
      repeat: true
     });
});

$(document).ready(function (){
  $('.contact').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeIn',
      offset: 85,
      repeat: true
     });
});
$(document).ready(function (){
  $('.services').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeIn',
      offset: 85,
      repeat: true
     });
});




// Index page
$(document).ready(function (){
  $('.animationProject').addClass("hidden").viewportChecker({
      classToAdd: 'visible animated fadeIn',
      offset: 100,
      repeat: true
     });
});
