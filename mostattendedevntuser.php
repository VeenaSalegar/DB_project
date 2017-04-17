<?php
	echo "hello";
	include "connect.php";
	
	$query = "create view taba as user_id, event_id from ticket_fest";
	mysqli_query($con , $query);	
	$query = "create view tabb as user_id, event_id from ticket_club";
	mysqli_query($con , $query);	
	$query = "create view tabc as user_id, event_id from taba union tabb";
	mysqli_query($con , $query);	
	/*$query= "create view tab4 as select user_id, event_id from (((select user_id, event_id from ticket_fest) union (select user_id, event_id from ticket_club)) as newtab)"; 
	echo "hi";
	mysqli_query($con , $query);	
	

	$query1="select * from tab4";
*/

	//$query1 = "((select user_id, event_id from ticket_fest) union (select user_id, event_id from ticket_club))";
	$query1= "select user_id, event_id from (((select user_id, event_id from ticket_fest) union (select user_id, event_id from ticket_fest)))"; 
	$result=mysqli_query($con , $query1);
	echo "<table> <tr><td>location</td><td>count</td></tr>";
	while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		
		echo "<tr><td>".$college['user_id']. "  </td><td>     ".$college['event_id']."</td></tr>";
	}
	echo "</table>"; 
	
	
	
?>
