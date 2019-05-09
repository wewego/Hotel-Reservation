	<!DOCTYPE html>
	<html>
	<head>
		<title>Check-in</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php

			session_start();
			if (isset($_POST['next']))
			{
				$_SESSION['fn'] = $_POST['fn'];
				$_SESSION['ln'] = $_POST['ln'];
				$_SESSION['email'] = $_POST['email'];
				$_SESSION['pn'] = $_POST['pn'];
				$_SESSION['ID'] = $_POST['ID'];
			}

		 ?>
		<div class = "contact-title">
			<h1>Check-in</h1>
			<h2>We are always ready to serve you!</h2>
		</div>
		<form id = "contact-form" method="post" action="contact-form-handler.php">
	   	  <input type="text" name="credit" class="form-control" placeholder="Credit Card" required>
	      <br>
	      <input type="password" name="password" class="form-control" placeholder="password" required>
			   <br>
				<input name="submit" type="submit" class="form-control submit" value="submit" formaction="contact-form-handler.php">
		</form>


	</body>
	</html>

 
