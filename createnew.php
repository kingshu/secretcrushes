<?php

	function clean($tmp) {
		$clean = trim($tmp);
		$clean = mysql_real_escape_string($clean);
		if (strlen($clean) < 1) {
			$clean = " ";
		}
		return $clean;
	}

	function TextToDb($tmp) {
		$TextToDb = clean($tmp);
		$pbreak = chr(13) . chr(10);
		$TextToDb = str_replace($pbreak, "<br>", $TextToDb);
		return $TextToDb;
	}
	
	function DbToText($tmp) {
		$DbToText = trim($tmp);
		$pbreak = chr(13) . chr(10);
		$DbToText = str_replace("<br>", $pbreak, $DbToText);
		$DbToText = str_replace("\'", "'", $DbToText);
		$redo = "\\" . chr(34);
		$DbToText = str_replace($redo, chr(34), $DbToText);
		return $DbToText;
	}
	
	$con = mysqli_connect("mysql2.000webhost.com","a1978490_root","PASSWORD_HERE","a1978490_home");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$maintxt = TextToDb(clean($_POST['main']));
	
	$sql="INSERT INTO mainTable (place, main, time) VALUES ('$_POST[place]','$maintxt', now())";

	$p = mysqli_query($con,$sql) or die('Error: ' . mysqli_error($con));
		
	echo "You created a new string!";
	mysqli_close($con);
	
	header("Location: index.php#latest");	
?>
