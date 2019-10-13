<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-2.0.3.js"></script>
    <script type="text/javascript">
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
    </script>
    <title>Login example</title>
  </head>
  <body background="img/Background.jpg">
<div class="container">
  <div class="login-signup-block">
    <div class="login-block">
      <div class="login-head">
        <p class= "login-text">Login</p>
        <img src="img/login-logo.jpg" alt="magebit-logo" class="magebit-login-logo">
        <br>
        <img src="img/line-under.jpg" alt="underline" class="magebit-login-underline">
      </div>
      <div class="login-form">
        <form id="login-block">
          <div class="login-email">
            Email<font color="red">*</font>
            <img id="ic-mail" src="img/ic-mail.jpg" alt="ic-mail">
            <input type="email" name="Email">
          </div>
          <div class="login-password">
            Password<font color="red">*</font>
            <img id="ic-lock" src="img/ic-lock.jpg" alt="ic-lock">
            <input type="password" name="password">
          </div>
          <div class="login-footer">
            <button id="submit-login-btn">LOGIN</button>
            <a href="google.com">Forgot?</a>
          </div>
      </form>
      </div>
    </div>
    <div class="signup-block">
      <div class="signup-head">
        <p class= "login-text">Sign Up</p>
        <img src="img/login-logo.jpg" alt="magebit-logo" class="magebit-login-logo">
        <br>
        <img src="img/line-under.jpg" alt="underline" class="magebit-login-underline">
      </div>
      <div class="signup-form">
        <form id="signup-block">
          <div class="signup-name">
            Name<font color="red">*</font>
            <img id="ic-user" src="img/ic_user.jpg" alt="ic-user">
            <input type="name" name="name">
          </div>
          <div class="signup-email">
            Email<font color="red">*</font>
            <img id="ic-mail" src="img/ic-mail.jpg" alt="ic-mail">
            <input type="email" name="Email">
          </div>
          <div class="signup-password">
            Password<font color="red">*</font>
            <img id="ic-lock" src="img/ic-lock.jpg" alt="ic-lock">
            <input type="password" name="password">
          </div>
          <div class="login-footer">
            <button id="submit-signup-btn">LOGIN</button>
          </div>
      </form>
      </div>
    </div>
  </div>
  <div class="login-inactive">
    <h2>Don’t have an account?</h2>
    <img src="img/line-under.jpg" alt="underline">
    <p id="signup-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <button id="signup-btn">SIGN UP</button>
  </div>
  <div class="signup-inactive">
    <h2>Have an account?</h2>
    <img src="img/line-under.jpg" alt="underline">
    <p id="login-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    <button id="login-btn">LOGIN</button>
  </div>
</div>
<div class="footer">ALL RIGHTS RESERVED "MAGEBIT" 2016.</div>
  </body>
</html>
