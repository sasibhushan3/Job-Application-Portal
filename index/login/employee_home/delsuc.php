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

	session_start();
	$username = $_SESSION['username'];
	$query1 = "SELECT * FROM job where username = '$username' and  name = '".$job."'";
	$result1 = mysqli_query($con, $query1);
	$numResults = mysqli_num_rows($result1);

	
	//echo mysqli_error($con);

	if($numResults > 0)
	{
		$query = "DELETE FROM job where username = '$username' and  name = '".$job."'";
		$result = mysqli_query($con, $query);
		echo "<center>Deleted Successfully!</center>";
		echo "<center><a href = 'emphome.php'>Home</a><br><br></center>";
	}
	else
	{
		echo "<center>Delete Unsuccessful</center>";
		echo "<center><a href = 'emphome.php'>Home</a><br><br></center>";
	}



?>