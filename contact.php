<?php
 $to = "snehalata1110@gmail.com";
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
	$phone = $_REQUEST['phone'];
	$messege = $_REQUEST['messege'];
    $headers = "From: $email";
    $subject = "Contact Form";

    $fields = array();
    $fields{"name"}    = "name";
    $fields{"email"}   = "email";
    $fields{"phone"}   = "phone";
	$fields{"messege"} = "messege";
	

    $body = "Here is the contact information details:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\r\n",$b,$_REQUEST[$a]); }

    $submit = mail($to, $subject, $body, $headers);
	header("Location: contact_us.html");

?>
 