<?php

// $host = "localhost";
// $user = "USER_NAME";
// $dbpass = "PASSWORD";
// $dbname = "DB_NAME";
// $con = mysqli_connect($host,$user,$dbpass,$dbname);
session_start();
include_once 'db.php';

if(!$con){
	echo 'not con';
}

else{
$name = $_POST["name"];
$company = $_POST["company"];
$designation = $_POST["designation"];
$phoneno = $_POST["phoneno"];
$username = $_SESSION['username'];

$query = "insert into empdetails values('".$username."','".$name."','".$company."','".$designation."','".$phoneno."')";

$result = mysqli_query($con, $query);
// $check=mysqli_query($con, $query);
// if(!$check){
// 	echo("Error: ".mysqli_error($con));
// }
// else echo "inserted";
header('location: emphome.php?username='.$username);
}
?>
