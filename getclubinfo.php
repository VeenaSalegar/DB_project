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
	/*echo $a."<br>";*/
	$b = substr($a , 30	 , 14);
	/*echo $b."<br>";*/
	$c=substr($b , 0	 , 5);
	echo $c."<br>";
	$d=substr($b , 5);
	/*echo $d."<br>";*/
	
	$query= "select * from event_for_club where college_id='$d' and club_id='$c'";
	//$query= "select * from events_for_club where college_id='$d' and club_id='$c'";
	$result = mysqli_query($con , $query);
	echo "Click on the club evnt to get The organisers name and phone number<br>";
	while($club = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		
		echo "<a href='clubeventinfo.php?id=".$club['club_id'].$d.$club['event_id']."' style='color:white'><h4>". $club['name'] ."</h4></a>";
		
	}
	
	/* echo "&lt;sometext&gt;"; */
?>


