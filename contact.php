<?php

$field_email = $_POST['_replyto'];
$field_message = $_POST['message'];

$mail_to = 'contact@charalambosioannou.com';
$subject = 'Contact request from personal website'.$field_name;

$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed.');
		window.location = 'index.html';
	</script>
<?php
}
?>