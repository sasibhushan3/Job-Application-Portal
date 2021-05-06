<?php

	session_start();
	include_once 'db.php';

	$username = $_SESSION['username'];

	$query = "SELECT * FROM intern";
	$result = mysqli_query($con, $query);

	$query = "select * from candskills where username = '$username';";
	$result2 = mysqli_query($con, $query);
	$row2 = mysqli_fetch_array($result2);
	$numResults = mysqli_num_rows($result);

	echo "<center><h1>Internships Suggested</h1></center>";
	echo "<center><table border = '1'></center>";
	echo "<center><tr><td><b>S No.</b></td><td><b>Id</b></td><td><b>Employer Name</b></td><td><b>Company</b></td><td><b>Field</b></td><td><b>Stipend</b></td><td><b>From Date</b></td><td><b>To Date</b></td><td><b>Place</b></td><tr></center>";

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

				echo "<center><tr><td>{$i}</td><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['company']}</td><td>{$row['field']}</td><td>{$row['stipend']}</td><td>{$row['from_date']}</td><td>{$row['to_date']}</td><td>{$row['place']}</td><tr></center>";
			$i = $i+1;
		}
	}

		if($i == 1)
	{
		echo "<center><h4>No suggested jobs!<h4></center>";
		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}
	else{
		echo "<center><form action = 'applyintern.php' method = 'POST'><input name = 'emp' placeholder = 'Employer Name'><br><br><input name = 'id' placeholder = 'Id'><br><br><button type = 'submit'>Apply</button></form></center>";

		echo "<center><a href = 'candhome.php'>Home</a><br><br></center>";
	}

?>