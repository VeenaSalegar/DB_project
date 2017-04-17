<html>
	<head>
		<title>College-List</title>
	</head>
	<body style="background-color:#5cb85c">		
	</body>
</html>

<?php			
	include "connect.php";	
	include "dateevnt.php";
	$a=$_POST['dateforevent'];
	echo $a."this is a<br>";
		
	
	$query = "select name from event_for_fest where timedate='$a' ";
	$result = mysqli_query($con , $query);	
	
	
	
	$query1 = "select name from college where college_id in (select college_id from fest where fest_id in ( select fest_id from event_for_fest where timedate='$a'  ))";
	$result1 = mysqli_query($con , $query1);	
	
	$collegename=mysqli_fetch_array($result1 , MYSQLI_ASSOC);
	if(mysqli_num_rows($result)!=0)
	{
		echo"fest events:<br>";
		while($eventname = mysqli_fetch_array($result , MYSQLI_ASSOC) )				
			echo "<h3>".$eventname['name']."  in  ".$collegename['name']."</h3>";		
	}
	
	else
	{
	
		$query = "select name from event_for_club where timedate='$a' ";
		$result = mysqli_query($con , $query);	
		$query1 = "select name from college where college_id in (select college_id from club where college_id , club_id in ( select college_id , club_id from event_for_fest where timedate='$a'  ))";
		$query1 = "select e.name , c.name from college where college_id in (select college_id , club_id , name from club where college_id , club_id in ( select college_id , club_id from event_for_club where timedate='$a'  ))) as e";
		$result1 = mysqli_query($con , $query1);	
		$collegename=mysqli_fetch_array($result1 , MYSQLI_ASSOC);
		echo"<br><br>club events:<br>";
		while($eventname = mysqli_fetch_array($result , MYSQLI_ASSOC) )
			echo "<h3>".$eventname['name']."   in  ".$collegename['colgname']."</h3>";
	
	}	
	
	
?>




