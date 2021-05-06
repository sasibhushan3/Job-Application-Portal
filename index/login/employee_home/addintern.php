<html>
<body>

<!-- <button type="button">Login</button>
<button type="button">Signup</button> -->
<br><br>
	<!-- <center> -->
		<h3>Add new internship offer</h3>
		<form action = "addinternbackend.php" method = "POST">
			<input name = "field" placeholder = "Field"><br><br>
			<input type="number" name = "stipend" placeholder = "Stipend"><br><br>
			<input type="date" name = "from" placeholder = "From date"><br><br>
			<input type="date" name = "to" placeholder = "To date"><br><br>
			Place:      <select name="place">

			  <option value="kharagpur">Kharagpur</option>
			  <option value="kolkata">Kolkata</option>
			  <option value="howrah">Howrah</option>
			  <option value="durgapur">Durgapur</option>
			  <option value="haldia">Haldia</option>
			</select><br><br>
			<input type="hidden" name="skill1" value="No"> 
  			<input type="checkbox" name="skill1" value="Yes"> Programming (C/C++/Python/Java)<br>
  			<input type="hidden" name="skill2" value="No">
  			<input type="checkbox" name="skill2" value="Yes"> Web Designing<br>
  			<input type="hidden" name="skill3" value="No">
  			<input type="checkbox" name="skill3" value="Yes"> Software Design<br>
  			<input type="hidden" name="skill4" value="No">
  			<input type="checkbox" name="skill4" value="Yes"> Database Management<br>
  			<input type="hidden" name="skill5" value="No">
  			<input type="checkbox" name="skill5" value="Yes"> Information Security<br>
  			<input type="hidden" name="skill6" value="No"> 			 
  			<input type="checkbox" name="skill6" value="Yes"> Data Science<br>
			<button type = "submit">Submit</button>
		</form>
	<!-- </center> -->
</body>
</html>