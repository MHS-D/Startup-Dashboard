// validation  alert
function Notification(type, message) {
    let animationIn = type == 'success' ? 'animate__bounceIn' : 'animate__shakeX';
    let animationOut = type == 'success' ? 'animate__bounceOut' : 'animate__fadeOutUp';
    Swal.fire({
        icon: type,
        title: type == 'error' ? 'Oops...' : 'Success',
        text: message,
        showClass: {
            popup: 'animate__animated ' + animationIn
        },
        hideClass: {
            popup: 'animate__animated ' + animationOut
        }
    })
}

// check empty validation
function validData(data) {
    var check = true;

    Object.entries(data).forEach(function([key, value]) {
        if (!value) {
            check = false;
            Notification('error', key + ' Field Is Required');
        }
    });
    return check;
}

//check password confirmation
function passwordConfirmed(password, password_confirmation) {
    if (password != password_confirmation) {
        Notification('error', 'Passwords Not Match');
        return false;
    }
    return true;
}

//loader
function loader(status) {
    if (status) {
        $('#loader').addClass(' active');
    } else {
        $('#loader').removeClass(' active');
    }
}

// loader in while page not ready yet
$(document).ready(function() {
    loader(false);
});

// Ajax error response function
function ajax_error_display(xhr, textStatus, errorThrown) {
    // START: Laravel validation error
    if (typeof(xhr.responseJSON) != "undefined") {
        if (xhr.responseJSON.errors && typeof xhr.responseJSON.errors == 'object') {
            Object.entries(xhr.responseJSON.errors).forEach(function([key, errors]) {
                Object.entries(errors).forEach(function([index, error]) {
                    toastr.error(error);
                });
            });
        } else if (xhr.responseJSON.message) {
            toastr.error(xhr.responseJSON.message);
        } else {
            toastr.error(errorThrown);
        }
    }
    // END: Laravel validation error
    else {
        toastr.error(errorThrown);
    }
}

// Post Ajax
function postAjax(formData, url) {
    loader(true);
    $.ajax({
        url: url,
        method: 'post',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        cache: false,
        dataType: 'json',
        data: formData,
        success: function(data) {
            Notification('success', data.success);
        },
        error: function(xhr, textStatus, errorThrown) {
            ajax_error_display(xhr, textStatus, errorThrown);
        }
    }).always(function() {
        loader(false);
    });
}