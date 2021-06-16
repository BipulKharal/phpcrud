<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FORM</title>
</head>
<body>
	
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

$sup= new User('bipul','bipul@xyz');
$sup1= new User('bro','bro@xyz');

echo $sup->username;

}



 ?>