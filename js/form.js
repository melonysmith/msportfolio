jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bmoo\b$/.test(value);
    }, "Type the answer.");

// validate contact form
$(function() {
    $('#contact').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true
            },
            answer: {
                required: true,
                answercheck: true
            }
        },
        messages: {
            name: {
                required: "Oops! You forgot your name.",
                minlength: "Your name must contain at least two characters."
            },
            email: {
                required: "Oops! You forgot your email."
            },
            message: {
                required: "Oops! You forgot to leave your message.",
            },
            answer: {
                required: "Try again!"
            }
        },
        // on submit...
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type: "POST",
                data: $(form).serialize(),
                url: "../mail.php",
                // on successful submission...
                success: function() {
                    $('#contact :input').attr('disabled', 'disabled');
                    $('#contact').fadeTo("slow", 0.15, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor', 'default');
                        $('#success').fadeIn();
                    });
                },
                // on submission error...
                error: function() {
                    $('#contact').fadeTo("slow", 0.15, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
});
