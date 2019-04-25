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
		<form id = "contact-form" method="post" action="info.php">
	   	<select class="contact-form" required name = "type">
					<option value="" disabled selected>Type</option>
					<option>Room</option>
					<option>Suite</option>
		   		</select>
		   		<br>
          <select class="contact-form" required name = "type">
            <option value="" disabled selected>single or double</option>
            <option>Single</option>
            <option>Double</option>
            </select>
            <br>
            <select class="contact-form" required name = "time">
              <option value="" disabled selected>time</option>
              <option>1 day</option>
              <option>2 days</option>
              <option>3 days</option>
              <option>4 days</option>
              <option>5 days</option>
              <option>6 days</option>
              <option>7 days</option>
              </select>
              <br>
		   		<input name="back" type="submit" class="price_reservation" value="Back" formaction = "hotel.php" formnovalidate>
		   		<input name="next" type="submit" class="price_reservation" value="Next">

		   		</form>
		   		</div>

</body>
</html>
