<?php

session_start();
include_once 'db.php';

if(!$con){
	echo 'not con';
}

else{
$name = $_POST["name"];
$salary = $_POST["salary"];
$vacancies = $_POST["vacancies"];
$place = $_POST["place"];
$skill1 = $_POST["skill1"];
$skill2 = $_POST["skill2"];
$skill3 = $_POST["skill3"];
$skill4 = $_POST["skill4"];
$skill5 = $_POST["skill5"];
$skill6 = $_POST["skill6"];
$username = $_SESSION['username'];
// echo $username;
$query1 = "select company from empdetails where username='".$username."'";
$result = mysqli_query($con, $query1);
$row=mysqli_fetch_array($result);
$var = $row['company'];

$query="select * from job where username='".$username."' and name='".$name."'";
$result1 = mysqli_query($con, $query2);
$numResults = mysqli_num_rows($result1);
// echo mysqli_error($con);
echo $numResults;
if($numResults==0){

$query2 = "insert into job values('".$username."','".$var."','".$name."','".$salary."','".$vacancies."','".$place."','".$skill1."','".$skill2."','".$skill3."','".$skill4."','".$skill5."','".$skill6."')";

$result = mysqli_query($con, $query2);
header('location: sucinsert.php');

}
else{
	header('location: failinsert.php');
	// echo $numResults;
}
// $check=mysqli_query($con, $query);
// if(!$check){
// 	echo("Error: ".mysqli_error($con));
// }
// else echo "inserted";


}
?>