<?php 


/*	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

*/

 $fname = $_POST['firstname'];
 $lname = $_POST['lastname'];
 $Age= $_POST['age'];
 $contact = $_POST['phone'];
 $gender = $_POST['male'];
 // $Interest = $_POST['interest[]'];
 // $ = $_POST[''];

/*
var_dump('die',$_POST) ;die();*/

include 'database.php';

$sql = "INSERT INTO user_details(firstname, lastname, age, phone, gender ) VALUES('$fname','$lname','$Age','$contact','$gender')";

$result = mysqli_query($connection, $sql);

if($result){
	header('Location: table.php');
}


 ?>