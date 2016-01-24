$(function(){
$('#emailSub input').jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
        // additional error messages or events
    },
    submitSuccess: function($form, event) {
        event.preventDefault(); // prevent default submit behaviour
        var email = $("input#subsmail").val();

        $.ajax({
            url: "/mailchimp",
            type: "POST",
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
            data: {
                email: email
            },
            cache: false,
            success: function() {
                // Success message
                $('#successSub').html("<div class='alert alert-success'>");
                $('#successSub > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                $('#successSub > .alert-success')
                    .append("<strong>Your have been subscribed. </strong>");
                $('#successSub > .alert-success')
                    .append('</div>');

                //clear all fields
                $('#contactForm').trigger("reset");
            },
            error: function() {
                // Fail message
                $('#successSub').html("<div class='alert alert-danger'>");
                $('#successSub > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                    .append("</button>");
                $('#successSub > .alert-danger').append("<strong>Sorry, it seems that my mail server is not responding. Please try again later!");
                $('#successSub > .alert-danger').append('</div>');
                //clear all fields
                $('#emailSub').trigger("reset");
            },
        })
    },
    filter: function() {
        return $(this).is(":visible");
    },
});

$("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
});
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#successSub').html('');
});
