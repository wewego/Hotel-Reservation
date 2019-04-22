<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	   session_start();
	   $db = new mysqli('localhost' , 'root' , '' , 'trivago') or die("unable to connect");
	   $db->select_db("trivago");
	   $fn = "";
	   $ln = "";
	   $email = "";
	   $pn = 0;
	   $comment = "";
	   $type = "";
	   $ID = 0;
	   
	   if (isset($_POST['submit'])) 
	   {
	   		$fn = $_POST['fn'];
	   		$ln = $_POST['ln'];
	   		$email = $_POST['email'];
	   		$pn = $_POST['pn'];
	   		$comment = $_POST['comment'];
	   		$ID = $_POST['ID'];
	   		$type = $_POST['typeRoom'];
	   		mysqli_query($db , "INSERT INTO `info` (`first name` , `last name` , `ID` , `type`, `email` , `phone number` , `comment`) VALUES ('$fn' , '$ln' , '$ID' , '$type' ,  '$email' ,'$pn' , '$comment')");
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