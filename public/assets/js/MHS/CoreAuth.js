//=================================================================This file Uses Core.js==============================================================================//

//================================================================= Register Scripts ==============================================================================//

//on form submit ajax function
$('#register-form').on('submit', function(e) {
    e.preventDefault();

    let FormData = {
        'terms': $('#terms').is(':checked'),
        'g-recaptcha-response': $('#g-recaptcha-response').val(),
        'password_confirmation': $('#password_confirmation').val(),
        'password': $('#password').val(),
        'email': $('#email').val(),
        'name': $('#name').val(),
    };
    console.log(FormData);

    if (validData(FormData) && passwordConfirmed(FormData.password, FormData.password_confirmation)) {

        postAjax(FormData, route('register.action'), true);
    }
});


//check password confirmation
function passwordConfirmed(password, password_confirmation) {
    if (password != password_confirmation) {
        Notification('error', 'Passwords Not Match');
        return false;
    }
    return true;
}


//================================================================= Login Scripts ==============================================================================//

//on form submit ajax function
$('#login-form').on('submit', function(e) {
    e.preventDefault();

    let FormData = {
        'email': $('#email').val(),
        'password': $('#name').val(),
    };
    console.log(FormData);

    if (validData(FormData)) {

        postAjax(FormData, route('login.action'), true);
    }
});



//================================================================= Forget-password Scripts ==============================================================================//

//on form submit ajax function
$('#forget_password').on('submit', function(e) {
    e.preventDefault();

    let FormData = {
        'email': $('#email').val(),
    };
    console.log(FormData);

    if (validData(FormData)) {

        postAjax(FormData, route('forgetPassword.action'));
        $('#email').val('');
    }
});



//================================================================= password-reset Scripts ==============================================================================//

//on form submit ajax function
$('#password-reset').on('submit', function(e) {
    e.preventDefault();

    let FormData = {
        'password': $('#password').val(),
        'password_confirmation': $('#password_confirmation').val(),
        'token': $('#token').val(),
        'terms': $('#terms').is(':checked'),
    };
    console.log(FormData);

    if (validData(FormData)) {

        postAjax(FormData, route('resetPassword.action'), true);
        $('#password').val('');
        $('#password_confirmation').val('');
    }
});




//================================================================= End password-reset Scripts ==============================================================================//