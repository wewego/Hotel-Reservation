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
		<form id = "contact-form" method="post" action="roomOptions.php">
	   	<select class="contact-form" required name = "hotel">
					<option value="" disabled selected>Hotel</option>
					<option>Sharm El Sheikh ex Royal Grand Azure</option>
					<option>Sunrise Arabian Beach Resort</option>
					<option>Aracan Pyramids Hotel</option>
		   		</select>
		   		<br>
		   		<input name="back" type="submit" class="price_reservation" value="Back" formaction = "index.php" formnovalidate>
		   		<input name="next" type="submit" class="price_reservation" value="Next">

		   		</form>
		   		</div>


</body>
</html>
