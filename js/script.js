// Display drop down menu
const menuIcon = document.querySelector('.menu-icon');
const menu = document.querySelector('.menu');

menuIcon.addEventListener('click', () => {
    menu.classList.toggle('active');
});

//
$(document)
.on("submit", "form.register-form", function(event) {
    event.preventDefault();

    var _form = $(this);
    // registration page error
    var _error = $(".reg-error", _form);

    var data = {
        email: $("input[type='email']", _form).val(),
        password: $("input[type='password']", _form).val()
    }

    if(data.email.length < 6) {
        _error
            .text("Please enter a valid email address")
            .show();
        return false;
    } else if (data.password.length <8) {
        _error
            .text("Please enter a passphrase that is at least 11 characters long.")
            .show();
        return false;
    }

    //Assuming that everything so far went correctly, it's time for ajax
    _error.hide();

    console.log(data);

    return false;
})