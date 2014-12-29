function formValidation() {
    "use strict";

$('form.block-validate').validate({
    rules: {
        required2: "required",
        email2: {
            required: true,
            email: true
        },
        date2: {
            required: true,
            date: true
        },
        url2: {
            required: true,
            url: true
        },
        password2: {
            required: true,
            minlength: 5
        },
        confirm_password2: {
            required: true,
            minlength: 5,
            equalTo: "#password2"
        },
        agree2: "required",
        digits: {
            required: true,
            digits: true
        },
        range: {
            required: true,
            range: [5, 16]
        }
    },
    errorClass: 'help-block',
    errorElement: 'span',
    highlight: function (element, errorClass, validClass) {
        $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
    }
});

$("#login-form").submit(function (e) {
    e.preventDefault();
    var valid = $("#login-form").valid();
    console.log("Is form valid? " + valid);
    if (valid) {
        login();
    }
    return false;
});

/*----------- END validate CODE -------------------------*/
function login() {
    var email = $('#email').val();
    var password = $('#password').val();
    $.ajax(
    {
        type: "POST",
        url: "../onlineShop/scripts/login.php",
        dataType: "html",
        data: "email=" + email + "&password=" + password,
        success: function (result) {
            if (result == 1) {
                top.location.href = "index.php";
            } else if (result == 0){
                insertAfter("#password");
            }
        },
        error: function () {
            alert("Autentification error!");
        }
    });
    }   
    function insertAfter(element){
        $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
         $("<span class='help-block' for='password'> Wrong username or password </span>").insertAfter($(element));
    }   
}