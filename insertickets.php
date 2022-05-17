<?php
	include ('dbconnect.php');
	if (session_status() === PHP_SESSION_NONE) {
		session_start();
	}
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$concertID = intval($_REQUEST['concert_ID']);
	$ticketseat = $_REQUEST['ticket_seat'];
	$ticketprice = floatval($_REQUEST['ticket_price']);

	echo $concertdate . " " . $concertname . " " . $concertloc;
//floatval($var)
//intval($var)
	if(isset($_POST['submit'])){
		$stmt = "INSERT INTO `tickets`(`concert_ID`, `ticket_seat`, `ticket_price`) VALUES ('$concertID','$ticketseat','$ticketprice')";
		mysqli_query($conn, $stmt);
	}

	header("Location: adminportal.php");
	mysqli_close($conn);
?>