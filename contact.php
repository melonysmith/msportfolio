<?php session_start(); ?>

<!-- doctype -->
<!DOCTYPE html>
<!-- html language -->
<html lang='en-us'>

	<!-- start head -->
	<head>
		<!-- charset -->
		<meta charset='utf-8'>
		<!-- title -->
		<title>Melony Smith: Web Designer &amp; Developer</title>
		<!-- meta -->
		<meta name='description' content='Online portfolio for Web Designer and Developer Melony Smith. Affordable, customized front end web design and development services.'>
		<meta name='keywords' content='website design, website development, front end web, web designer, graphic designer, web development, logo creation, branding'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0' />
		<!-- font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css' />
		<!-- CSS -->
		<link rel='stylesheet' type='text/css' href='css/style.css' />
	</head>
	<!-- end head -->

  <!-- start body -->
	<body>

	<?php
		if (isset($_POST['submit'])) {
			$error = '';

		// name field
		if (!empty($_POST['name'])) {
			$name = $_POST['name'];
		} else {
			// name field validation: name field left blank
			$error .= 'You did not type in your name. <br />';
		}

	// email field
	if (!empty($_POST['email'])) {
		$email = $_POST['email'];
		// email validation: invalid email
	  if (!preg_match("/^[a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)){
		  $error .= 'The e-mail address you entered is not valid. <br/>';
	  }
		} else {
			// email validation: email field left blank
			$error .= 'You did not type in your e-mail address. <br />';
	  }

	// message field
	if (!empty($_POST['message'])) {
		$message = $_POST['message'];
		} else {
			// message field validation: message field left blank
			$error .= 'You did not type in a message. <br />';
	  }

	if (empty($error)) {
		// contact form input to be sent via email
		$from = 'From: ' . $name . ' <' . $email . '>';
		$to = 'smith.melonya@gmail.com';
		$subject = 'MelonySmith.net';
		$content = $name . ' has sent you a message: ' . $message;
		// message sent: success
		$success = '<h3>Thank you! Your message has been sent and I will be in touch soon!</h3>';
		// send message with inptu to email
		mail($to,$subject,$content,$from);
		}
	}
	?>

	<!-- if error sending message... -->
	<?php
		if (!empty($error)) {
			echo '<p class="error"><strong>Your message was NOT sent<br/> Please correct the following error(s) and try again:</strong><br/>' . $error .'</p>';
			} elseif (!empty($success)) {
			echo $success;
		}
	?>

	<!-- return to site -->
  <a href='index.php'>Back to MelonySmith.net</a>

	<!-- Rollbar -->
	<?php
		use \Rollbar\Rollbar;

		$config = array(
				// required
				'access_token' => '9f0d7a17ae5d4fa3b813d4abac81823e',
				// optional - environment name. any string will do.
				'environment' => 'production',
				// optional - path to directory your code is in. used for linking stack traces.
				'root' => ''
		);
	?>
	<!-- end Rollbar -->

	</body>
	<!-- end body -->

</html>
<!-- end html -->
