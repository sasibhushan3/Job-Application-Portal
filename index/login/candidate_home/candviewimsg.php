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

	$query = "SELECT * FROM reply2 where cand = '$username'";
	$result = mysqli_query($con, $query);
	$numResults = mysqli_num_rows($result);

	if($numResults > 0)
	{	


		echo "<center><h1>Internship Replies</h1></center>";
		echo "<center><table border = '1'></center>";
		echo "<center><tr><td><b><center>S No.</center></b></td><td><b><center>Internship Id</center></b></td><td><b><center>Field</center></b></td><td><b><center>Company</center></b></td><td><b><center>Employer Name</center></b></td><td><b><center>Employer Contact Number</center></b></td><td><b><center>From</center></b></td><td><b><center>To</center></b></td><td><b><center>Reply</center></center></b></td><tr></center>";

		$i = 1;
		while($row=mysqli_fetch_array($result))
		{
			
			$emname = $row['emp'];
			$query2 = "SELECT * FROM empdetails where username = '$emname'";
			$result2 = mysqli_query($con, $query2);
			// $numResults2 = mysqli_num_rows($result2);
			$row2=mysqli_fetch_array($result2);
			
			$id = $row['id'];
			$query3 = "SELECT * FROM intern where id = '$id'";
			$result3 = mysqli_query($con, $query3);
			// $numResults3 = mysqli_num_rows($result3);
			$row3=mysqli_fetch_array($result3);
		
		
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

			echo "<center><tr><td><center>{$i}</center></td><td><center>{$row['id']}</center></td><td><center>{$row3['field']}</center></td><td><center>{$row2['company']}</center></td><td><center>{$row2['name']}</center></td><td><center>{$row2['phoneno']}</center></td><td><center>{$row3['from_date']}</center></td><td><center>{$row3['to_date']}</center></td><td><center>{$row['reply']}</center></td>";
			$i = $i+1;
		}

		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";

	}
	else
	{
		echo "<center>Message list is empty!</center>";
		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}



?>