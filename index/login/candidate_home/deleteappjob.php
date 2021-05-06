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

	//echo   $username;
	$job = $_POST["job"];
	$emp = $_POST["emp"];
	
	$query="select * from message where cand = '$username' and emp='$emp' and job='$job'";
	$result = mysqli_query($con, $query);
	$numResults = mysqli_num_rows($result);
	if($numResults>0){

		$query1 = "delete from message where cand = '$username' and emp='$emp' and job='$job'";
		$result1 = mysqli_query($con, $query1);
		if($result1){
		echo "<center>deleted Successfully!</center>";
		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
		}
		else{
			echo mysqli_error($con);
		}
	}
	else
	{
		echo "<center>Wrong Details!</center>";
		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}



?>
