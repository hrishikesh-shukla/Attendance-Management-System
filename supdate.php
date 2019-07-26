<?php 
include 'includes/dbh.inc.php';
error_reporting(0);
$_GET['fn'];
$_GET['ln'];
$_GET['course'];
$_GET['sem'];
$_GET['mail'];
$_GET['en'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>AIT: update details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<h2 style="text-decoration: underline; text-align: center;">Update Details</h3>
	<form action="supdate.php" method="GET" class="form col-md-12">
	<input type="text" name="firstname" class="form-control" value="<?php echo $_GET['fn']; ?>" placeholder="First Name" required autocomplete="off"/><br>
	<input type="text" name="lastname" class="form-control" value="<?php echo $_GET['ln']; ?>" placeholder="Last Name" required autocomplete="off"/><br>
	<select name="courses" class="form-control">
		<option>---Select Course---</option>
		<option value="BCA">BCA</option>
		<option value="BVOC">BVOC</option>
	</select><br>
	<select name="semesters" class="form-control">
		<option>---Select Semester---</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select><br>
	<input type="emailid" class="form-control" name="emailid" value="<?php echo $_GET['mail']; ?>" placeholder="Email ID" required autocomplete="off"/><br>
	<input style="cursor: not-allowed; pointer-events: none;" type="text" class="form-control" name="enrollmentno" value="<?php echo $_GET['en']; ?>" placeholder="Enrollment Number" required autocomplete="off"/><br>
	<input class="btn btn-default" type="submit" name="submit" value="Update">
	<a href="admin-panel.php" class="btn btn-default">Go Back</a>
	</form>
	<?php 
	if (isset($_GET['submit'])) {
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$courses = $_GET['courses'];
	$semesters = $_GET['semesters'];
	$emailid = $_GET['emailid'];
	$enrollmentno = $_GET['enrollmentno'];
	$query = "UPDATE `students` SET `fname`='$firstname',`lname`='$lastname',`course`='$courses',`semester`='$semesters',`email`='$emailid' WHERE`enrollment`='$enrollmentno'";
	$queryCon = mysqli_query($con, $query);
		if ($queryCon) {
			echo "updated successfully!";
			header("refresh:2, url=admin-panel.php");
		}else{
			echo "failed ".mysqli_error($con);
		}
	}
	?>
</body>
</html>