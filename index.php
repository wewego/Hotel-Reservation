<?php include 'contact-form-handler.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reservation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class = "contact-title">
		<h1>Hotel-Reservation</h1>
		<h2>We are always ready to serve you!</h2>
	</div>
	<div class="contact-form">
		<form id = "contact-form" method="post" action="pricesHotels.php">

				<select class="contact-form" required name = "country">
					<option value="" disabled selected>Country</option>
					<option>Egypt</option>
					<option>USA</option>
					<option>Alaska</option>
					<option>Canda</option>
		   		</select>

			<br>
			<input name="next" type="submit" class="form-control submit" value="Next" formaction="hotel.php">


		</form>

	</div>


</body>
</html>
