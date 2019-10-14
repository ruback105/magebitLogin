$(document).ready(function(){
  $("#signup-btn").click(function(){
    $(".login-signup-block").animate({left:"-45%"}, 400);
    $(".login-block").css("visibility","hidden");
    $(".signup-block").css("visibility","visible");
    $(".login-inactive").css("visibility","hidden");
    $(".signup-inactive").css("visibility","visible");
  });

  $("#login-btn").click(function(){
    $(".login-signup-block").animate({left:"0%"}, 400);
    $(".signup-block").css("visibility","hidden");
    $(".login-block").css("visibility","visible");
    $(".login-inactive").css("visibility","visible");
    $(".signup-inactive").css("visibility","hidden");
  });
});
