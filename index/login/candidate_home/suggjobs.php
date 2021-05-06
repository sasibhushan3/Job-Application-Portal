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

	// $query = "SELECT job.username,job.company,job.name,job.salary,job.vacancies,job.place FROM job,candskills where candskills.username='$username' and if(job.programming='Yes',candskills.programming='Yes',1 ) and if(job.web_design='Yes',candskills.web_design='Yes',1 ) and (job.software='Yes',candskills.software='Yes',1 ) and if(job.data_base='Yes',candskills.data_base='Yes',1 ) and (job.inform_sec='Yes',candskills.inform_sec='Yes',1 ) and if(job.data_science='Yes',candskills.data_science='Yes',1 );";
	$query = "SELECT * from job";
	$result = mysqli_query($con, $query);

	$query = "select * from candskills where username = '$username';";
	$result2 = mysqli_query($con, $query);
	$row2 = mysqli_fetch_array($result2);
	// echo 'This is '.$result;
	$numResults = mysqli_num_rows($result);

	echo "<center><h1>Jobs Suggested</h1></center>";
		echo "<center><table border = '1'></center>";
		echo "<center><tr><td><b>S No.</b></td><td><b>Employer Name</b></td><td><b>Company</b></td><td><b>Job Name</b></td><td><b>Salary</b></td><td><b>Vacancies</b></td><td><b>Place</b></td><tr></center>";

	$i = 1;	
	while($row=mysqli_fetch_array($result)){

		$flag = 0;
		if($row['programming'] == 'Yes' && $row2['programming'] == 'No')
			$flag = 1;
		if($row['web_design'] == 'Yes' && $row2['web_design'] == 'No')
			$flag = 1;
		if($row['software'] == 'Yes' && $row2['software'] == 'No')
			$flag = 1;
		if($row['data_base'] == 'Yes' && $row2['data_base'] == 'Yes')
			$flag = 1;
		if($row['inform_sec'] == 'Yes' && $row2['inform_sec'] == 'No')
			$flag = 1;
		if($row['data_science'] == 'Yes' && $row2['data_science'] == 'Yes')
			$flag = 1;

		if($flag == 0){

				echo "<center><tr><td>{$i}</td><td>{$row['username']}</td><td>{$row['company']}</td><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['vacancies']}</td><td>{$row['place']}</td><tr></center>";
			$i = $i+1;
		}

		
		
			
	}

		// echo "<center><h1>Jobs Offered</h1></center>";
		// 	echo "<center><table border = '1'></center>";
		// 	echo "<center><tr><td><b>S No.</b></td><td><b>Employer Name</b></td><td><b>Company</b></td><td><b>Job Name</b></td><td><b>Salary</b></td><td><b>Vacancies</b></td><td><b>Place</b></td><td><b>Skills Required</b></td><tr></center>";

		// $i = 1;
		// while($row=mysqli_fetch_array($result))
		// {
			

		// 	$var = "";
		// 	if($row['programming'] == 'Yes')
		// 		$var = $var.'Programming ';
		// 	if($row['web_design'] == 'Yes')
		// 		$var = $var.'Web-Design ';
		// 	if($row['software'] == 'Yes')
		// 		$var = $var.'Software-Design ';
		// 	if($row['data_base'] == 'Yes')
		// 		$var = $var.'Database-Management ';
		// 	if($row['inform_sec'] == 'Yes')
		// 		$var = $var.'Information-Security ';
		// 	if($row['data_science'] == 'Yes')
		// 		$var = $var.'Data-Science';


		// 	echo "<center><tr><td>{$i}</td><td>{$row['username']}</td><td>{$row['company']}</td><td>{$row['name']}</td><td>{$row['salary']}</td><td>{$row['vacancies']}</td><td>{$row['place']}</td><td>{$var}</td><tr></center>";
		// 	$i = $i+1;
		// }

		// echo "<center><form action = 'applyjob.php' method = 'POST'><input name = 'emp' placeholder = 'Employer Name'><br><br><input name = 'job' placeholder = 'Job Name'><br><br><button type = 'submit'>Apply</button></form></center>";

		// echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	if($i == 1)
	{
		echo "<center><h4>No suggested jobs!<h4></center>";
		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}
	else{
		echo "<center><form action = 'applyjob.php' method = 'POST'><input name = 'emp' placeholder = 'Employer Name'><br><br><input name = 'job' placeholder = 'Job Name'><br><br><button type = 'submit'>Apply</button></form></center>";

		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}


?>