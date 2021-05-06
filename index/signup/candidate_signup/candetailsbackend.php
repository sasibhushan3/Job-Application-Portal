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
$username = $_SESSION['username'];
$name = $_POST["name"];
$college = $_POST["college"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$phoneno = $_POST["phoneno"];
$qualification = $_POST["qualification"];
$gate_score = $_POST["gate_score"];
$cgpa = $_POST["cgpa"];
$skill1 = $_POST["skill1"];
$skill2 = $_POST["skill2"];
$skill3 = $_POST["skill3"];
$skill4 = $_POST["skill4"];
$skill5 = $_POST["skill5"];
$skill6 = $_POST["skill6"];


$query1 = "insert into candetails values('".$username."','".$name."','".$college."','".$dob."','".$email."','".$phoneno."','".$qualification."','".$gate_score."','".$cgpa."');";

$result1 = mysqli_query($con, $query1);
// if(!$check){
// 	echo("Error: ".mysqli_error($con));
// }
// else echo "inserted";
$query = "insert into candskills values('".$username."','".$skill1."','".$skill2."','".$skill3."','".$skill4."','".$skill5."','".$skill6."');";
$result = mysqli_query($con, $query);

// echo "<br><br><br><center><h1>Successful!</h1></center>";
header('location: candhome.php');
}

?>