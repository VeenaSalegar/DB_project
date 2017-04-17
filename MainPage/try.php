<html>
	<head>
		<title>College-info</title>
	</head>
	<body style="background-color:#5cb85c">				
	</body>
</html>

<?php

	include "connect.php";
	
	/*echo '<a href="try.php" title="link-title">' . try. '</a>';*/
	$a = $_SERVER['REQUEST_URI'];
	/*echo $a."<br>";*/
	$b = substr($a , 22);
	
	$query= "select * from college where college_id='$b'";
	$result = mysqli_query($con , $query);
	
	while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		$href=$college['name'];
		echo "<a href='getclubs.php?id=".$college['college_id']."><h4 name='$href' onclick='try.php'>". $college['name'] ."</h4></a><br>";
		echo $college['adress'];
	}
	/* echo "&lt;sometext&gt;"; */
?>


