<?php
	session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>GOOD STUDENTS GO TRIP</title>
	<link rel="stylesheet" type="text/css" href="homestyles.css">
	
</head>
<body>

	
				
			
	<h1 >Home</h1>
	<p>Welcome to your profile, your email is 
		<?php echo $_SESSION['Email']; ?>
			
			</p>
			<p>Log out? <a href="login.php">Logout</a>	</p>
	<div class="Trip">
	<p>A proposed trip itinerary. Feedback from the students is much welcomed on their opinions.</p>
	<br>
	<table border="3">
		<tr>
			<td>15th</td>
			<td>16th</td>
			<td>17th</td>
			<td>18th</td>
			<td>19th</td>
			<td>20th</td>
		</tr>
		<tr>
			<td><strong>-visit the beach<br>-unpack lugage<br>-familiarize with area</strong></td>
			<td><strong>-gather supplies for bonfire<br>-have a bonfire<br>-have an arts classes at the beach</strong></td>
			<td><strong> -experience water sports</strong></td>
			<td><strong>-go shopping</strong></td>
			<td><strong>-a day off for people to do what they wish</strong></td>
			<td><strong>-visit prehistoric places/ tourist destinations</strong></td>
		</tr>
	</table>
	
	<h2> requirements:</h2>
	<p>All Students travelling are required to carry with them/provide details on</p>
	<ul>
		<li>Medical records</li>
		<li>Emergency Phone number</li>
		<li>Vacation Clothes</li>
		<li>phone</li>
		<li>pocket money</li>
		<li>snack</li>
		<li>WATER</li>
		<li>Netflix</li>
		
	</ul>
	<p>Food and Shelter will be provided for the students inclusive of tours around the area and sightseeing escapades. However, additional activities will attract a fee. We advise to provide yourselves with funds for accomodating to the additional expenses on your person.</p>


</body>
</html>
	
</body>
</html>