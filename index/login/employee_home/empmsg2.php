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

	$query = "SELECT * FROM message2 where emp='$username'";
	$result = mysqli_query($con, $query);
	$numResults = mysqli_num_rows($result);

	if($numResults > 0)
	{
		echo "<center><h1>Internship Applications</h1></center>";
			echo "<center><table border = '1'></center>";
			echo "<center><tr><td><b>S No.</b></td><td><b>Candidate username</b></td><td><b>Internship ID</b></td><td><b>Field</b></td><td><b>Contact Number</b></td><td><b>Skills</b></td><tr></center>";

		$i = 1;
		while($row=mysqli_fetch_array($result))
		{
			$cand = $row['cand'];
			$id = $row['id'];
			
			$query2 = "SELECT * FROM candskills where username='$cand'";
			$result2 = mysqli_query($con, $query2);
			// $numResults2 = mysqli_num_rows($result2);
			$row2=mysqli_fetch_array($result2);

			$query3 = "SELECT * FROM candetails where username='$cand'";
			$result3 = mysqli_query($con, $query3);
			// $numResults3 = mysqli_num_rows($result3);
			$row3=mysqli_fetch_array($result3);

			$query4 = "SELECT * FROM intern where id='$id'";
			$result4 = mysqli_query($con, $query4);
			// $numResults4 = mysqli_num_rows($result4);
			$row4=mysqli_fetch_array($result4);

			$var = "";
			if($row2['programming'] == 'Yes')
				$var = $var.'Programming ';
			if($row2['web_design'] == 'Yes')
				$var = $var.'Web-Design ';
			if($row2['software'] == 'Yes')
				$var = $var.'Software-Design ';
			if($row2['data_base'] == 'Yes')
				$var = $var.'Database-Management ';
			if($row2['inform_sec'] == 'Yes')
				$var = $var.'Information-Security ';
			if($row2['data_science'] == 'Yes')
				$var = $var.'Data-Science';

			echo "<center><tr><td>{$i}</td><td>{$row['cand']}</td><td>{$id}</td><td>{$row4['field']}</td><td>{$row3['phoneno']}</td><td>{$var}</td><tr></center>";
			$i = $i+1;
		}

		echo "<center><form action = 'reply2.php' method = 'POST'><input name = 'cand' placeholder = 'Candidate Name'><br><br><input name = 'id' placeholder = 'Internship ID'><br><br><select name='reply'>
			  <option value='reject'>Reject Internship</option>
			  <option value='accept'>Accept Internship</option>
			</select><button type = 'submit'>Send</button></form></center>";

		echo "<center><a href = 'emphome.php'>Home</a><br><br></center>";

	}
	else
	{
		echo "<center>No new messages</center>";
		echo "<center><a href = 'emphome.php'>Home</a><br><br></center>";
	}



?>