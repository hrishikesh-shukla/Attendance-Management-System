<?php
include 'includes/login.inc.php'; 
if (empty($_SESSION['username'])) {
   header('location: login.php');
   exit();
 } 
include 'includes/signup.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>AIT: Admin Panel</title>
	<meta name="viewport" content="width=device-width, inital-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/admin-register.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<script src="https://kit.fontawesome.com/5aec732b4f.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="color: white; cursor: context-menu;">Hello admin!</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a data-toggle="tab" href="#register">Register</a></li>
					<li><a data-toggle="tab" href="#update">Update</a></li>
					<li ><a href="includes/changepassword.php"><span class="glyphicon glyphicon-edit"></span>&nbsp;Change Password</a></li>
					<li><a href="includes/logout.inc.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
				</ul>
			</div>
		</nav>
		<div class="tab-content">
			<div id="register" class="tab-pane fade in active">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 form">
							<h2 style="text-align: center;">Teacher Registration</h2>
							<form action="admin-panel.php" method="post">
								<input type="text" name="fname" class="form-control" placeholder="First Name" required autocomplete="off"/>
								<input type="text" name="lname" class="form-control" placeholder="Last Name" required autocomplete="off"/>
								<select name="course" class="form-control">
									<option>---Select Course---</option>
									<option value="BCA">BCA</option>
									<option value="BVOC">BVOC</option>
								</select>
								<select name="semester" class="form-control">
									<option>---Select Semester---</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
								<input type="email" class="form-control" name="email" placeholder="Email ID" required autocomplete="off"/>
								<input type="text" class="form-control" name="username" placeholder="Choose username" required autocomplete="off"/>
								<input type="password" class="form-control" name="password_1" placeholder="Choose Password" required autocomplete="off"/>
								<button type="submit" class="btn2" style="padding: 5px; margin: 0px 10px; text-align: center; position: absolute;" name="teacher-register" class="button"/>REGISTER</button>
							</form>
						</div>
						<div class="col-md-6">
							<h2 style="text-align: center;">Student Registration</h2>
							<form action="admin-panel.php" method="post">
								<input type="text" name="fname" class="form-control" placeholder="First Name" required autocomplete="off"/>
								<input type="text" name="lname" class="form-control" placeholder="Last Name" required autocomplete="off"/>
								<select name="course" class="form-control">
									<option>---Select Course---</option>
									<option value="BCA">BCA</option>
									<option value="BVOC">BVOC</option>
								</select>
								<select name="semester" class="form-control">
									<option>---Select Semester---</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
								<input type="email" class="form-control" name="email" placeholder="Email ID" required autocomplete="off"/>
								<input type="text" class="form-control" name="enrollment" placeholder="Enrollment Number" required autocomplete="off"/>
								<input type="password" class="form-control" name="password_1" placeholder="Choose Password" required autocomplete="off"/>
								<button type="submit" name="student-register" class="btn2" style="padding: 5px; margin: 0px 10px; text-align: center; position: absolute;"/>REGISTER</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="update" class="tab-pane fade">
				<div class="container-fluid">
				  <ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#student">Student</a></li>
				    <li><a data-toggle="tab" href="#teacher">Teacher</a></li>
				  </ul>
				  <div class="tab-content">
				    <div id="student" class="tab-pane fade in active">
				    	<table border="2" class="table table-bordered">
							<thead>
								<tr>
								  <th>First Name</th>
							      <th>Last Name</th>
							      <th>Course</th>
							      <th>Semester</th>
							      <th>Email</th>
							      <th colspan="2">Enrollment</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$query = "SELECT * From students";
								$queryCon = mysqli_query($con, $query);
								// $details = mysqli_fetch_assoc($queryCon);
								if (mysqli_num_rows($queryCon) > 0) {
									while($row = mysqli_fetch_assoc($queryCon)){
										echo "<tr><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['course']}</td><td>{$row['semester']}</td><td>{$row['email']}</td><td>{$row['enrollment']}</td><td><a href='supdate.php?fn=$row[fname]&ln=$row[lname]&course=$row[course]&sem=$row[semester]&mail=$row[email]&en=$row[enrollment]'>Edit</a></td></tr>\n"; 
									}
								}else{
									echo "error is =>".mysqli_error($con);
								}
							    ?>
							</tbody>
						</table>
				    </div>
				    <div id="teacher" class="tab-pane fade">
				    	<table border="2" class="table table-bordered">
							<thead>
								<tr>
								  <th>First Name</th>
							      <th>Last Name</th>
							      <th>Course</th>
							      <th>Semester</th>
							      <th>Email</th>
							      <th colspan="2">Username</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$query = "SELECT * From teachers";
								$queryCon = mysqli_query($con, $query);
								// $details = mysqli_fetch_assoc($queryCon);
								if (mysqli_num_rows($queryCon) > 0) {
									while($row = mysqli_fetch_assoc($queryCon)){
										echo "<tr><td>{$row['fname']}</td><td>{$row['lname']}</td><td>{$row['course']}</td><td>{$row['semester']}</td><td>{$row['email']}</td><td>{$row['username']}</td><td><a href='tupdate.php?fn=$row[fname]&ln=$row[lname]&course=$row[course]&sem=$row[semester]&mail=$row[email]&un=$row[username]'>Edit</a></td></tr>\n"; 
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
			</div>
		</div>
	</div>

	<!-- scripts -->
<!-- 	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="scripts/script.js"></script> -->
</body>
</html>