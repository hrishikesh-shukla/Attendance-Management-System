<?php
include 'includes/login.inc.php'; 
if (empty($_SESSION['username'])) {
	header('location: login.php');
	exit();
}
$enroll = $_SESSION['username'];
include 'includes/signup.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>AIT: Student Panel</title>
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
    $queryP = "SELECT COUNT(attendance) as total FROM markAttendance where attendance='P' AND enrollment = $enroll";
    $resultP =  mysqli_query($con, $queryP);
    $queryA = "SELECT COUNT(attendance) as total FROM markAttendance where attendance='A' AND enrollment = $enroll";
    $resultA =  mysqli_query($con, $queryA);
    $dbEnrollQuery = "SELECT * FROM students WHERE enrollment='$enroll'";
    $dbEnrollCon = mysqli_query($con, $dbEnrollQuery);
    $dbEnrollFetch = mysqli_num_rows($dbEnrollCon);
    $date = date('d/m/y');
    $dbDetailsQuery = "SELECT * FROM students WHERE enrollment = $enroll";
    $dbDetailsCon = mysqli_query($con, $dbDetailsQuery);
    $dbDetails = mysqli_fetch_assoc($dbDetailsCon);
    $fname = $dbDetails['fname'];
    $lname = $dbDetails['lname'];
    $name = $fname." ".$lname;
    $present = mysqli_fetch_assoc($resultP);
    $absent = mysqli_fetch_assoc($resultA);
    $total = $present['total']+$absent['total'];?>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#" style="cursor: context-menu; color: white;" id="greeting"></a>
				<a class="navbar-brand" href="#" style="cursor: context-menu; color: white;"><span><?php echo $fname; ?></a></span>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li ><a href="includes/changepassword.php"><span class="glyphicon glyphicon-edit"></span>&nbsp;Change Password</a></li>
				<li ><a href="includes/logout.inc.php"><span  class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading h1" style="text-align: center; margin-top: 0;">
						Detailed Attendance Report
					</div>
					<div class="panel-body h4 table-responsive">
						<table border="2" class="table table-striped">
							<thead>
								<tr>
								  <th>Date</th>
							      <th>Attendance</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$query2 = "SELECT `date`, attendance FROM markAttendance WHERE enrollment=$enroll";
								$atDetails = mysqli_query($con,$query2);
								if (mysqli_num_rows($atDetails) > 0) {
									while($row2 = mysqli_fetch_assoc($atDetails)){
										echo "<tr><td>{$row2['date']}</td><td>{$row2['attendance']}</td></tr>\n"; 
									}
								}else{
									echo "error is =>".mysqli_error($con);
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading h1" style="text-align: center; margin-top: 0;">
						Information
					</div>
					<div class="panel-body h4">
						<?php
						$query1 = "SELECT fname, lname, course, semester FROM students WHERE enrollment=$enroll";
						$stDetailsCon = mysqli_query($con,$query1);
						$stDetails = mysqli_fetch_assoc($stDetailsCon);
						?>
						<div class="container-fluid">
							<div class="col-md-6">
								<label>Name:&nbsp;</label><?php echo $stDetails['fname']." ".$stDetails['lname']; ?>
							</div>
							<div class="col-md-3">
								<label>Course:&nbsp;</label><?php echo $stDetails['course']; ?>
							</div>
							<div class="col-md-3">
								<label>Semester:&nbsp;</label><?php echo $stDetails['semester']; ?>
							</div>
						</div><hr>
						<div class="container-fluid">
				            Total Present: <?php echo $present['total']; ?><br><hr>
				            Total Absent: <?php echo $absent['total']; ?><br><hr>
				            Total Attendance: <?php echo $total; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- scripts -->
	<script src="scripts/greetings.js"></script>
</body>
</html>