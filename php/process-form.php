<?php
if (isset($_REQUEST['name'],$_REQUEST['email'])) {
      
    $name = $_REQUEST['name'];
    $mail = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    // Set your email address where you want to receive emails.
    $to = 'harisz.ryadi17@gmail.com';
	
	// Set your subject here.
	$subject = 'Contact From My Website';

    $headers = "From: ".$name." <".$mail."> \r\n";

    $send_email = mail($to,$subject,$message,$headers);

    echo ($send_email) ? 'success' : 'error';

}
?>
