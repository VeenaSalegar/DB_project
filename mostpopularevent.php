<?php
	//echo "hello<br>";
	include "connect.php";
	
	//$query= "create view tab4 as select user_id, event_id from ((select f.user_id, f.event_id from ticket_fest f) union (select c.user_id, c.event_id from ticket_club c)) as newtab";
	$query="create view tab4 as select user_id,event_id from ticket_fest";
	mysqli_query($con , $query);	
	$query="create view tab5 as select user_id,event_id from ticket_club";
	//echo "hi<br>";
	mysqli_query($con , $query);	
	//echo "test<br>";
	$query="create view tab6 as select user_id,event_if from tab4 union tab5";
	mysqli_query($con , $query);	
	//$query1="select u.name, t.user_id from (select * from (select user_id, count(user_id) as co from tab4 group by user_id) as y order by co desc) as t, usertable u where co = (select co from (select user_id, count(user_id) as co from tab4 group by user_id) as y order by co desc limit 1) and t.user_id = u.user_id";
	//$query1="select f.user_id, f.event_id from ticket_fest f union select c.user_id, c.event_id from ticket_club c as newtab";
	$query1="select user_id,event_id from tab6";
	echo "test1<br>";
	$result=mysqli_query($con , $query1);
	echo "<table> <tr><td>location</td><td>count</td></tr>";
	while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		
		echo "<tr><td>".$college['user_id']. "  </td><td></td><td>     ".$college['event_id']."</td></tr>";
	}
	echo "</table>"; 
	
	
	
?>















