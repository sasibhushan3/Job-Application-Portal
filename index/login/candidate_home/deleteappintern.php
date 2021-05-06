<?php
/*
$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
include_once 'db.php';

	session_start();
	$username = $_SESSION['username'];


	$id = $_POST["id"];

$query="select * from message2 where cand = '$username'  and id='$id'";
	$result = mysqli_query($con, $query);
	$numResults = mysqli_num_rows($result);
	if($numResults>0){

		$query1 = "delete from message2 where cand = '$username' and id='$id'";
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