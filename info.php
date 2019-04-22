
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
	<form id = "contact-form" method="post" action="contact-form-handler.php">
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
			<select class="contact-form" required name = "typeRoom">
					<option value="" disabled selected>Type</option>
					<option>Room</option>
					<option>suite</option>
		   		</select>
		   	<br>
		   	<input type="text" name="credit card" class="form-control" placeholder="Credit Card" required>
		   	<br>
		   	<input type="password" name="password" class="form-control" placeholder="password" required>
		   	<br>

			<textarea name="comment" class="form-control" placeholder="Any comments" row = "4"></textarea><br>
		<input name="submit" type="submit" class="form-control submit" value="submit" formaction="contact-form-handler.php">
	</form>
	

</body>
</html>