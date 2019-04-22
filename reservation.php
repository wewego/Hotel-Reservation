<!DOCTYPE html>
<html>
<head>
	<title>Trivago</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	cho'<div class = "contact-title">
		<h1>Trivago</h1>
		<h2>We are always ready to serve you!</h2>
	</div>
	<div class="contact-form">
		<form id = "contact-form" method="post" action="hotel.php">

				<select class="contact-form" required name = "country">
					<option value="" disabled selected>Country</option>
					<option>Egypt</option>
					<option>USA</option>
					<option>Canda</option>
					<option>Alaska</option>
		   		</select>

			<br>
			<input name="next" type="submit" class="price_reservation" value="Back" formaction = "index.php" formnovalidate>
			<input name="next" type="submit" class="price_reservation" value="Next">


		</form>

	</div>';
	?>

</body>
</html>
