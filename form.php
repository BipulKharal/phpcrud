<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="cup">
	<h1>FORM</h1>
</div>

	<div class="not">
		<form action="register.php" method="post">
			<fieldset>
				<legend>fill in the gaps</legend>
				
			<label for="fname">First name</label>
			<input type="text" name="firstname" id="fname" placeholder="first name">
			<label for="lname">Last name</label>
			<input type="text" name="lastname" id="lname" placeholder="Last name">

			<label for="age">Age</label>
			<input type="number" name="age" id="age" placeholder="Age" min="0" max="100">
<br>
			<label>country</label>
			<select>
				<option>nepal</option>
				<option>india</option>
				<option>china</option>
			</select>

 			<label for="gender">Gender</label>
 			<input type="radio" name="male" id="gender">male
 			<input type="radio" name="male" id="gender">female
 			<input type="radio" name="male" id="gender">other

 			<label for="">Contact no.</label>
 			<input type="number" name="phone" id="Contact">
<br>
			
			<ul>
 			<label>interests</label>
 			<li><input type="checkbox" name="inerest[]">dancing</li>
 			<li><input type="checkbox" name="inerest[]">singing</li>
 			<li><input type="checkbox" name="inerest[]">reading</li>
 			</ul>
<br>
 			<label>messege:</label>
 			<textarea></textarea>
 			<br>
 			<input type="submit" name="submit">



			</fieldset>

		</form>


	</div>
 
</body>
</html>