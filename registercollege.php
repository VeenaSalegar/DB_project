<html>
	<head>
		<title>Registering college</title>
	</head>
	<body style="background-color:#5cb85c">				
	</body>
</html>


<?php
	include "connect.php";
	$id=$_POST['rc_id'];
	$cname=$_POST['rcollegename'];
	$cadress=$_POST['rcollegeadress'];	
	echo $id."    ".$cname."      ".$cadress."<br>";
	$query= 'select college_id from college';
	$result = mysqli_query($con , $query);	
	$flag=0;
	while($college = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		if($id==$college['college_id'])
		{
			echo "cannot register this college as the college ID is not unique";
			$flag=1;			
		}
	}
	
	if($flag!=1)
	{
		$query1="insert into college(`college_id` , `name` , `adress`) values ('$id' , '$cname' , '$cadress')";
		echo "inserted";
		mysqli_query ( $con , $query1 )or die("couldnt update the info");
		echo"done";
	}
?>
