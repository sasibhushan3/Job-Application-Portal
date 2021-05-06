<?php

session_start();
include_once 'db.php';

if(!$con){
	echo 'not con';
}

else{
$username = $_POST["username"];
$password = $_POST["password"];
$type = $_POST["type"];
$_SESSION['post-data'] = $_POST;
$_SESSION['username']=$username;
$query = "select username from users where username='".$username."'";
$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);
$numResults = mysqli_num_rows($result);
if($numResults!=0){
	echo "<br><br><br><center><h1>Already registered!</h1></center>";
	// header("signup.php");
}

else{
$query = "insert into users(username,password,type) values ('".$username."','".$password."','".$type."');";
if(!mysqli_query($con,$query)){
	echo 'not inserted\n';
	echo("Error description: " . mysqli_error($con));
}
else{
	echo 'Inserted';
}

if ($type=="employer") {
	header('location: empdetails.php');

}
if ($type=="candidate"){
	header('location: candetails.php');
}
}
}

?>
