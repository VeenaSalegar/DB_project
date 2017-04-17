<html>
	<head>
		<title>Club-List</title>
	</head>
	<body style="background-color:#5cb85c">				
	</body>
</html>

<?php

	include "connect.php";
	
	/*echo '<a href="try.php" title="link-title">' . try. '</a>';*/
	$a = $_SERVER['REQUEST_URI'];
	
	$b = substr($a , 27	 , 8);
	
	
	$query= "select * from club where college_id='$b'";
	$result = mysqli_query($con , $query);
	echo "Click on the club name to get events hosted by the club<br>";
	while($club = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		
		echo "<a href='getclubinfo.php?id=".$club['club_id'].$b."' style='color:white'><h4>". $club['name'] ."</h4></a>";
		
	}
	/* echo "&lt;sometext&gt;"; */
?>


