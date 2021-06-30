<!DOCTYPE html>
<html>
<head>
	<title>FORM UPDATE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="cup">
	<h1>UPDATE USER DETAILS</h1>
</div>


<?php

include "database.php";

$id= $_GET['pid'];

$sql="SELECT * FROM user_details WHERE id= ".$id;

/*var_dump('die',$sql) ;die();
*/

$result= mysqli_query($connection, $sql);

	$contactfname   ='';
	$contactlname   ='';
	$contactage     ='';
	$contactphone	='';
                


if($result){
	$row=mysqli_fetch_assoc($result);
	$contactfname   =$row["firstname"];
	$contactlname   =$row["lastname"];
	$contactage     =$row['age'];
	$contactphone	=$row["phone"];
                

}




?>


	<div class="not">
		<form action="editaction.php" method="post">
			<fieldset>
			

				<legend>fill in the gaps</legend>
				
		
			<label for="fname">First name</label>
			<input type="text" name="firstname" id="fname" placeholder="first name"   value="<?php echo $contactfname?>">
			


			<label for="lname">Last name</label>
			<input type="text" name="lastname" id="lname" placeholder="Last name"  value="<?php  echo $contactlname ?>">

<br>			

			<label for="age">Age</label>
			<input type="number" name="age" id="age" placeholder="Age" min="0" max="100"  value="<?php  echo $contactage  ?>">

			
			<label for="">Contact no.</label>
 			<input type="number" name="phone" id="Contact"  value="<?php  echo $contactphone ?>">


 			<input type="hidden" name="id" id="id" value="<?php  echo $id  ?>">

 			


			
			<br>
 			<input type="submit" name="submit" value="Update">


		

			
 		

 			

			</fieldset>

		</form>


	</div>
 
</body>
</html>