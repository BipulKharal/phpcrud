<?php 
 
 include 'database.php';

 $id= $_GET['id'];

 $sql= "DELETE FROM user_details WHERE id=$id";

 $result= mysqli_query($connection, $sql);

 if($result){

 	header("Location:table.php");
 }






 ?>