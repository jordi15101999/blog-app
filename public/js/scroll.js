$(window).scroll(function () {
    var scroll = $(window).scrollTop();
  
    // document.getElementById("myBody").style.marginTop = (-100 - 0.5*scroll) + "px";
  
    if (scroll >= 20) {
      $("#myNav").addClass("bg-white shadow");
    } else {
      $("#myNav").removeClass("shadow");
    }
  });