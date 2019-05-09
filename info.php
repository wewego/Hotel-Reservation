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
				$_SESSION['shape'] = $_POST['shape'];
				$_SESSION['type'] = $_POST['type'];
				$_SESSION['time'] = $_POST['time'];
				$_SESSION['hotel'] = $_POST['hotel'];
			}

		 ?>
		<div class = "contact-title">
			<h1>Check-in</h1>
			<h2>We are always ready to serve you!</h2>
		</div>
		<form id = "contact-form" method="post" action="creditCard.php">
	   		<input type="text" name="fn" class="form-control" placeholder="First Name" required>
				<br>
				<input type="text" name="ln" class="form-control" placeholder="Last Name" required>
				<br>
				<input type="email" name="email" class="form-control" placeholder="Your Email" required>
				<br>
				<input type="text" name="pn" class="form-control" placeholder="Phone Number" required>
				<br>
				<input type="text" name="ID" class="form-control" placeholder="ID" required>
				<br>



				<textarea name="comment" class="form-control" placeholder="Any comments" row = "4"></textarea><br>
				<input name="back" type="submit" class="price_reservation" value="Back" formaction = "roomOptions.php" formnovalidate>
				<input name="next" type="submit" class="price_reservation" value="Next">
		</form>


	</body>
	</html>
