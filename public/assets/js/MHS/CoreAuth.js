//=================================================================This file Uses Core.js==============================================================================//

//================================================================= Start Register Scripts ==============================================================================//

//on form submit ajax function
$('#register-form').on('submit', function(e) {
    e.preventDefault();
    var data = $(this).serialize();
    console.log(data);

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

//================================================================= End Register Scripts ==============================================================================//



//================================================================= Start Login Scripts ==============================================================================//

//on form submit ajax function
$('#register-form').on('submit', function(e) {
    e.preventDefault();
    var data = $(this).serialize();
    console.log(data);

    let FormData = {
        'email': $('#email').val(),
        'password': $('#name').val(),
    };
    console.log(FormData);

    if (validData(FormData)) {

        postAjax(FormData, route('login.action'), true);
    }
});
//================================================================= End Login Scripts ==============================================================================//