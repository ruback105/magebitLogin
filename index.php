<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <<meta name="description" content="Login page">
    <link rel="stylesheet" href="css/style.css">
    <title>Login example</title>
  </head>
  <body background="img/Background.jpg">
<div class="container">
  <div class="login-block">
    <div class="login-head">
      <p class= "login-text">Login</p>
      <img src="img/login-logo.jpg" alt="magebit-logo" class="magebit-login-logo">
      <br>
      <img src="img/line-under.jpg" alt="underline" class="magebit-login-underline">
    </div>
    <div class="login-form">
      <form action="/login.php">
        <div class="login-email">
          Email<font color="red">*</font> <input type="email" name="Email">
          <img src="img/ic-mail.jpg" alt="ic-mail">
        </div>
        <div class="login-password">
          Password<font color="red">*</font>  <input type="password" name="password">
          <img src="img/ic-lock.jpg" alt="ic-lock">
        </div>
          <input type="submit" value="Submit">
          <a href="#">Forgot?</a>
    </form>
    </div>
  </div>
  <div class="login-inactive">
    <h2>Don’t have an account?</h2>
    <img src="img/line-under.jpg" alt="underline">
    <button type="button" name="sign-up-button">SIGN UP</button>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</div>
<div class="footer">ALL RIGHTS RESERVED "MAGEBIT" 2016.</div>
  </body>
</html>
