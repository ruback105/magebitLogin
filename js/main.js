var loginEmail = "input#login-email";
var signupEmail = "input#signup-email";

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validate($email) {
    var email = jQuery($email).val();

    if (!validateEmail(email)) {
        alert(email + " email isn't valid")
        return true;
    }
    return false;
}

jQuery(document).ready(function () {
    jQuery("#signup-btn").click(function () {
        jQuery(".login-signup-block").animate({left: "-45%"}, 600);
        jQuery(".login-block").css("visibility", "hidden");
        jQuery(".signup-block").css("visibility", "visible");
        jQuery(".login-inactive").css("visibility", "hidden");
        jQuery(".signup-inactive").css("visibility", "visible");
    });

    jQuery("#login-btn").click(function () {
        jQuery(".login-signup-block").animate({left: "0%"}, 600);
        jQuery(".signup-block").css("visibility", "hidden");
        jQuery(".login-block").css("visibility", "visible");
        jQuery(".login-inactive").css("visibility", "visible");
        jQuery(".signup-inactive").css("visibility", "hidden");
    });

    jQuery("#submit-signup-btn").click(function () {
        var name = jQuery("input#signup-name").val();
        var password = jQuery("input#signup-password").val();
        if (name === "" || name.length < 4) {
            alert("Enter name with at least 4 letters");
            return false;
        } else if (validate(signupEmail)) {
            return false;
        } else if (password === "" || password.length < 6) {
            alert("Enter password with at least 6 letters");
            return false;
        } else {
            jQuery("#signup-block").submit();
        }
    });

    jQuery("#submit-login-btn").click(function () {
        var password = jQuery("input#login-password").val();
        if (validate(loginEmail)) {
            return false;
        } else if (password === "") {
            alert("Enter password");
            return false;
        } else {
            function timeout() {
                setTimeout(timeout, 1000);
                if (!window.location.href.indexOf("login") > -1) {
                    alert("enter correct credentials");
                }
            }
        }
    });


});



