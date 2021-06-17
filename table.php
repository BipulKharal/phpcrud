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
            <th>First Name</th>
    		<th>Last Name</th>
            <th>Age</th>
    		<th colspan="2">phone no</th>
    		<th>address</th>
    	</tr>

    	<tr>
            <td><?php echo $_POST ["firstname"]  ?></td>
            <td><?php echo $_POST ["lastname"]  ?></td>
            <td><?php echo $_POST ["age"]  ?></td>
            <td><?php echo $_POST ["male"]  ?></td>
    		<td><?php echo $_POST ["interest"]  ?></td>
    		<td><?php echo $_POST [""]  ?></td>
    	</tr>

    	<tr>
            <td>bipul</td>
            <td>bipul</td>
    		<td>rive</td>
    		<td>8983298347</td>
    		<td>3648236483</td>
    		<td>kalo pull</td>
    	</tr>
    </table>
</body>
</html>