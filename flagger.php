<?php
	$con = mysqli_connect("mysql2.000webhost.com","a1978490_root","k9is1337!","a1978490_home");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


$sql="UPDATE mainTable SET flags=(flags+1) where id='".$_POST['id']."'";

	$p = mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
		
	echo "You created a new string!";
	mysqli_close($con);
	
	header("Location: index.php#latest");	
?>
