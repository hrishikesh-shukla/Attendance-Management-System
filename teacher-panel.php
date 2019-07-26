<?php
include 'includes/login.inc.php'; 
if (empty($_SESSION['username'])) {
	header('location: login.php');
	exit();
} 
include 'includes/signup.inc.php';
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>AIT: Teacher Panel</title>
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="color: white; cursor: context-menu;"><?php echo $_SESSION['username']; ?></a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a data-toggle="tab" href="#tattendance">Take Attendance</a></li>
					<li><a data-toggle="tab" href="#vattendance">View Attendance</a></li>
					<li ><a href="includes/changepassword.php"><span class="glyphicon glyphicon-edit"></span>&nbsp;Change Password</a></li>
					<li ><a href="includes/logout.inc.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
				</ul>
			</div>
		</nav>
		<center>
			<?php 
			$fetchName = "SELECT fname FROM `teachers` WHERE username='$username'";
			$fetchNameCon = mysqli_query($con,$fetchName);
			if( mysqli_num_rows( $fetchNameCon ) > 0 ){
				while( $row = mysqli_fetch_assoc($fetchNameCon) ){
					$name_array = implode(',', $row);
				}
			}
			?>
			<h3 style="display: inline;" id="greeting"></h3>
			<h2 style="display: inline;"><?php echo $name_array; ?></h2><br>
			<?php echo "Today is ".date('d/m/y'); ?><br>
			<hr style="margin: 10px  auto; width: 25%; ">
			<?php
			date_default_timezone_set('Asia/Kolkata');
			$date = date("d/m/y");
			$date2 = date('d,M');
			$fetchCourse = "SELECT course FROM `teachers` WHERE username='$username'";
			$course = mysqli_query($con,$fetchCourse);
			if( mysqli_num_rows( $course ) > 0 ){
				while( $row = mysqli_fetch_assoc($course) ){
					$course_array = implode(',', $row);
				}
			}
			$fetchSem = "SELECT semester FROM `teachers` WHERE username='$username'";
			$sem = mysqli_query($con,$fetchSem);
			if( mysqli_num_rows( $sem ) > 0 ){
				while( $row = mysqli_fetch_assoc($sem) ){
					$sem_array = implode(',', $row);
				}
			}
			?>
		</center>
		<div class="tab-content">
			<div id="tattendance" class="tab-pane fade in active">
				<center>
					<p style="text-decoration: underline;">TAKE &nbsp;<?php echo $date2; ?>&nbsp; ATTENDANCE</p>
					<p>course: <?php echo $course_array; ?> </p>
					<p>semster: <?php echo $sem_array; ?> </p>
				</center>
				<center>
					<form action="includes/markAttendance.inc.php" method="post">
						<table border="2" class="table table-striped" style="width: 60%;">
							<thead>
								<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Course</th>
									<th>Enrollment</th>
									<th>Attendance</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$query = "SELECT * FROM `students` WHERE course = '$course_array' AND semester = $sem_array";
								$selectCourseSem = mysqli_query($con,$query);
								if (mysqli_num_rows($selectCourseSem) > 0) {
									while( $row = mysqli_fetch_assoc( $selectCourseSem ) ){
										?>
										<input type='hidden' name='rollNos[<?php echo $row["enrollment"] ?>]' value='<?php echo $row["enrollment"] ?>'>
										<?php
										echo "<tr><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['course']}</td><td>{$row['enrollment']}</td><td>";
										?>
										<input type='radio' name='attendance[<?php echo $row["enrollment"] ?>]' value='P'> present
										<input type='radio' name='attendance[<?php echo $row["enrollment"] ?>]' value='A'> Absent
										<?php echo "</td></tr>\n"; 
									}
								}
								?>
							</tbody>
						</table>
						<input style="margin-bottom: 40px;" class="btn btn-default" type="submit" name="save">
					</form>
				</center>
			</div>
			<div id="vattendance" class="tab-pane fade">
				<center>
					<p style="text-decoration: underline;">VIEW &nbsp;<?php echo $date2; ?>&nbsp; ATTENDANCE</p>
					<p>course: <?php echo $course_array; ?> </p>
					<p>semster: <?php echo $sem_array; ?> </p>
				</center>
				<center>
					<table border="2" class="table table-striped" style="width: 60%;">
						<thead>
							<tr>
								<th>Date</th>
								<th>Enrollment</th>
								<th>Attendance</th>
							</tr>
						</thead>
						<tbody>
						  <?php
							$aquery="SELECT * FROM markAttendance WHERE markedBy='$name_array'";
							$aquerycon = mysqli_query($con, $aquery);
							if (mysqli_num_rows($aquerycon) > 0) {
								while( $row = mysqli_fetch_assoc( $aquerycon ) ){
									echo "<tr><td>{$row['date']}</td><td>{$row['enrollment']}</td><td>{$row['attendance']}</td></tr>\n"; 
								}
							}else{
								echo mysqli_error($con);
							}
						  ?>
						</tbody>
					</table>
				</center>
			</div>
		</div>
	</div>
	<!-- scripts -->
	<script src="scripts/greetings.js"></script>
</body>
</html>