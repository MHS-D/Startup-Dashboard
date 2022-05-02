/* Start Register Scripts */

//on form submit ajax function
$('#register-form').on('submit', function(e) {
    e.preventDefault();

    let FormData = {
        'name': $('#name').val(),
        'email': $('#email').val(),
        'password': $('#password').val(),
        'password_confirmation': $('#password_confirmation').val(),
        'terms': $('#terms').is(':checked'),
    };
    console.log(FormData);

    if (validData(FormData) && passwordConfirmed(FormData.password, FormData.password_confirmation)) {

        postAjax(FormData, route('register.action'));
    }
});

/* End Register Scripts */