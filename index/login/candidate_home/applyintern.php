<?php
/*
$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
include_once 'db.php';


	$id = $_POST["id"];
	
	session_start();
	$username = $_SESSION['username'];

	$query="select * from intern where id='$id'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
	$emp = $row['username'];
	
	$numResults = mysqli_num_rows($result);
	if($numResults>0){
		$query1 = "insert into message2 values('$username','$emp','$id')";
		$result1 = mysqli_query($con, $query1);
		echo "<center>Applied Successfully!</center>";
		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}
	else
	{
		echo "<center>Internship Offer not found.</center>";
		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}



?>