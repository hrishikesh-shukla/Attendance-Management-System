<!DOCTYPE html>
<html lang="en">
<head>
  <title>AIT: Change Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container" style="margin-top: 20px;">
    <div class="row col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading h1" style="text-align: center; margin-top: 0px;">Change Password</div>
      <div class="panel-body">
        <form method="POST" action="changepassword.php" class="form-group">
          <input type="password" class="form-control" placeholder="Enter your current password:" name="currentpassword"></td><hr>
          <input type="password" class="form-control" placeholder="Enter your new password:" name="newpassword"></td><hr>
          <input type="password" class="form-control" placeholder="Re-enter your new password:" name="confirmnewpassword"><hr>
          <input class="btn btn-default" type="submit" name="submit" value="Update Password">
          <button class="btn btn-default" type="button" onclick="javascript:history.back()">Cancel</button>
       </form>
      </div>
    </div>
  </div>
</body>
</html>
<?php
  session_start();
  include_once 'dbh.inc.php';
  if (empty($_SESSION['username'])) {
    header('Location: ../login.php');
  }
  if (isset($_POST['submit'])) {
    $username = $_SESSION['username'];
    $q1 = "SELECT * FROM students WHERE enrollment = '$username';";
    $c1 = mysqli_query($con, $q1);
    $q2 = "SELECT * FROM teachers WHERE username = '$username';";
    $c2 = mysqli_query($con, $q2);
    $q3 = "SELECT * FROM admin WHERE username = '$username';";
    $c3 = mysqli_query($con, $q3);
    $st = mysqli_fetch_assoc($c1);
    $tc = mysqli_fetch_assoc($c2);
    $ad = mysqli_fetch_assoc($c3);

    if ($username == $st['enrollment']) {
      $currentpassword = $_POST['currentpassword'];
      $newpassword = $_POST['newpassword'];
      $confirmnewpassword = $_POST['confirmnewpassword'];
      $currentpassworddb = $st['password'];
      //chk pwd
      if ($currentpassword == $currentpassworddb) {
        //chk new pwd
        if ($newpassword == $confirmnewpassword) {
          $query = "UPDATE students SET password = '$newpassword' WHERE enrollment = '$username'";
          $querychange = mysqli_query($con, $query);
          echo "success! your password has been changed.";
          echo "<a href='../student-panel.php'>Go back to panel</a>";
        }else{
          die("New Password doesn't match!");
        }
      }else{
        die("current password doesn't match");
      }
    }

    elseif ($username == $tc['username']) {
      $currentpassword = $_POST['currentpassword'];
      $newpassword = $_POST['newpassword'];
      $confirmnewpassword = $_POST['confirmnewpassword'];
      $currentpassworddb = $tc['password'];
      //chk pwd
      if ($currentpassword == $currentpassworddb) {
        //chk new pwd
        if ($newpassword == $confirmnewpassword) {
          $query = "UPDATE teachers SET password = '$newpassword' WHERE username = '$username'";
          $querychange = mysqli_query($con, $query);
          echo "success! your password has been changed.";
          echo "<a href='../teacher-panel.php'>Go back to panel</a>";
        }else{
          die("New Password doesn't match!");
        }
      }else{
        die("current password doesn't match");
      }
    }

    elseif ($username == $ad['username']) {
      $currentpassword = $_POST['currentpassword'];
      $newpassword = $_POST['newpassword'];
      $confirmnewpassword = $_POST['confirmnewpassword'];
      $currentpassworddb = $ad['password'];
      //chk pwd
      if ($currentpassword == $currentpassworddb) {
        //chk new pwd
        if ($newpassword == $confirmnewpassword) {
          $query = "UPDATE admin SET password = '$newpassword' WHERE username = '$username'";
          $querychange = mysqli_query($con, $query);
          echo "success! your password has been changed.";
          echo "<a href='../admin-panel.php'>Go back to panel</a>";
        }else{
          die("New Password doesn't match!");
        }
      }else{
        die("current password doesn't match");
      }
    }
  }
?>