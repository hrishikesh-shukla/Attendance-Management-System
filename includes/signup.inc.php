<?php
	$con = mysqli_connect('localhost', 'root', '', 'attendance');
	$errors = array();

	// Register Admin
	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($con,$_POST['username']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password_1 = mysqli_real_escape_string($con,$_POST['psw']);
		$password_2 = mysqli_real_escape_string($con,$_POST['psw-repeat']);
		$sql = "INSERT INTO `admin`(`username`, `email`, `password`) VALUES ('$username','$email','$password_1')";
		mysqli_query($con,$sql);
		echo "Registered"."<BR>";
		echo "closing window in 2 seconds...";
		echo "<script>setTimeout('window.close();', 2000);</script>";
		}

	// Register Teacher
	if (isset($_POST['teacher-register'])) {
		$fname = mysqli_real_escape_string($con,$_POST['fname']);
		$lname = mysqli_real_escape_string($con,$_POST['lname']);
		$course = mysqli_real_escape_string($con,$_POST['course']);
		$semester = mysqli_real_escape_string($con,$_POST['semester']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$username = mysqli_real_escape_string($con,$_POST['username']);
		$password_1 = mysqli_real_escape_string($con,$_POST['password_1']);
		$sql = "INSERT INTO `teachers`(`fname`, `lname`, `course`, `semester`, `email`, `username`, `password`) VALUES ('$fname','$lname','$course','$semester','$email','$username','$password_1')";
		if(mysqli_query($con,$sql)){
			header('location: ./admin-panel.php?success=1');
		} else{
			header('location: ./admin-panel.php?error=ivalid');
		}
	}

	// Register Student
	if (isset($_POST['student-register'])) {
		$fname = mysqli_real_escape_string($con,$_POST['fname']);
		$lname = mysqli_real_escape_string($con,$_POST['lname']);
		$course = mysqli_real_escape_string($con,$_POST['course']);
		$semester = mysqli_real_escape_string($con,$_POST['semester']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$enrollment = mysqli_real_escape_string($con,$_POST['enrollment']);
		$password_1 = mysqli_real_escape_string($con,$_POST['password_1']);
		$sql1 = "INSERT INTO `students`(`fname`, `lname`, `course`, `semester`, `email`, `enrollment`, `password`) VALUES ('$fname','$lname','$course','$semester','$email','$enrollment','$password_1')";
		// $sql2 = "INSERT INTO `attendance`(`fname`, `lname`, `course`, `semester`, `enrollment`) VALUES ('$fname','$lname','$course','$semester','$enrollment')";
		if(mysqli_query($con,$sql1) /*AND mysqli_query($con,$sql2)*/){
			header('location: ./admin-panel.php?success=1');
		} else{
			header('location: ./admin-panel.php?error=ivalid');
		}
	}