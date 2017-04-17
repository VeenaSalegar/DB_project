<html>
	<head>
		<title>College-List</title>
	</head>
	<body style="background-color:#5cb85c">		
		<form action="searchcollegedelete.php" method="post">
			<span style="color:white">College Name:</span> <input type="text" name="collegename" />
			<input type="submit" name="submit"/>
		</form>
		<p> click on a college name to delete it</p>
	</body>
</html>

<?php

	include "connect.php";
	$query= 'select * from college';
	$result = mysqli_query($con , $query);	
	while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		$href=$college['name'];
		echo "<a href='finaldeletecollege.php?id=".$college['college_id']."' style='color:white'><h4 name='$href'>". $college['name'] ."</h4></a>";
	}
	
	/* echo "<a href='studentData.php?id=".$results['id']."'>".$results['firstName']." ".$results['lastName']."</a></br>"; ?id='.$results['id'].' */
?>




