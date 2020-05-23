<?php
include('connectToDB.inc.php');
require 'PHPMailer-master/PHPMailerAutoload.php';

	$return = array();
	$return['error']="";
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LcN5CEUAAAAAF_V7AkMO0Y3BotqDY0yOioFwxOe',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        $return['message']="<p class='text-red'>Please go back and make sure you check the security CAPTCHA box.</p>";		
		$return['error']="true";
  		echo json_encode($return);
    } else {
        // If CAPTCHA is successfully completed...
		$firstname=mysql_real_escape_string($_POST['firstname']);
		$lastname=mysql_real_escape_string($_POST['lastname']);
		$people=mysql_real_escape_string($_POST['people']);
		$email=mysql_real_escape_string($_POST['email']);
		$date=mysql_real_escape_string($_POST['date']);
		$message=mysql_real_escape_string($_POST['message']);

		//Store information "events" database
		$sql= "INSERT INTO book_events (first_name, last_name, peoplenum, date, email, message) VALUES ('$firstname','$lastname','$people','$date','$email','$message')";
		$result = mysql_query($sql, $db);

		$new_date= date_create($date);
		$to      = 'marc@thefunnelcloud.com';
		$to2      = 'sang@thefunnelcloud.com';


		$subject = "Event Booking For ".date_format($new_date, "F d Y")." From ".$firstname." ".$lastname;
		 $headers = "From: ".$email."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$message.= "\r\nNumber of People: ".$people;


		mail($to, $subject, $message, $headers);
		mail($to2, $subject, $message, $headers);

		$return['message']="<p class='text-light-green'>Your Message Has Been Sent</p>";
		$return['error']="false";

		// $mail = new PHPMailer;
		// $mail->setFrom('pinekosang@gmail.com', 'Sang Jun Bak');
		// $mail->addAddress('pinekosang@gmail.com', 'Sang two');
		// $mail->Subject  = 'Event Booking For ' . date_format($new_date, 'F d Y').'';
		// $mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
		// if(!$mail->send()) {
		//    $return['message']='Mailer error: ' . $mail->ErrorInfo;
		// $return['error']="false";

		// } else {
        
			
		// }

    echo json_encode($return);
    }

?>