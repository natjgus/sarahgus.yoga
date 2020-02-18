
$(document).ready(function(){

	/**
	 * jQuery Validate Function
	 *
	 * This function provides front-end validation for your form.
	 * If all tests set up here pass, the form data is AJAX submitted
	 * to the mailer.php file.
	 *
	 * Update this file as needed for your form.
	 * All ids and name values must match up to your form here.
	 *
	 * @author Rochelle Lewis <rlewis37@cnm.edu>
	 * @author Nathaniel Gustafson <natjgus@gmail.com>
	 **/

	/* begin validate function here */
	$("#contact-form").validate({

		// setup handling of form errors
		debug: true,
		errorClass: "alert alert-danger",
		errorLabelContainer: "#output-area",
		errorElement: "div",

		// rules here define what is good or bad input
		// each rule starts with the form input element's NAME attribute
		rules: {
			contactName: {
				required: true
			},
			contactEmail: {
				email: true,
				required: true
			},
			contactSubject: {
				required: true,
				maxlength: 75
			},
			contactMessage: {
				required: true,
				maxlength: 2000
			}
		},

		// error messages to display to the end user when rules above don't pass
		messages: {
			contactName: {
				required: "Please enter your name."
			},
			contactEmail: {
				email: "Please enter a valid email address.",
				required: "Please enter a valid email address."
			},
			contactSubject: {
				required: "Please enter a subject.",
				maxlength: "75 characters max."
			},
			contactMessage: {
				required: "Please enter a message.",
				maxlength: "2000 characters max."
			}
		},

		// AJAX submit the form data to back end if rules pass
		submitHandler: function(form) {
			$("#contact-form").ajaxSubmit({
				type: "POST",
				url: $("#contact-form").attr("action"),

				success: function(ajaxOutput) {
					// clear the output area's formatting
					$("#output-area").css("display", "");

					// display success
					$("#formAlert").addClass('show');
					setTimeout(function() {
					$("#formAlert").removeClass('show')}, 2000);

					// reset the form if it was successful
					$("#contact-form")[0].reset();
				}
			})
		}
	});/* end validate function here */

});/*end document.ready()*/