<!DOCTYPE html>
<?php
require_once 'core/init.php';

if (Input::exists()) {
    if (isset($_POST['submit-signup-btn'])) {
        echo 'test';
        $validate = new Validation();
        $validation = $validate->check($_POST, Validation::$signupValidation);
        if ($validation->passed()) {
            Validation::signupValidationPassed();
        }

    } else if (isset($_POST['submit-login-btn'])) {
        echo 'test';
        $validate = new Validation();
        $validation = $validate->check($_POST, Validation::$loginValidation);
        if ($validation->passed()) {
            Validation::loginValidationPassed();
        }
    }
}
?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-2.0.3.js"></script>
    <script type="text/javascript" src="./js/main.js">
    </script>
    <title>Login example</title>
</head>
<body background="img/Background.jpg">
<div class="container">
    <div class="login-signup-block">
        <div class="login-block">
            <div class="login-head">
                <p class="login-text">Login</p>
                <img src="img/login-logo.jpg" alt="magebit-logo" class="magebit-login-logo">
                <br>
                <img src="img/line-under.jpg" alt="underline" class="magebit-login-underline">
            </div>
            <div class="login-form">
                <form id="login-block" method="post">
                    <div class="login-email">
                        Email<font color="red">*</font>
                        <img id="ic-mail" src="img/ic-mail.jpg" alt="ic-mail">
                        <input type="email" name="email" id="login-email" autocomplete="off"
                               value="<?php echo escape(Input::get('email')); ?>">
                    </div>
                    <div class="login-password">
                        Password<font color="red">*</font>
                        <img id="ic-lock" src="img/ic-lock.jpg" alt="ic-lock">
                        <input type="password" name="password" id="login-password" autocomplete="off">
                    </div>
                    <div class="login-footer">
                        <input type="submit" name="submit-login-btn" id="submit-login-btn" value="LOGIN">
                        <a href="https://www.magebit.com/">Forgot?</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="signup-block">
            <div class="signup-head">
                <p class="login-text">Sign Up</p>
                <img src="img/login-logo.jpg" alt="magebit-logo" class="magebit-login-logo">
                <br>
                <img src="img/line-under.jpg" alt="underline" class="magebit-login-underline">
            </div>
            <div class="signup-form">
                <form id="signup-block" method="post">
                    <div class="signup-name">
                        Name<font color="red">*</font>
                        <img id="ic-user" src="img/ic_user.jpg" alt="ic-user">
                        <input type="name" name="signup-name" id="signup-name"
                               value="<?php echo escape(Input::get('signup-name')); ?>" autocomplete="off">
                    </div>
                    <div class="signup-email">
                        Email<font color="red">*</font>
                        <img id="ic-mail" src="img/ic-mail.jpg" alt="ic-mail">
                        <input type="email" name="signup-email" id="signup-email"
                               value="<?php echo escape(Input::get('signup-email')); ?>" autocomplete="off">
                    </div>
                    <div class="signup-password">
                        Password<font color="red">*</font>
                        <img id="ic-lock" src="img/ic-lock.jpg" alt="ic-lock">
                        <input type="password" name="signup-password" id="signup-password">
                    </div>
                    <div class="login-footer">
                        <input type="submit" name="submit-signup-btn" id="submit-signup-btn" value="SIGN UP">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="login-inactive">
        <h2>Don’t have an account?</h2>
        <img src="img/line-under.jpg" alt="underline">
        <p id="signup-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua.</p>
        <button id="signup-btn">SIGN UP</button>
    </div>
    <div class="signup-inactive">
        <h2>Have an account?</h2>
        <img src="img/line-under.jpg" alt="underline">
        <p id="login-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua.</p>
        <button id="login-btn">LOGIN</button>
    </div>
</div>
<div class="footer">ALL RIGHTS RESERVED "MAGEBIT" 2016.</div>
</body>
</html>
