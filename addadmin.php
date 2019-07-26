<?php
include 'includes/signup.inc.php';
include 'includes/login.inc.php'; 
if (empty($_SESSION['username'])) {
   header('location: login.php');
 } ?>
<!DOCTYPE html>
<html>
<title>AIT: Add An Admin</title>
<script type="text/javascript">
  function closeWindow() {
    close();
  }
</script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
  <div>
    <form class="modal-content" action="addadmin.php" method="post">
      <div class="container">
        <h1>Add an Admin</h1>
        <p>Please fill in this form to create an admin account.</p>
        <hr>
        <label for="name"><b>Userame</b></label>
        <input type="text" placeholder="Enter Username" name="username" required autocomplete="off">

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required autocomplete="off">

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required autocomplete="off">

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required autocomplete="off">
        
        <div class="clearfix">
          <button type="button" onclick="closeWindow()" class="cancelbtn">Cancel</button>
          <button type="submit" class="signupbtn" name="register">Sign Up</button>
        </div>
      </div>
    </form>
  </div>
</body>
</html>