<!DOCTYPE html>
<html>
<body>

<br><br>
	<center>
		<h3>New User</h3>
		<form action = "signupbackend.php" method = "POST">
			Username: <input type = "text" name = "username"><br><br>
			Password: <input type = "password" name = "password"><br><br>
			Type:<br> <input type = "radio" name = "type" value="employer"> Employer<br>
			<input type = "radio" name = "type" value="candidate"> Candidate<br>
			<button type = "submit">Submit</button>
		</form>
	</center>
</body>
</html>
