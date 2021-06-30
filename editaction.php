<?php 

$id = $_POST['id'];
$fname= $_POST['firstname'];
$lname= $_POST['lastname'];
$Age= $_POST['age'];


include "database.php";

$sql= "UPDATE user_details SET firstname='$fname',lastname=$lname, age=$Age WHERE id= $id ";

$result=mysqli_query($connection, $sql);

if($result){

	header("location:table.php");
}

 ?>