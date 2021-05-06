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


	// echo "<center><h1>Jobs Offered</h1></center>";
	// echo "<center><table border = '1'></center>";
	//echo "<center><tr><td><b>S No.</b></td><td><b>Job</b></td><td><b>salary</b></td><td><b>vacancies</b></td><td><b>place</b></td><td><b>Skills Required</b></td><tr></center>";

	$query = "SELECT * FROM message2 where cand = '$username'";
	$result = mysqli_query($con, $query);
	$numResults = mysqli_num_rows($result);

	if($numResults > 0)
	{
		echo "<center><h1>Applied Internships</h1></center>";
		echo "<center><table border = '1'></center>";
		echo "<center><tr><td><b>S No.</b></td><td><b>Internship Id</b></td><td><b>Employer Name</b></td><td><b>Company</b></td><td><b>Place</b></td><tr></center>";

		$i = 1;
		while($row=mysqli_fetch_array($result))
		{
			
			$id = $row['id'];
			$query2 = "SELECT * FROM intern where id = '$id'";
			$result2 = mysqli_query($con, $query2);
			$row2 = mysqli_fetch_array($result2);
		
			// $var = "";
			// if($row['programming'] == 'Yes')
			// 	$var = $var.'Programming ';
			// if($row['web_design'] == 'Yes')
			// 	$var = $var.'Web-Design ';
			// if($row['software'] == 'Yes')
			// 	$var = $var.'Software-Design ';
			// if($row['data_base'] == 'Yes')
			// 	$var = $var.'Database-Management ';
			// if($row['inform_sec'] == 'Yes')
			// 	$var = $var.'Information-Security ';
			// if($row['data_scien

			echo "<center><tr><td>{$i}</td><td>{$row['id']}</td><td>{$row['emp']}</td><td>{$row2['company']}</td><td>{$row2['place']}</td><tr></center>";
			$i = $i+1;
		}

		echo "<center><form action = 'deleteappintern.php' method = 'POST'><input name = 'id' placeholder = 'Internship Id'><br><br><button type = 'submit'>Delete</button></form></center>";

		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";

	}
	else
	{
		echo "<center>Applied Internship list is empty!</center>";
		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}



?>