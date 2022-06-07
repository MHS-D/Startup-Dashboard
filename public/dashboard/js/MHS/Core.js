// validation  alert
function Notification(type, message) {
    let animationIn = type != 'error' ? 'animate__bounceIn' : 'animate__shakeX';
    let animationOut = type != 'error' ? 'animate__bounceOut' : 'animate__fadeOutUp';
    Swal.fire({
        icon: type,
        title: type == 'error' ? 'Oops...' : (type == 'info' ? 'info' : 'Success'),
        text: message,
        showClass: {
            popup: animationClass(animationIn)
        },
        hideClass: {
            popup: animationClass(animationOut)
        }
    })
}

//coming soon
function comingSoon() {
    Notification('info', 'Coming Soon');
}

// Animate and redirect
function AnimateAndRedirect(url, isDashboard = false) {
    let form = document.getElementById("divForm");

    // -> removing the class
    form.classList.remove(js.animationInClass);
    // -> and re-adding the class
    form.classList.add(js.animationOutClass);

    if (isDashboard) {
        let nav = document.getElementById("nav");
        let toolbar = document.getElementById("toolbar");

        // -> removing the class
        nav.classList.remove(js.navbarIn);
        // -> and re-adding the class
        nav.classList.add(js.navbarOut);

        // -> removing the class
        toolbar.classList.remove(js.toolbarIn);
        // -> and re-adding the class
        toolbar.classList.add(js.toolbarOut);
    }

    setTimeout(function() {
        window.location = url;
    }, js.timer);
}

//set animation class
function animationClass($class) {
    $class = 'animate__animated ' + $class;
    return $class;
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
    AlertIfUrlHasNotification();
});

// Check Url Parameters
function AlertIfUrlHasNotification() {

    const params = new URLSearchParams(window.location.search);
    // Check if we have the param
    if (params.has("success")) {
        toastr.success(params.get("success"));
    } else if (params.has("danger")) {
        toastr.error(params.get("danger"));
    }
}

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
function postAjax(formData, actionUrl, redirectToUrl = false) {
    loader(true);
    $.ajax({
        url: actionUrl,
        method: 'post',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        cache: false,
        dataType: 'json',
        data: formData,
        success: function(data) {
            if (redirectToUrl)
                AnimateAndRedirect(data.redirect_url);

            if (data.success) {
                Notification('success', data.success);
            }
            return data;
        },
        error: function(xhr, textStatus, errorThrown) {
            ajax_error_display(xhr, textStatus, errorThrown);
        }
    }).always(function() {
        loader(false);
    });
}
