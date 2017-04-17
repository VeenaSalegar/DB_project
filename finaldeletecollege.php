<html>
	<head>
		<title>College-List</title>
	</head>
	<body style="background-color:#5cb85c">		
			
		
	</body>
</html>

<?php

	include "connect.php";
	$a = $_SERVER['REQUEST_URI'];	
	echo $a;
	$b = substr($a , 37	 , 8);
	echo "<br>".$b."<br>";
	$query= "select name from college  where college_id='$b'";
	echo "hi";
	$result = mysqli_query($con , $query);	
	while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		
		echo "<h4>". $college['name'] ." Will be deleted</h4></a>";
	}
	
	
	$query1= "delete from college  where college_id='$b'";
	mysqli_query ( $con , $query1 )or die("couldnt update the info");	
	
?>




