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
<br>
</body>
</html>

<?php 

	class User{

		public $username;
		public $email;

		public function __construct($uname,$emaill){
					$this->username=$uname;
					$this->email=$emaill;
					}
		
		public function getEmail(){

			return $this->email;
		}			

		public function setEmail($email2){
			if(strpos($email2,'@')>-1){
				$this->email=$email2;
			}

		}

		
	}	



	    $sup=new User('bipul','bipul@xyz'.'<br>');
		$sup1=new User('bro','bro@xyz'.'<br>');

		$sup->setEmail('binitgmail.com');

		/*$sup->email='binit@gmail.com';*/
		echo $sup->username. '<br>';

		echo $sup->getEmail();





 ?>














