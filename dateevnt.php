<html>
	<head>
		<title>College-List</title>
	</head>
	<body style="background-color:#5cb85c">		
		<form action="eventondate.php" method="post">
			<span style="color:white">College Name:</span> 
			<select name="dateforevent">
				<?php							
				include "connect.php";
				$query= 'select distinct timedate  from event_for_fest union select distinct timedate  from event_for_club';
				$result = mysqli_query($con , $query);	
				$i =1;
				while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
				{
					$href=$college['timedate'];
					echo "<option value='$href'>". $college['timedate'] ."</option>";
					$i=$i+1;
				}										
				?>
			</select>
			<br>
			<input type="submit" name="submit"/>
		</form>
	</body>
</html>




