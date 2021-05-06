<?php
/*
$host = "localhost";
$user = "USER_NAME";
$dbpass = "PASSWORD";
$dbname = "DB_NAME";
$con = mysqli_connect($host,$user,$dbpass,$dbname);
*/
include_once 'db.php';


	$cand = $_POST["cand"];
	$id = $_POST["id"];
	$reply = $_POST["reply"];
	session_start();
	$username = $_SESSION['username'];
	// echo "$job, $cand, $username";
	// $query="select * from job where username='$username' and job='$job'";
	// $result = mysqli_query($con, $query);
	// $no=mysqli_num_rows($result);
	// if($no==0) header("location: failreply.html");
	// else  header("location: failreply.html");
	$query="delete from message2 where cand='$cand' and id='$id' and emp='$username'";
	$result = mysqli_query($con, $query);
	$query= "insert into reply2 values('$id','$cand','$username','$reply')";
	$result = mysqli_query($con, $query);
	header("location: sucreply.html");
	// if(!$result) echo "Reply error: ".mysqli_error($con);
	// $numResults = mysqli_num_rows($result);
	// if($reply=='accept'){
	// 	// $query2="delete from message2 where cand='$cand'";
	// 	// $result2=mysqli_query($con,$query2);
	// 	// echo "$username and $cand\n";
	// 	// $query="select vacancies from job where username='$username' and name='$job'";
	// 	// $result = mysqli_query($con, $query);
	// 	// if(mysqli_num_rows($result)<=0) header("location: failreply.html");
	// 	// echo "string\n";
	// 	// else {
	// 		while($row=mysqli_fetch_array($result)){
	// 			if($row['vacancies']>1){
	// 				// echo "string1";
	// 				$query1="update job set vacancies=vacancies-1 where username='$username' and name='$job'";
	// 				$result1 = mysqli_query($con, $query1);
	// 				// if(!$result1) echo "Update error: ".mysqli_error($con);
	// 			}
	// 			else{	
	// 				// echo "string2";
	// 				$query1="delete from job where username='$username' and name='$job'";
	// 				$result1 = mysqli_query($con, $query1);
	// 				// if(!$result1) echo "Remove error: ".mysqli_error($con);
					
	// 			}
	// 		}
	// 	// }
	// 	header("location: sucreply.html");
	// }
	// else header("location: sucreply.html");
	// }
	// if($numResults>0){
	// 	$query1 = "insert into message values('$username','$emp','$job')";
	// 	$result1 = mysqli_query($con, $query1);
	// 	echo "<center>Applied Successfully!</center>";
	// 	echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	// }
	// else
	// {
	// 	echo "<center>Wrong Details!</center>";
	// 	echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	// }



?>
