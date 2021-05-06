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
$username = $_POST["username"];
$password = $_POST["password"];
$_SESSION['username']=$username;
$query = "select * from users where username='".$username."' and password='".$password."'";

$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);

$numResults = mysqli_num_rows($result);
if($numResults == 1){
	//echo "<br><br><br><center><h1>Hi ".$username."!</h1></center>";
	//header("emphome.php?username=".$username);
	// $query="select type from users where username='".$username."'";
	if($row['type']=="employer")
		header('location: emphome.php');
	else header('location: candhome.php');
}
else{
	
echo "<br><br><br><center><h1>Invalid credentials!</h1></center>";
}
}


// $password = md5($password);

// $query = "SELECT * FROM user WHERE username='$username' AND password='$password';";
// $result = mysqli_query($con, $query);
// // $resultCheck = mysqli_num_rows()
// $row=mysqli_fetch_array($result);
// echo $row['username'];
// $numResults = mysqli_num_rows($result);

// if($numResults == 1){
// 	$query = "insert into user values ('"$username"','"$password"');";
// 	mysqli_query($con, $query);
// 	echo "<br><br><br><center><h1>Hi ".$row["name"]."!</h1></center>";
// }
// else
// {
// 	echo "<br><br><br><center><h1>Invalid credentials!</h1></center>";
// }



?>
