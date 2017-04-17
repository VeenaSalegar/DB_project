<html>
	<head>
		<title>College(club)-List</title>
	</head>
	<body style="background-color:#5cb85c">		
		<form action="searchcollege.php" method="post">
			<input type="text" name="collegename" />
			<input type="submit" name="submit"/>
		</form>
	</body>
</html>

<?php

	include "connect.php";
	$query= 'select * from college';
	$result = mysqli_query($con , $query);	
	while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		$href=$college['name'];
		echo "<a href='getclubs.php?id=".$college['college_id']."' style='color:white'><h4 name='$href'>". $college['name'] ."</h4></a>";
	}
	
	/* echo "<a href='studentData.php?id=".$results['id']."'>".$results['firstName']." ".$results['lastName']."</a></br>"; ?id='.$results['id'].' */
?>




