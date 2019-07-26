<!DOCTYPE html>
<html>
<head>
	<title>AIT: Mark Attendance</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	include 'dbh.inc.php'; 
	include 'login.inc.php'; 
	if (empty($_SESSION['username'])) {
		header('location: login.php');
		exit();
	}
	$username = $_SESSION['username'];
	$fetchName = "SELECT fname FROM `teachers` WHERE username='$username'";
	$fetchNameCon = mysqli_query($con,$fetchName);
	if( mysqli_num_rows( $fetchNameCon ) > 0 ){
		while( $row = mysqli_fetch_assoc($fetchNameCon) ){
			$name_array = implode(',', $row);
		}
	}
 if(isset($_POST['save'])) {
 	// echo $_POST['rollNo'];
 	// echo $_POST['1'];

 	echo "Page will redirect to teacher-panel in 5 sec...<BR>";
 	echo $name_array;

 	date_default_timezone_set('Asia/Kolkata');
	$date = date('d-m-Y');
	echo $date . '<br>';

 	$rollNos = $_POST['rollNos'];
 	$attendace = $_POST['attendance'];

 	foreach ( $attendace as $rollNo => $attendace_status ) {
 		// echo $attendace_status;
 		// echo '<br>';
 		echo $rollNo . ' => ' . $attendace_status;
 		echo '<br>';
 		$query = "INSERT INTO `markAttendance`(`date`, `enrollment`, `markedBy`, `attendance`) VALUES ('$date','$rollNo','$name_array','$attendace_status')";
 		if (mysqli_query($con,$query)) {
 			echo "INSERTED.<br>";
 			// echo "<a href='../teacher-panel.php'>Go Back</a>";
 			header("refresh:5, url=../teacher-panel.php");
 		}else{
 			echo "fail";
 			header("refresh:5, url=../teacher-panel.php");
 		}
 	}
 }
?>
</body>
</html>