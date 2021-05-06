<?php
/*
$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
include_once 'db.php';


	$job = $_POST["job"];
	$emp = $_POST["emp"];
	session_start();
	$username = $_SESSION['username'];

	$query="select * from job where username='$emp' and name='$job'";
	$result = mysqli_query($con, $query);
	$numResults = mysqli_num_rows($result);
	if($numResults>0){
		$query1 = "insert into message values('$username','$emp','$job')";
		$result1 = mysqli_query($con, $query1);
		echo "<center>Applied Successfully!</center>";
		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}
	else
	{
		echo "<center>Wrong Details!</center>";
		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}



?>
