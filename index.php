<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>wassup</title>
</head>
<body>

	<h1><STRONG><?phpACHIEVE  ?> </STRONG></h1>

	

	<?php 

		$a=5;


		++$a;
		echo $a;

		$a++;
		echo $a . '<br>';


		$fname='bipul';
		$lname='kharaal';

	      $fname.=" ".$lname;

	 echo $fname.'<br>';



		


		$marks=400;
		$total=600;

		$percentage= $marks/ $total *100;


		switch ($percentage) {
		   	case ($percentage>=80):
				echo'bravo';
				break;

			case($percentage<80):
				echo 'good';	
				break;
			
			default:
				echo 'tait';
				break;
		}

		
	?>
		<br>
	
	
	<?php 

	$i=1;
		/* while ($i<=100) {

	 		  if($i%2==0){
	 				echo $i;
	 		// echo'bro'; 
	 		  }


	 		 echo $i++;
	 	}	*/

// echo '<br>';
	 	do{
	 		echo $i++;
	 	}while ($i<= 10);










 	








	 ?>

</body>
</html>















