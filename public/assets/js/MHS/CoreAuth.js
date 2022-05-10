//=================================================================This file Uses Core.js==============================================================================//

//================================================================= Start Register Scripts ==============================================================================//

//on form submit ajax function
$('#register-form').on('submit', function(e) {
    e.preventDefault();
    var data = $(this).serialize();
    console.log(data);

    let FormData = {
        'name': $('#name').val(),
        'email': $('#email').val(),
        'password': $('#password').val(),
        'password_confirmation': $('#password_confirmation').val(),
        'terms': $('#terms').is(':checked'),
        'g-recaptcha-response': $('#g-recaptcha-response').val()
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
