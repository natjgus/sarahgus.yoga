$(document).ready(function() {
    // jQuery Validation
    $("#signup").validate({
        // if valid, post data via AJAX
        submitHandler: function(form) {
            $.post("./php/subscribe.php", { fname: $("#fname").val(), lname: $("#lname").val(), email: $("#email").val() }, function(data) {
                $('#response').html(data);
            });
        },
        // all fields are required
        rules: {
            fname: {
                required: true
            },
            lname: {
                required: true
            },
            email: {
                required: true,
                email: true
            }
        }
    });
});
