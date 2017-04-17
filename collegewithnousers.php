<html>
	<head>
		<title>college with no users</title>
	</head>
	<body style="background-color:#5cb85c">				
	</body>
</html>


<?php
	include "connect.php";
	echo"<br>";
	$query= "select name from college where college_id not in(select college_id from usertable group by college_id having count(*)>=1)";
	
	mysqli_query($con , $query);	
	$result=mysqli_query($con , $query);
	echo "list of college with no users";
	echo"<br>";
	while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		
		echo"<br>" .$college['name']. "  <br>";
	}
	
	
	
	
	
?>

