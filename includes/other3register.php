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
</head>
<body>
	<div class="main">
		<div class="nav">
			<button class="tablink" onclick="openPage('register',this, 'black')" id="defaultOpen">Register</button>
			<button class="tablink" onclick="openPage('remove',this, 'black')">Remove</button>
			<button class="tablink" onclick="openPage('edit',this, 'black')">Edit</button>
			<button class="tablink" onclick="openPage('report',this, 'black')">Report</button>
			<button class="tablink" onclick="openPage('Database',this, 'black')">Database</button>
			<a href="includes/logout.inc.php">Log Out</a>
		</div>
		<div class="tabcontent" id="register">
			<div class="form">
				<ul class="tab-group">
					<li class="tab active"><a href="#teacher">Teacher</a></li>
					<li class="tab"><a href="#student">Student</a></li>
				</ul>
				<div class="tab-content">
					<div id="teacher">
						<h1>Register A Teacher</h1>
						<form action="admin-panel.php" method="post">
							<div class="top-row">
								<div class="field-wrap">
									<label>
										First Name<span class="req">*</span>
									</label>
									<input type="text" name="fname" required autocomplete="off" />
								</div>
								<div class="field-wrap">
									<label>
										Last Name<span class="req">*</span>
									</label>
									<input type="text" name="lname" required autocomplete="off"/>
								</div>
							</div>
							<div class="top-row">
								<div class="field-wrap">
									<label>
										<!-- Course:<span class="req">*</span> -->
									</label>
									<select name="course">
										<option>---Select Course---</option>
										<option value="BCA">BCA</option>
										<option value="BVOC">BVOC</option>
									</select>
									<!-- <input type="text" name="username" required autocomplete="off"/> -->
								</div>
								<div class="field-wrap">
									<label>
										<!-- Course:<span class="req">*</span> -->
									</label>
									<select name="semester">
										<option>---Select Semester---</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
									<!-- <input type="text" name="username" required autocomplete="off"/> -->
								</div>
								<div class="field-wrap">
									<label>
										Email Address<span class="req">*</span>
									</label>
									<input type="email" name="email" required autocomplete="off"/>
								</div>
							</div>
							<div class="top-row">
								<div class="field-wrap">
									<label>
										Username<span class="req">*</span>
									</label>
									<input type="text" name="username" required autocomplete="off"/>
								</div>
								<div class="field-wrap">
									<label>
										Password<span class="req">*</span>
									</label>
									<input type="password" name="password_1" required autocomplete="off"/>
								</div>
							</div>
							<button type="submit" name="teacher-register" class="button button-block"/>REGISTER</button>
							<!-- <button type="submit" class="button button-block"/>Register an Admin</button> -->
							<!-- <a style="color: white; text-align: center;" href="#" class="button button-block" onclick="MyWindow=window.open('addadmin.php','MyWindow',width='600',height='300'); return false;">Register an Admin</a> -->
						</form>
					</div>
					<div id="student">
						<h1>Register A Student</h1>
						<form action="admin-panel.php" method="post">
							<div class="top-row">
								<div class="field-wrap">
									<label>
										First Name<span class="req">*</span>
									</label>
									<input type="text" name="fname" required autocomplete="off" />
								</div>
								<div class="field-wrap">
									<label>
										Last Name<span class="req">*</span>
									</label>
									<input type="text" name="lname" required autocomplete="off"/>
								</div>
							</div>
							<div class="top-row">
								<div class="field-wrap">
									<label>
										<!-- Course:<span class="req">*</span> -->
									</label>
									<select name="course">
										<option>---Select Course---</option>
										<option value="BCA">BCA</option>
										<option value="BVOC">BVOC</option>
									</select>
									<!-- <input type="text" name="enrollment" required autocomplete="off"/> -->
								</div>
								<div class="field-wrap">
									<label>
										<!-- Course:<span class="req">*</span> -->
									</label>
									<select name="semester">
										<option>---Select Semester---</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
									</select>
									<!-- <input type="text" name="username" required autocomplete="off"/> -->
								</div>
								<div class="field-wrap">
									<label>
										Email Address<span class="req">*</span>
									</label>
									<input type="email" name="email" required autocomplete="off"/>
								</div>
							</div>
							<div class="top-row">
								<div class="field-wrap">
									<label>
										Enrollment  No.<span class="req">*</span>
									</label>
									<input type="text" name="enrollment" required autocomplete="off"/>
								</div>
								<div class="field-wrap">
									<label>
										Create a Password<span class="req">*</span>
									</label>
									<input type="password" name="password_1" required autocomplete="off"/>
								</div>
							</div>
							<button type="submit" name="student-register" class="button button-block"/>REGISTER</button>
							<!-- <button type="submit" class="button button-block"/>Register an Admin</button> -->
							<!-- <a style="color: white; text-align: center;" href="#" class="button button-block" onclick="MyWindow=window.open('addadmin.php','MyWindow',width='600',height='300'); return false;">Register an Admin</a> -->
						</form>
					</div>
				</div><!-- tab-content -->
			</div> <!-- /form -->
		</div>
		<div class="tabcontent" id="remove">
			<p>check remove</p>
		</div>
		<div class="tabcontent" id="edit">
			<p>check editTable</p>
		</div>
		<div class="tabcontent" id="report">
			<p>check reportTable</p>
		</div>
		<div class="tabcontent" id="Database">
			<p>check editDatabase</p>
		</div>
	</div>

	<!-- scripts -->
	<script>
		function openPage(pageName,elmnt,color) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablink");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].style.backgroundColor = "";
		  }
		  document.getElementById(pageName).style.display = "block";
		  elmnt.style.backgroundColor = color;
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="scripts/script.js"></script>
</body>
</html>