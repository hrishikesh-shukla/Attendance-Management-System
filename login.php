<?php include 'includes/login.inc.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>AIT - sign in or sign up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://kit.fontawesome.com/5aec732b4f.js"></script>
</head>
<body>
	<form action="includes/fetch.inc.php" method="post" autocomplete="off">
		<div class="fetch-box">
			<input type="text" name="fetch" class="search-text" placeholder="Enrollment Number">
			<a type="submit" href="includes/fetch.inc.php" name="fetch" class="btn-fetch"><i class="fas fa-search"></i></a>
			<!-- <button type="submit" name="submit" class="btn-fetch"><i class="fas fa-search"></i></button> -->
		</div>
	</form>
	<div class="container">
		<div class="buttons">
			<button onclick="sloginon()" type="button" name="login-student" class="btn">Login as student</button>
			<button onclick="tloginon()" type="button" name="login-teacher" class="btn">Login as teacher</button>
			<button onclick="aloginon()" type="button" name="login-admin" class="btn">Login as admin</button><br>
			<!-- <button onclick="forgetpasswordon()"type="button" name="forget-password" class="btn btn2">Forget password?</button> -->
		</div>
	</div>
	
	<!-- Student Login -->
	<div class="overlay" id="slogin">
		<div class="overlay-form">
			<div class="overlay-header">
		      <span onclick="sloginoff()" class="close">&times;</span>
		      <h2>Welcome Back</h2>
		    </div>
		    <div class="overlay-body">
		    	<form method="post" action="login.php" autocomplete="off">
					<input type="text" name="enrollment" placeholder="enrollment">
					<input type="password" name="spassword" placeholder="password">
					<button type="submit" name="slogin">Login</button>
				</form>
    		</div>
		</div>
	</div>
	
	<!-- Teacher Login -->
	<div class="overlay" id="tlogin">
		<div class="overlay-form">
			<div class="overlay-header">
		      <span onclick="tloginoff()" class="close">&times;</span>
		      <h2>Welcome Back</h2>
		    </div>
		    <div class="overlay-body">
		    	<form method="post" action="login.php" autocomplete="off">
					<input type="text" name="tusername" placeholder="username">
					<input type="password" name="tpassword" placeholder="password">
					<button type="submit" name="tlogin">Login</button>
				</form>
    		</div>
		</div>
	</div>
	
	<!-- Admin Login -->
	<div class="overlay" id="alogin">
		<div class="overlay-form">
			<div class="overlay-header">
		      <span onclick="aloginoff()" class="close">&times;</span>
		      <h2>Welcome Back</h2>
		    </div>
		    <div class="overlay-body">
		    	<form method="post" action="login.php" autocomplete="off">
					<input type="text" name="ausername" placeholder="username">
					<input type="password" name="apassword" placeholder="password">
					<button type="submit" name="alogin">Login</button>
				</form>
    		</div>
		</div>
	</div>
	
	<!-- Forget Password -->
	<div class="overlay" id="forgetpassword">
		<div class="overlay-form">
			<div class="overlay-header">
		      <span onclick="forgetpasswordoff()" class="close">&times;</span>
		      <h2>Reset your password</h2>
		      <p>An e-mail will be send to you with instructions</p>
		    </div>
		    <div class="overlay-body">
		    	<form action="includes/reset-request.inc.php" method="post" autocomplete="off">
					<input type="text" name="email" placeholder="type your email id">
					<button type="submit" name="reset-request-submit">Continue</button>
			</form>
    		</div>
		</div>
	</div>

	<!-- Scripts -->
	<script>
		function sloginon() {
			document.getElementById("slogin").style.display="block";
		}
		function sloginoff() {
			document.getElementById("slogin").style.display="none";
		}
		function tloginon() {
			document.getElementById("tlogin").style.display="block";
		}
		function tloginoff() {
			document.getElementById("tlogin").style.display="none";
		}
		function aloginon() {
			document.getElementById("alogin").style.display="block";
		}
		function aloginoff() {
			document.getElementById("alogin").style.display="none";
		}
		function forgetpasswordon() {
			document.getElementById("forgetpassword").style.display="block";
		}
		function forgetpasswordoff() {
			document.getElementById("forgetpassword").style.display="none";
		}
	</script>
</body>
</html>