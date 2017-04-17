<?php
	echo "hello";
	include "connect.php";
	
	$query= "create view tab2 as select event_id , location from event_for_fest";
	echo "hi";
	mysqli_query($con , $query);	
	$query1="select * from tab2";
	$result=mysqli_query($con , $query1);
	while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		
		echo "<h4>". $college['event_id'] ."     ".$college['location']."</h4>";
	}
	
	
	
	
?>
