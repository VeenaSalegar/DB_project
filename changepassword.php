<html>
	<head>
		<title>Password Changing</title>
	</head>
	<body style="background-color:blue">				
	</body>
</html>


<?php
	include "connect.php";
	$id=$_POST['u_id'];
	$oldp=$_POST['oldp'];
	$newp=$_POST['newp'];	
	echo $id."    ".$oldp."      ".$newp."<br>";
	$query= 'select user_id,password from usertable';
	$result = mysqli_query($con , $query);	
	$flag=0;
	while($userids = mysqli_fetch_array($result , MYSQLI_ASSOC))
	{
		if($id==$userids['user_id'])
		{			
		if($oldp==$userids['password'])
		{
			$flag=1;			
		}}

	}
	
	if($flag==1)
	{
		$query1="update usertable set `password`='$newp' where user_id='$id'";
		mysqli_query ( $con , $query1 )or die("couldnt update the info");
	}else
{
echo "Cannot Change!!! ";
}
?>
