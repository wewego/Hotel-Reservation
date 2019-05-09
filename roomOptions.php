  <!DOCTYPE html>
	<html>
	<head>
		<title>Check-in</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<div class = "contact-title">
			<h1>Check-in</h1>
			<h2>We are always ready to serve you!</h2>
		</div>


		   	<div class="contact-form">
			<form id = "contact-form" method="post" action="info.php">
				<select class="contact-form" required name = "hotel">
					<option value="" disabled selected>Hotel</option>
					<option>Sofitel Cairo Nile El Gezirah</option>
					<option>Four Seasons Cairo at the First Residence</option>
					<option>Conrad Cairo</option>
					<option>Hotel Fairmont Nile City</option>
					<option>Hotel Le Meridien Cairo Airport</option>
					</select>
					<br>
					<select class="contact-form" required name = "shape">
						<option value="" disabled selected>Room Type</option>
						<option>Room</option>
						<option>Suite</option>
						</select>
						<br>
						<select class="contact-form" required name = "type">
							<option value="" disabled selected>Type</option>
							<option>Single</option>
							<option>Double</option>
							</select>
							<br>
							<select class="contact-form" required name = "time">
								<option value="" disabled selected>Time</option>
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
