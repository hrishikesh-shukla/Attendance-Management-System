<?php
	session_start();
	$con = mysqli_connect('localhost', 'root', '', 'attendance');

	// Login Admin
	if (isset($_POST['alogin'])) {
		$username = mysqli_real_escape_string($con,$_POST['ausername']);
		$password = mysqli_real_escape_string($con,$_POST['apassword']);
		$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$result = mysqli_query($con, $query);

		// Error Handler
		if (empty($username) || empty($password)) {
			header('location: ./login.php?error=emptyfields');
			exit();
		}

		if (mysqli_num_rows($result) == 1) {
			//login
			$_SESSION['username'] = $username;
			header('location: ./admin-panel.php'); //redirecting to admin-panel
		}else{
			header('location: ./login.php?error=nouser');
			exit();
		}
	}

	// Login Student
	if (isset($_POST['slogin'])) {
		$enrollment = mysqli_real_escape_string($con,$_POST['enrollment']);
		$password = mysqli_real_escape_string($con,$_POST['spassword']);
		$query = "SELECT * FROM students WHERE enrollment='$enrollment' AND password='$password'";
		$result = mysqli_query($con, $query);
		
		// Error Handler
		if (empty($enrollment) || empty($password)) {
			header('location: ./login.php?error=emptyfields');
			exit();
		}
		
		if (mysqli_num_rows($result) == 1) {
			//login
			$_SESSION['username'] = $enrollment;
			header('location: ./student-panel.php'); //redirecting to student-panel
		}else{
			header('location: ./login.php?error=nouser');
			exit();
		}
	}

	// Login Teacher
	if (isset($_POST['tlogin'])) {
		$username = mysqli_real_escape_string($con,$_POST['tusername']);
		$password = mysqli_real_escape_string($con,$_POST['tpassword']);
		$query = "SELECT * FROM teachers WHERE username='$username' AND password='$password'";
		$query2 = "SELECT course FROM teachers WHERE username='$username'";
		$result = mysqli_query($con, $query);
		$course = mysqli_query($con, $query2);

		if (mysqli_num_rows($result) == 1) {
			//login
			$_SESSION['username'] = $username;
			header('location: ./teacher-panel.php'); //redirecting to teacher-panel
		}else{
			header('location: ./login.php?error=nouser');
			exit();
		}
	}