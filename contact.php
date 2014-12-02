<?php
	$page = 'contact';
	require('inc/header.php');
?>

<?php
	//Checks the request method

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		//Trims the white space from the inputs

		$name= trim($_POST['name']);
		$email = trim($_POST['email']);
		$message = trim($_POST['message']);
		
		//Validation to see if fields are empty
		if($name == "" OR $email == "" OR $message == ""){
			echo "<p>You must specify a value for a name and email and message.</p>";
			exit();
		}
		//Spam check for malicious entry
		foreach ($_POST as $value) {
        	if(stripos($value, 'Content-Type') !== FALSE ) {
            echo "<p>There was a problem with the information you entered.</p>";
            exit;
        	}	
		}

		//Checks to see if hidden field is set, checks for malicious entry
		if($_POST['address'] != ""){
			echo "<p>There was a problem with your submission.</p>";
			exit;
		}

		//Requires the third party email
		require('inc/phpmailer/class.phpmailer.php');
		//Creates a mailer object
		$mail = new PHPMailer();

		//Validation for email
		if(!$mail->ValidateAddress($email)){
			echo '<p>You must specify a valid email.</p>';
			exit;
		}

		$email_body = "";
		$email_body = $email_body . "Name: " . $name . "<br>";
		$email_body = $email_body . "Email: " . $email . "<br>";
		$email_body = $email_body . "Message: " . $message;

		$mail->SetFrom($email,$name);
		$address = 'tmanley1985@gmail.com';

		$mail->AddAddress($address, 'Thomas Manley');

		$mail->Subject = "Thomas Manley Contact| " . $name;

		$mail->MsgHTML($email_body);

		if (!$mail->Send()) {
			echo "</p>There was a problem sending the email: </p>" . $mail->ErrorInfo;
		}

		header("Location: contact.php?status=thanks");
		exit();
	}

?>

<?php if(isset($_GET['status']) && $_GET['status'] == 'thanks'){?>
	<h3>Thanks for the email, I&rsquo;ll be in touch shortly!</h3>
<?php }else{ ?>
	<h2>Send me an email!</h2>
	<form method="post" action="contact.php">
		<table>
			<tr>
				<th>
					<label for="name">Name<label>
				</th>
				<td>
					<input type="text" name="name" id="name">
				</td>
			</tr>

			<tr>
				<th>
					<label for="email">Email<label>
				</th>
				<td>
					<input type="text" name="email" id="email">
				</td>
			</tr>

			<tr>
				<th>
					<label for="message">Message<label>
				</th>
				<td>
					<textarea name="message" id="message"></textarea>
				</td>
			</tr>
			<tr style="display:none;">
				<th>
					<label for="address">Address<label>
				</th>
				<td>
					<input type="text" name="address" id="address">
					<p>Humans and other beings please leave this field blank.</p>
				</td>
			</tr>
		</table>
		<input type="submit" value="Send">
	 </form>

 <?php } ?>	

 <script>
 	$('#wrapper').css({
		'background': 'white',
		'width': '60%',
		'padding': '2%',
		'min-height': '100%'
	});
 </script>
<?php
	require('inc/footer.php');
?>