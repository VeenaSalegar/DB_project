<html>
	<head>
		<title>Location and events</title>
	</head>
	<body style="background-color:#5cb85c">				
	</body>
</html>


<?php
	
	include "connect.php";
	
	$query= "create view tab2 as select event_id , location from event_for_fest";
	
	mysqli_query($con , $query);	
	$query= "create view tab3 as select event_id , location from event_for_club";
	mysqli_query($con , $query);	

	$query1="select location, count(location) as c from ((select * from tab2) union (select * from tab3)) as unitab group by location";


	$result=mysqli_query($con , $query1);
	echo "<table> <tr><td>location</td><td>count</td></tr>";
	while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		
		echo "<tr><td>".$college['location']. "  </td><td>     ".$college['c']."</td></tr>";
	}
	echo "</table>"; 
	
	
	
?>
