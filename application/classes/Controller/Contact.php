<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Base {

	public function before() {
		parent::before();

		/* Define you SweetCaptcha credentials.	 */
		define('SWEETCAPTCHA_APP_ID', 40186); // your application id (change me)
		define('SWEETCAPTCHA_KEY', 'a4988a8f05676b877562768271879a00'); // your application key (change me)
		define('SWEETCAPTCHA_SECRET', '0d7ed35fab5f1c4aa7d8dbac2138f9a2'); // your application secret (change me)
		define('SWEETCAPTCHA_PUBLIC_URL', 'sweetcaptcha.php'); // public http url to this file
	}

	public function action_index() {
		$view_contact = new View_Contact;
		$this->view->content = Kostache::factory()->render($view_contact);
		$this->response->body(Kostache::factory()->render($this->view));
	}

	public function action_submit() {
		$sweetcaptcha = new Sweetcaptcha(
				SWEETCAPTCHA_APP_ID, SWEETCAPTCHA_KEY, SWEETCAPTCHA_SECRET, SWEETCAPTCHA_PUBLIC_URL
		);
		if (isset($_POST['sckey']) and isset($_POST['scvalue']) and $sweetcaptcha->check(array('sckey' => $_POST['sckey'], 'scvalue' => $_POST['scvalue'])) == "true") {
			// success! your form was validated
			// send mail.
			// return success.
			// do what you like next ...
			//include ("mailer.php");
			$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
			$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
			$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
			$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
			switch (SITE_ENV) {
				case 'local':
					$mail = new Phpmailer;
					$mail->isSMTP();		   // Set mailer to use SMTP
					$mail->Host = 'mail.optonline.net';  // Specify main and backup server
					$mail->SMTPAuth = FALSE;		  // Enable SMTP authentication
					$mail->Username = 'miket3@optonline.net';	   // SMTP username
					$mail->Password = '';		 // SMTP password
					//$mail->SMTPSecure = 'tls';							// Enable encryption, 'ssl' also accepted
					//$mail->SMTPDebug = 2;
					$mail->Mailer = "smtp";
					$mail->Port = 25;
					break;
				case 'production':
					$mail = new Phpmailer;
					$mail->isSMTP();		   // Set mailer to use SMTP
					$mail->Host = 'mail.buddyboyprovisions.com';  // Specify main and backup server
					$mail->SMTPAuth = TRUE;		  // Enable SMTP authentication
					$mail->Username = 'mailer@buddyboyprovisions.com';	   // SMTP username
					$mail->Password = 'mailer123';		 // SMTP password
					$mail->SMTPSecure = 'tls';	   // Enable encryption, 'ssl' also accepted
					//$mail->SMTPDebug = 2;
					$mail->Mailer = "smtp";
					$mail->Port = 26;
			}


			$mail->From = $email;
			$mail->FromName = $name;
			$mail->addAddress('miket3@optonline.net', 'Mike');  // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
			$mail->addReplyTo($email, $name);
//$mail->addCC('cc@example.com');
			//$mail->addBCC('miket3@optonline.net');

			$mail->WordWrap = 50;		 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = $subject;
			$mail->Body = $message;
			$mail->AltBody = $message;

			if (!$mail->send()) {
				echo 'Message could not be sent.';
				echo 'Mailer Error: ' . $mail->ErrorInfo;
				exit;
			}
			echo "Message sent! We Will contact you shortly. Thank you.";
		} else {
			// alas! the validation has failed, the user might be a spam bot or just got the result wrong
			// handle this as you like
			echo "Boohoo! Human Verification failed!";
		}

		if (isset($_POST['ajax']) and $method = $_POST['ajax']) {
			echo $sweetcaptcha->$method(isset($_POST['params']) ? $_POST['params'] : array());
		}
	}

}

// End Welcome
