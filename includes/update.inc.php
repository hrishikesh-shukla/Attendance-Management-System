<?php 
if (isset($_GET['submit'])) {
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$courses = $_GET['courses'];
	$semesters = $_GET['semesters'];
	$emailid = $_GET['emailid'];
	$enrollmentno = $_GET['enrollmentno'];
	$query = "UPDATE students SET fname='$firstname', lname='$lastname', course='$courses', semester='$semester', email='$emailid' WHERE enrollment='$enrollmentno'";
	$queryCon = mysqli_query($con, $query);
	if ($queryCon) {
		echo "updated successfully!";
	}else{
		echo "failed".mysqli_error($con);
	}
}
?>