<html>
	<head>
		<title>College-List</title>
	</head>
	<body style="background-color:#5cb85c">		
		<form action="searchcollege.php" method="post">
			<span style="color:white">College Name:</span> 
			<select>
				<?php			
				echo "hi<br>";
				include "connect.php";
				$query= 'select * from college';
				$result = mysqli_query($con , $query);	
				while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
				{
					$href=$college['name'];
					echo "<option value='$href'>". $college['name'] ."</option>";
				}						
				?>
			</select>
			<br>
			<input type="submit" name="submit"/>
		</form>
	</body>
</html>




