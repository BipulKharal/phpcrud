<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		h1 {
			padding: 10px;
			text-align:center;
			background-color: grey;
			color: darkgrey;
         }	

        tr,th,td{
        	border:2px solid;
        	border-color: black;
            padding: 15px;



		</style>
</head>
<body>
	<h1><b>CONTACT</b></h1>

	
    
    <table>
    	<tr>
            <th>id</th>
            <th>First Name</th>
    		<th>Last Name</th>
            <th>Age</th>
    		<th >phone no</th>
            <th>gender</th>
            <th>Actions</th>
           <!--  <th>Interest</th> -->
           
    	</tr>



        <?php 

                include 'database.php';

                $sql = 'SELECT * FROM user_details';


                $result= mysqli_query($connection, $sql);


                if($result){

                     while($row= mysqli_fetch_assoc($result)){

                        $id      =$row['id'];
                        $fname   =$row['firstname'];
                        $lname   =$row['lastname'];
                        $Age     =$row['age'];
                        $contact =$row['phone'];
                        // $gender  =$row['male'];

                ?>


                 <tr>
                 <td><?php echo  $id ?></td>
                 <td><?php echo  $fname ?></td>
                 <td><?php echo  $lname ?></td>
                 <td><?php echo  $Age ?></td>
                 <td><?php echo  $contact?></td>
                 <td><?php echo  $gender?></td>

                 <td> 
                    <a href="delete.php?id=<?php echo $id  ?>">Delete</a>
                   
                    <a href="edit.php?pid= <?php echo $id ?>">Update</a>
                 </td>
                 </tr> 



                <?php          
                
                 }





                }

        ?>



         

    	<!-- <tr>=================this is when i want to print the forms submitted data into tble in another page=============
           <td><?php echo $_POST ["firstname"]  ?></td>
            <td><?php echo $_POST ["lastname"]  ?></td>
            <td><?php echo $_POST ["age"]  ?></td>
            <td><?php echo $_POST ["phone"]  ?></td>
            <td><?php echo $_POST ["male"]  ?></td>
            <td><?php echo $_POST ["inerest[]"]  ?></td>
           
    	</tr> -->
    </table>
</body>
</html>