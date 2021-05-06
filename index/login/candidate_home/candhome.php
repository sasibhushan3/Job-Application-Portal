<!DOCTYPE html>
<html>
<body>

<!-- <button type="button">Login</button>
<button type="button">Signup</button> -->
<?php
	// session_start();
	// $username = $_GET['username'];
	// $_SESSION['username']=$username;

?>
<br><br>
	<center>
		<h3>Welcome <?php session_start(); echo $_SESSION['username']?></h3>
		<center>
		<a href = "alljobs.php">All job offers</a><br><br>
		<a href = "suggjobs.php">Suggested jobs</a><br><br>
		<a href = "viewappjobs.php">View applied Jobs</a><br><br>
		<a href = "candviewjmsg.php">View Job replies</a><br><br>
		<br><br>
		<a href = "allinterns.php">All internship offers</a><br><br>
		<a href = "suggintern.php">Suggested internships</a><br><br>
		<a href = "viewappintern.php">View applied internships</a><br><br>
		<a href = "candviewimsg.php">View Internship replies</a><br><br>
		<br><br>
		<a href = "index.html">Logout</a><br><br>
		<!-- <a href = "signup.php">Signup</a> -->
	</center>
	</center>
</body>
</html>