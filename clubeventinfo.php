<html>
	<head>
		<title>Club-List</title>
	</head>
	<body style="background-color:#5cb85c">				
	</body>
</html>

<?php

	include "connect.php";
	
	
	$a = $_SERVER['REQUEST_URI'];
	/*echo $a."<br>";*/
	$b = substr($a , 30	);
	/*echo $b."<br>";*/
	$c=substr($b , 2	 , 5);
	/*echo $c."<br>";*/
	$d=substr($b , 7 , 8);
	/*echo $d."<br>";*/
	$e=substr($b , 15);
	/*echo $e."<br";*/
	
	$query= "select * from event_for_club where college_id='$d' and club_id='$c' and event_id='$e'";
	//$query= "select * from events_for_club where college_id='$d' and club_id='$c'";
	$result = mysqli_query($con , $query);
	
	while($club = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		
		echo "<h4> Organisers name : ". $club['organisername'] ." <br>Organisers phone no : ".$club['organiserphoneno']."</h4></a>";
		
	}
	
	/* echo "&lt;sometext&gt;"; */
?>


