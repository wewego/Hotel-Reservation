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
	  $price = 0;
	  $suite = 2000;
	  $room = 1000;
	  if ($_POST['hotel'] == 'Sharm El Sheikh ex Royal Grand Azure' || $_POST['hotel'] == 'Hotel Days Inn & Suites Fullerton' || $_POST['hotel'] == 'Hotel Alyeska Resort' || $_POST['hotel'] =='Marble Inn Resort'  )
	  					$price += 1000;
	  
	  elseif ($_POST['hotel'] == 'Sunrise Arabian Beach Resort' || $_POST['hotel'] == 'Hotel Seattle' || $_POST['hotel'] == 'Harbor 360 Hotel' || $_POST['hotel'] == 'Days Inn Swift Current') 
	  					$price += 2000;
	  	
	  
	  else 
	  					$price += 3000;
	  	
	  
	  if ($_POST['typeRoom'] == 'Room')
	  	$price += $room;
	  else
	  	$price += $suite;
	  echo "Total price is ";
	  echo $price;
	  echo "$";
	 
	  	
	  

	?>
	  <br>
	  <form>
	  	<input name="submit" type="submit" class="form-control submit" value="Reservation" formaction = "reservation.php">
	  </form>
	  


</body>
</html>