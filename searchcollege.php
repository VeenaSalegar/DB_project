<html>
	<head>
		<title>Search college</title>
	</head>
	<body style="background-color:#5cb85c">				
	</body>
</html>


<?php

include "connect.php";

$colname = $_POST['collegename'];
$query= "select * from college where name='$colname'";
$result = mysqli_query($con , $query);

while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	echo "<a href='try.php?id=".$college['college_id']."' style='color:white'><h4>". $college['name'] ."</h4></a>";

?>