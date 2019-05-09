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
			<form id = "contact-form" method="post" action="hotel.php">
				<select class="contact-form" required name = "country">
					<option value="" disabled selected>Country</option>
					<option>Egypt</option>
					<option>USA</option>
					<option>Alaska</option>
					<option>Canda</option>
					<option>Japan</option>
					<option>Europe</option>
					<option>China</option>
					</select>
					<br>




				<input name="next" type="submit" class="form-control submit" value="Next">



			</form>
		</div>

	</body>
	</html>
