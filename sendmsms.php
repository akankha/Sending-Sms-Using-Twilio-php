<?php

// Required if your environment does not handle autoloading
	require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
	use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
	$sid = ''; //your SID
	$token = '';// Your Token
	$client = new Client($sid, $token);
//Check if the field are set or not
	$number=$_POST['phone'] ?? 'set your custom error here';
	$body=$_POST['message'] ?? 'set your custom error here';


	try {
		// Use the client to do fun stuff like send text messages!
		$client->messages->create(
		// the number you'd like to send the message to
			$number,
			[
				// A Twilio phone number you purchased at twilio.com/console
				'from' => '+12058802132',
				// the body of the text message you'd like to send
				'body' => $body
			]
		);
	}catch (Twilio\Exceptions\RestException $e){
		echo $e->getMessage();
//		Anything you want with $e you can do here.
	}

	?>
