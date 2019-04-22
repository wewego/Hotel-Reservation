<!DOCTYPE html>
<html>
<head>
	<title>Trivago</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class = "contact-title">
		<h1>Trivago</h1>
		<h2>We are always ready to serve you!</h2>
	</div>
	<?php
	   if ($_POST['country'] == 'Egypt')
	   {
	   	Echo '
	   	<div class="contact-form">
		<form id = "contact-form" method="post" action="info.php">
	   	<select class="contact-form" required name = "hotel">
					<option value="" disabled selected>Hotel</option>
					<option>Sharm El Sheikh ex Royal Grand Azure</option>
					<option>Sunrise Arabian Beach Resort</option>
					<option>Aracan Pyramids Hotel</option>
		   		</select>
		   		<br>
		   		<input name="next" type="submit" class="price_reservation" value="Back" formaction = "reservation.php" formnovalidate>
		   		<input name="next" type="submit" class="price_reservation" value="Next">
		   		
		   		</form>
		   		</div>';
	   }
	   elseif ($_POST['country'] == 'USA') {
	   	 	Echo '
	   	<div class="contact-form">
		<form id = "contact-form" method="post" action="info.php">
	   	<select class="contact-form" required name = "hotel">
					<option value="" disabled selected>Hotel</option>
					<option>Hotel Days Inn & Suites Fullerton</option>
					<option>Hotel Seattle</option>
					<option>Lexen Hotel - North Hollywood</option>
		   		</select>
		   		<br>
		   		<input name="next" type="submit" class="price_reservation" value="Back" formaction = "reservation.php" formnovalidate>
		   		<input name="next" type="submit" class="price_reservation" value="Next">
		   		</form>
		   		</div>';
	   	
	   }
	    elseif ($_POST['country'] == 'Alaska') {
	   	 	Echo '
	   	<div class="contact-form">
		<form id = "contact-form" method="post" action="info.php">
	   	<select class="contact-form" required name = "hotel">
					<option value="" disabled selected>Hotel</option>
					<option> Hotel Alyeska Resort</option>
					<option>Harbor 360 Hotel</option>
					<option>Hotel Seward Alaska</option>
		   		</select>
		   		<br>
		   		<input name="next" type="submit" class="price_reservation" value="Back" formaction = "reservation.php" formnovalidate>
		   		<input name="next" type="submit" class="price_reservation" value="Next">
		   		</form>
		   		</div>';
	   	
	   }
	   else
	   {
	   	  	 	Echo '
	   	<div class="contact-form">
		<form id = "contact-form" method="post" action="info.php">
	   	<select class="contact-form" required name = "hotel">
					<option value="" disabled selected>Hotel</option>
					<option> Marble Inn Resort</option>
					<option>Days Inn Swift Current</option>
					<option>Hotel Hotel Lord Elgin</option>
		   		</select>
		   		<br>
		   		<input name="next" type="submit" class="price_reservation" value="Back" formaction = "reservation.php" formnovalidate>
		   		<input name="next" type="submit" class="price_reservation" value="Next">
		   		</form>
		   		</div>';
	   }
	?>

</body>
</html>