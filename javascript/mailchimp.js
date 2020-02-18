$(document).ready(function () {
  var $form = $('#mc-embedded-subscribe-form')
  if ($form.length > 0) {
    $('form button[type="submit"]').bind('click', function (event) {
      if (event) event.preventDefault()
      register($form)
    })
  }
})

function register($form) {
  $('#mc-embedded-subscribe').val('Sending...');
  $.ajax({
    type: $form.attr('method'),
    url: $form.attr('action'),
    data: $form.serialize(),
    dataType: "jsonp",
    jsonp: "c", // trigger MailChimp to return a JSONP response
    contentType: "application/json; charset=utf-8",
    cache: false,
    error: function (err) { 
      $('#subscribe-result').css('color', '#721c24')
      $('#subscribe-result').html('<p>Something went wrong. Please try again later.</p>')
    },
    success: function (data) {
      $('#mc-embedded-subscribe').val('subscribe')
      debugger;
      if (data.result === 'success') {
        // Yeahhhh Success
        $('#mce-EMAIL').css('borderColor', '#ffffff')
        $('#subscribe-result').css('color', 'rgb(53, 114, 210)')
        $('#subscribe-result').html('<p>Thank you for subscribing. We have sent you a confirmation email.</p>')
        $('#mce-EMAIL').val('')
      } else {
        // Something went wrong, do something to notify the user.
        $('#mce-EMAIL').css('borderColor', '#ff8282')
        $('#subscribe-result').css('color', '#ff8282')
        $('#subscribe-result').html('<p>Something went wrong. Please try again later.</p>ga')
      }
    }
  })
};