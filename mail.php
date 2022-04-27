<?php

if (isset($_POST['submit'])) {
	$name = $_POST['email'];
	$email = $_POST['number'];
	$message = $_POST['message'];

	$subject = "Enquiry";
	$mailTo = "xerox@copyexpress.co.in";
	$headers = "From: ".$email;
	$txt = "You have received an email from ".$name.".\nEnquiry:".$service;

	mail($mailTo, $subject, $txt, $headers);

	header("Location: index.php?mailsent");
}

?>