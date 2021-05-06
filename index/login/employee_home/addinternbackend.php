<?php

session_start();
include_once 'db.php';

if(!$con){
	echo 'not con';
}

else{
$field = $_POST["field"];
$stipend = $_POST["stipend"];
$from = $_POST["from"];
$to = $_POST["to"];
$place = $_POST["place"];
$skill1 = $_POST["skill1"];
$skill2 = $_POST["skill2"];
$skill3 = $_POST["skill3"];
$skill4 = $_POST["skill4"];
$skill5 = $_POST["skill5"];
$skill6 = $_POST["skill6"];
$username = $_SESSION['username'];

$query1 = "select company from empdetails where username='".$username."'";
$result = mysqli_query($con, $query1);
$row=mysqli_fetch_array($result);
$c_name=$row["company"];
$query = "insert into intern values(NULL,'".$username."','".$c_name."','".$field."','".$stipend."','".$from."','".$to."','".$place."','".$skill1."','".$skill2."','".$skill3."','".$skill4."','".$skill5."','".$skill6."')";

$result = mysqli_query($con, $query);
// echo mysqli_error($con);
// $check=mysqli_query($con, $query);
// if(!$check){
// 	echo("Error: ".mysqli_error($con));
// }
// else echo "inserted";
if($result) header("location: sucinsert.php");
else header("location: failinsert.php");
}
?>