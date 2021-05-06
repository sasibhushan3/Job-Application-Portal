<!DOCTYPE html>
<html>
<body>

<br><br>
	<center>
		<h2>Enter the Details</h2>
		<form action = 'empdetailsbackend.php' method = "POST">
			<?php
				// session_start();
				// $username = $_GET['username'];
				// $_SESSION['username']=$username;
				// echo "$username";
			?>
			Name:          <input type = "text" name = "name"><br><br>
			Company name:  <input type = "text" name = "company"><br><br>
			Designation:   <input type = "text" name = "designation"><br><br>
			Phone number:  <input type = "number" name = "phoneno"><br><br>
			<button type = "submit">Submit</button>
		</form>
	</center>
</body>
</html>
