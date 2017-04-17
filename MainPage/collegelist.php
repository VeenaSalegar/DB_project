<html>
	<head>
		<title>College-List</title>
	</head>
	<body style="background-color:#5cb85c">		
		<form action="searchcollege.php" method="post">
			<span style="color:white">College Name:</span> <input type="text" name="collegename" />
			<input type="submit" name="submit"/>
		</form>
	</body>
</html>

<?php

	include "connect.php";
	$query= 'select * from college';
	$result = mysqli_query($con , $query);	
	echo "Click on the college name to get the clubs of the college<br>";
	while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		$href=$college['name'];
		echo "<a href='try.php?id=".$college['college_id']."' style='color:white'><h4 name='$href'>". $college['name'] ."</h4></a>";
	}
	
	/* echo "<a href='studentData.php?id=".$results['id']."'>".$results['firstName']." ".$results['lastName']."</a></br>"; ?id='.$results['id'].' */
?>




