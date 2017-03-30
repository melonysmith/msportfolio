<?php session_start(); ?>

<!DOCTYPE html>

	<head>
		<title>Melony Smith Portfolio:: Web Design &amp; Development</title>
		<link rel='stylesheet' type='text/css' href='css/style.css' />
	</head>

	<body>

		<?php
		if (isset($_POST['submit'])) {
		$error = '';

		if (!empty($_POST['name'])) {
		$name = $_POST['name'];
		} else {
		$error .= 'You did not type in your name. <br />';
		}

		if (!empty($_POST['email'])) {
		$email = $_POST['email'];
		  if (!preg_match("/^[a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)){
		  $error .= 'The e-mail address you entered is not valid. <br/>';
		  }
		} else {
		$error .= 'You did not type in your e-mail address. <br />';
		}

		if (!empty($_POST['message'])) {
		$message = $_POST['message'];
		} else {
		$error .= 'You did not type in a message. <br />';
		}

		if (empty($error)) {
		$from = 'From: ' . $name . ' <' . $email . '>';
		$to = 'smith.melonya@gmail.com';
		$subject = 'New contact form message';
		$content = $name . ' has sent you a message: ' . $message;
		$success = '<h3>Thank you! Your message has been sent and I will be in touch soon!</h3>';
		mail($to,$subject,$content,$from);
		}
		}
		?>

		<?php
			if (!empty($error)) {
			echo '<p class="error"><strong>Your message was NOT sent<br/> Please correct the following error(s) and try again:</strong><br/>' . $error .'</p>';
			} elseif (!empty($success)) {
			echo $success;
			}
		?>

    <a href='index.php'>Back to MelonySmith.net</a>

	</body>
</html>
