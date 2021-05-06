<!DOCTYPE html>
<html>
<body>
<?php
				session_start();
				$username = $_SESSION["username"];
				$_SESSION['username']=$username;
				// echo "$username";
			?>
<br><br>
	<!-- <center> -->
		<h2>Enter the Details</h2>
		<form action = 'candetailsbackend.php' method = "POST">
			
			<input type = "text" name = "name" placeholder="Name"><br><br>
			<input type = "text" name = "college" placeholder="College name"><br><br>
			DOB: <input type = "date" name = "dob" placeholder="Date of Birth"><br><br>
			<input type = "text" name = "email" placeholder="Email Address"><br><br>
			<input type = "number" name = "phoneno" placeholder="Phone number"><br><br>
			<input type = "text" name = "qualification" placeholder="Qualifcation"><br><br>
			<input type = "number" name = "gate_score" placeholder="GATE Score"><br><br>
			<input type = "text" name = "cgpa" placeholder="CGPA"><br><br>
  			<input type="hidden" name="skill1" value="No"> 
  			<input type="checkbox" name="skill1" value="Yes"> Programming (C/C++/Python/Java)<br>
  			<input type="hidden" name="skill2" value="No">
  			<input type="checkbox" name="skill2" value="Yes"> Web Designing<br>
  			<input type="hidden" name="skill3" value="No">
  			<input type="checkbox" name="skill3" value="Yes"> Software Design<br>
  			<input type="hidden" name="skill4" value="No">
  			<input type="checkbox" name="skill4" value="Yes"> Database Management<br>
  			<input type="hidden" name="skill5" value="No">
  			<input type="checkbox" name="skill5" value="Yes"> Information Security<br>
  			<input type="hidden" name="skill6" value="No"> 			 
  			<input type="checkbox" name="skill6" value="Yes"> Data Science<br>
  			<!-- <input type="checkbox" name="vehicle2" value="Car"> I have a car<br>
  			<input type="checkbox" name="vehicle3" value="Boat" checked> I have a boat<br><br> -->
  

			<button type = "submit">Submit</button>
		</form>
	<!-- </center> -->
</body>
</html>
