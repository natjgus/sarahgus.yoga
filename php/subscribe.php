<?php
    // Put your MailChimp API and List ID hehe
    $api_key = '24b6cb85de2da24dea0394267a9c6ae2-us19';
    $list_id = '8eefea6f9c';

    // Let's start by including the MailChimp API wrapper
    include('MailChimp.php');
    // Then call/use the class
    use \DrewM\MailChimp\MailChimp;
    $MailChimp = new MailChimp($api_key);

    // Submit subscriber data to MailChimp
    // For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
    // For wrapper's doc, visit: https://github.com/drewm/mailchimp-api
    $result = $MailChimp->post("lists/$list_id/members", [
                            'email_address' => $_POST["email"],
                            'merge_fields'  => ['FNAME'=>$_POST["fname"], 'LNAME'=>$_POST["lname"]],
                            'status'        => 'subscribed',
                        ]);

    if ($MailChimp->success()) {
        // Success message
        echo "<h5>Thank you, you have been added to our mailing list.</h5>";
    } else {
        // Display error
        echo "<h5>Please try again.</h5>";
        // $MailChimp->getLastError();
        // Alternatively you can use a generic error message like:
        // echo "<h4>Please try again.</h4>";
    }
?>
