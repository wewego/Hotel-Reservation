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
				$_SESSION['country'] = $_POST['country'];
			}

		 ?>

		<div class = "contact-title">
			<h1>Check-in</h1>
			<h2>We are always ready to serve you!</h2>
		</div>

		   	<div class="contact-form">
			<form id = "contact-form" method="post" action="roomOptions.php">
				<ul>
		<li>

						<img src="images/pic1.webp">
						<h4>Sofitel Cairo Nile El Gezirah</h4>
						<p>$115.00</p>
		</li>
		<li>

						<img src="images/pic2.webp">
						<h4>Four Seasons Cairo at the First Residence</h4>
						<p>$204.00</p>
		</li>
		<li>

						<img src="images/pic3.webp">
						<h4>Conrad Cairo</h4>
						<p>$110.00</p>
		</li>
		<li>

						<img src="images/pic4.webp">
						<h4>Hotel Fairmont Nile City</h4>
						<p>$110.00</p>
		</li>
		<li>

						<img src="images/pic5.webp">
						<h4>Hotel Le Meridien Cairo Airport</h4>
						<p>$112.00</p>
		</li>
</ul>


			   		<input name="back" type="submit" class="price_reservation" value="Back" formaction = "index.php" formnovalidate>
			   		<input name="next" type="submit" class="price_reservation" value="Next">

			   		</form>
			   		</div>



	</body>
	</html>
