<!DOCTYPE html>
<html>
<head>
  <title>AIT: Attendance Fetch</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    $enrollment =  $_POST['fetch'];
    require 'dbh.inc.php';
    $queryP = "SELECT COUNT(attendance) as total FROM markAttendance where attendance='P' AND enrollment = $enrollment";
    $resultP =  mysqli_query($con, $queryP);
    $queryA = "SELECT COUNT(attendance) as total FROM markAttendance where attendance='A' AND enrollment = $enrollment";
    $resultA =  mysqli_query($con, $queryA);
    $dbEnrollQuery = "SELECT * FROM students WHERE enrollment='$enrollment'";
    $dbEnrollCon = mysqli_query($con, $dbEnrollQuery);
    $dbEnrollFetch = mysqli_num_rows($dbEnrollCon);
    $date = date('d/m/y');

    $dbDetailsQuery = "SELECT * FROM students WHERE enrollment = $enrollment";
    $dbDetailsCon = mysqli_query($con, $dbDetailsQuery);
    $dbDetails = mysqli_fetch_assoc($dbDetailsCon);
    $fname = $dbDetails['fname'];
    $lname = $dbDetails['lname'];
    $name = $fname." ".$lname;

    // Error Handlers
    if (empty($enrollment)) {
      header('location: ../login.php?error=emptyfield');
      exit();
    }elseif ($dbEnrollFetch < 1) {
      header('location: ../login.php?error=invalidinput');
      exit();
    }

    $present = mysqli_fetch_assoc($resultP);
    $absent = mysqli_fetch_assoc($resultA);
    $total = $present['total']+$absent['total'];
    //typecasting
    // $a=1;
    // $presentINT = $present*$a;
    // $absentINT = $absent*$a;
    // $totalINT = $total*$a;
    // $perc = ($presentINT/$totalINT)*100;
  ?>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="cursor: context-menu; color: white;"><?php echo $enrollment; ?></a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../login.php"><span  class="glyphicon glyphicon-log-out"></span>&nbsp;Go Back</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-6" id="HTMLtoPDF"> 
        <div class="panel panel-default">
          <div class="panel-heading h1" style="text-align: center; margin-top: 0;">
            Attendance Status
          </div>
          <div class="panel-body h3">
            <div class="col-md-12">
            Name: <?php echo $name;?><br><hr>
            </div>
            <div class="col-md-6">
              Course: <?php echo $dbDetails['course']; ?><br><hr>
              Total Present: <?php echo $present['total']; ?><br><hr>
            </div>
            <div class="col-md-6">
              Semester: <?php echo $dbDetails['semester']; ?><br><hr>
              Total Absent: <?php echo $absent['total']; ?><br><hr>
            </div>
            <div class="col-md-12">
              Total Attendance: <?php echo $total; ?><hr>
            </div>
            <div class="col-md-12">
              Attendance %: <?php echo 'NULL'; ?><hr>
            </div>
            <div class="col-md-12">
              Date upto: <?php echo $date; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6"> 
        <div class="panel panel-default">
          <div class="panel-heading h1" style="text-align: center; margin-top: 0;">
            Actions
          </div>
          <div class="panel-body h3">
            <a href="../login.php" class="btn btn-default btn-lg btn-block">Student Login</a><br>
            <a href="../login.php" class="btn btn-default btn-lg btn-block">Teacher Login</a><br>
            <a href="../login.php" class="btn btn-default btn-lg btn-block">Admin Login</a><br>
            <button onclick="printdetails()" class="btn btn-default btn-lg btn-block">Print Details</button><br>
            <button onclick="HTMLtoPDF()" class="btn btn-default btn-lg btn-block">Export Details</button><br>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <script>
    function printdetails() {
      var restorePage = document.body.innerHTML;
      var printContent = document.getElementById('HTMLtoPDF').innerHTML;
      document.body.innerHTML = printContent;
      window.print();
      document.body.innerHTML = restorePage;
    }
  </script>
  <script src="../scripts/jspdf.js"></script>
  <script src="../scripts/jquery-2.1.3.js"></script>
  <script src="../scripts/pdfFromHTML.js"></script>
</body>
</html>