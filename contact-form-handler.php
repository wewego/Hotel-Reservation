<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	   session_start();
		 require_once('classes.php');
		 $db = new mysqli('localhost' , 'root' , '' , 'trivago') or die("unable to connect");
	   $db->select_db("trivago");

		 if (isset($_POST['submit']))
		 {
				$_SESSION['credit'] = $_POST['credit'];
				$_SESSION['password'] = $_POST['password'];

	   		$country = new Country($_SESSION['country']);
				$hotel = new Hotel($_SESSION['hotel']);
				$options = new RoomOptions($_SESSION['shape'] , $_SESSION['type'] , $_SESSION['time']);
				$form = new Form($_SESSION['fn'] , $_SESSION['ln'] , $_SESSION['email'] , $_SESSION['pn'] , $_SESSION['ID']);
				$credit = new Credit($_SESSION['credit'] , $_SESSION['password']);
	   		mysqli_query($db , "INSERT INTO info (first name , last name , email , ID , phone number , country , hotel  , shape ,  type , time , credit  , password)
				VALUES ('{$_SESSION['fn']}' , '$form->ln' , '$form->email' , '$form->ID' ,  '$form->pn' ,'$country->country' , '$hotel->hotel' , '$options->shape' , '$options->type' , '$options->time' , '$options->credit' ,
					 '$credit->credit' , '$credit->password')");
		    header('location: index.php');

		    require 'PHPMailerAutoload.php';
		    require 'credential.php';

			$mail = new PHPMailer;

			$mail->SMTPDebug = 4;

			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = EMAIL;
			$mail->Password = PASS;
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;

			$mail->setFrom(EMAIL , 'Trivago');
			$mail->addAddress($_POST['email']);

			$mail->isHTML(true);

			$mail->Subject = 'Reservation';
			$mail->Body    = "<p>You have successfully completed your reservation  <br> Have fun!!";
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}
		}




	 ?>

</body>
</html>
