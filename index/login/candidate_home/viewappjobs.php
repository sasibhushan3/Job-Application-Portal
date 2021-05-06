<?php
/*
$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
	session_start();
	include_once 'db.php';

	$username = $_SESSION['username'];


	// echo "<center><h1>Jobs Offered</h1></center>";
	// echo "<center><table border = '1'></center>";
	//echo "<center><tr><td><b>S No.</b></td><td><b>Job</b></td><td><b>salary</b></td><td><b>vacancies</b></td><td><b>place</b></td><td><b>Skills Required</b></td><tr></center>";

	$query = "SELECT * FROM message where cand ='$username'";
	$result = mysqli_query($con, $query);
	$numResults = mysqli_num_rows($result);

	if($numResults > 0)
	{
		echo "<center><h1>Jobs Applied</h1></center>";
			echo "<center><table border = '1'></center>";
			echo "<center><tr><td><b>S No.</b></td><td><b>Employer Name</b></td><td><b>Job name</b></td><tr></center>";

		$i = 1;
		while($row=mysqli_fetch_array($result))
		{


			echo "<center><tr><td>{$i}</td><td>{$row['emp']}</td><td>{$row['job']}</td><tr></center>";
			$i = $i+1;
		}

		echo "<center>Delete applied job</center>";
		echo "<center><form action = 'deleteappjob.php' method = 'POST'><input name = 'emp' placeholder = 'Employer Name'><br><br><input name = 'job' placeholder = 'Job Name'><br><br><button type = 'submit'>Apply</button></form></center>";

		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";

	}
	else
	{
		echo "<center>Applied Job list is empty!</center>";
		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}



?>