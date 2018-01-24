<?php 
header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
if (isset($_POST['email'])) {

	$email = $_POST['email'];
	$headers = 'From: <sheikhhussnain23@gmail.com>' . "\r\n";
	if(mail($email, "hussnainsheikh.github.io", "Thanks for Subcribing. Stay in touch", $headers)){
		$headers = 'From: New Subscriber<'.$email.'>';
		if(mail('sheikhhussnain23@gmail.com', 'New Subscriber', 'There is a new subscriber on your website: '. $email)){
			echo json_encode(array('error'=> false, 'data' => 'Thanks for subscription!', 'email' => $email));
		}
	}
}

?>