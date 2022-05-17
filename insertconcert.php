<?php
	include ('dbconnect.php');
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	
	
	$concertdate = $_REQUEST['concert_date'];
	$concertname = $_REQUEST['concert_name'];
	$concertloc = $_REQUEST['concert_loc'];

	if(isset($_POST['submit'])){
		$stmt = "INSERT INTO `concert`(`concert_date`, `concert_name`, `concert_loc`) VALUES ('$concertdate', '$concertname', '$concertloc')";
		mysqli_query($conn, $stmt);
	}

	header("Location: adminportal.php");
	mysqli_close($conn);
?>