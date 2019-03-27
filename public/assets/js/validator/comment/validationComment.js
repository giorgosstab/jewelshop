$(document).ready(function () {
    $('#comment-form').validate({ // initialize the plugin
        ignore: false,
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            email: {
                required: true,
                email: true
            },
            comment: {
                required: true,
                minlength: 5,
            },
        },
        onfocusout: function(e) {
            this.element(e);
        },
        onkeyup: false,
        messages: {
            name: {
                required: "Full Name Required!",
                minlength: "Minimum Length at least 3 letter!",
                maxlength: "Maximum Length 50 letter!"
            },
            email: {
                required: "E-mail Required!",
                email: "Format: name@domain.com!"
            },
            country: "Country Required!",
            comment: {
                required: "Message Required!",
                minlength: "Minimum Length at least 5 letter!"
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
