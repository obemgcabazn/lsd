<?php
$username = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);

if ($phone) {

	$to = 'office@spaceweb.studio'; 
	$from='site@spaceweb.studio'; 

	mail($to, $username, $phone, 'From:'.$from);

	echo "письмо отправлено";

}
?>