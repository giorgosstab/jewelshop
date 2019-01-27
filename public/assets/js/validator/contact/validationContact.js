$(document).ready(function () {
    $.validator.addMethod("customphone", function(customphone, element) {
        customphone = customphone.replace(/\s+/g, "");
        return customphone.length > 9 && customphone.length <= 10;
    });
    $('#contact-form').validate({ // initialize the plugin
        ignore: false,
        rules: {
            fname: {
                required: true,
                minlength: 3,
                maxlength: 15
            },
            lname: {
                required: true,
                minlength: 5,
                maxlength: 20
            },
            phone: {
                required: true,
                customphone: true
            },
            email: {
                required: true,
                email: true
            },
            country: {
                required: true
            },
            message: {
                required: true,
                minlength: 5,
            },
        },
        onfocusout: function(e) {
            this.element(e);
        },
        onkeyup: false,
        messages: {
            fname: {
                required: "First Name Required!",
                minlength: "Minimum Length at least 3 letter!",
                maxlength: "Maximum Length 15 letter!"
            },
            lname: {
                required: "Last Name Required!",
                minlength: "Minimum Length 5 letter!",
                maxlength: "Maximum Length 20 letter!"
            },
            phone: {
                required: "Phone Required!",
                customphone: "Format: 2106787921!"
            },
            email: {
                required: "E-mail Required!",
                email: "Format: name@domain.com!"
            },
            country: "Country Required!",
            message: {
                required: "Message Required!",
                minlength: "Minimum Length at least 5 letter!"
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
