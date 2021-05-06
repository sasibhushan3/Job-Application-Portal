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
		<h3>Welcome <?php session_start(); echo$_SESSION['username']?></h3>
		<center>
		<a href = "addjob.php">Add new job offer</a><br><br>
		<a href = "viewjobs.php">View jobs</a><br><br>
		<a href = "empmsg.php">Job Applications</a><br><br>
		<br><br>
		<a href = "addintern.php">Add new internship offer</a><br><br>
		<a href = "viewintern.php">View internship</a><br><br>
		<a href = "empmsg2.php">Internship Applications</a><br><br>
		<br><br>
		<a href = "index.html">Logout</a><br><br>
		<!-- <a href = "signup.php">Signup</a> -->
	</center>
	</center>
</body>
</html>