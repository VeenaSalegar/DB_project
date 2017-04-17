<html>
	<head>
		<title>Technical Events</title>
	</head>
	<body style="background-color:#5cb85c">		
	</body>
</html>

<?php

	include "connect.php";
	$query= "select * from event_for_fest where category='technical'";
	$result = mysqli_query($con , $query);	
	while($festevent = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		echo "<p >".$festevent['event_id']."\t-------".$festevent['name']."\t--------------------".$festevent['location']."\t-------------".$festevent['timedate'] ."</br>"."</p>";
	}
	
?>




