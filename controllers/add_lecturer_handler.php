<?php 
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
include('../include/dashboard.php');
$name=$_POST['name'];
$username=$_POST['username'];
$department=$_POST['department'];
$faculty=$_POST['faculty'];
$staff_id=$_POST['staff_id'];
$password=$_POST['password'];

$query="INSERT INTO `users`(`name`, `staff_id`, `username`, `password`, `department`, `faculty`,`role`) 
VALUES ('$name','$staff_id','$username','$password','$department','$faculty','lecturer') ";
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
  <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
  <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header" style="text-align:center;">Status</h3>
                       </div>
            </div>
   <?php   if (mysqli_query($conn, $query)) {
               echo '<h4 style="text-align: center;">Lecturer Account Created Successfully</h4>';
                echo '<h5 style="text-align: center;">Click <a href="../views/view_lecturers.php" >Here</a> to View All Lecturers</h5>';
          
                } 
                else {
            echo '<h5 style="text-align: center;">There is an error in Creating The Lecturer Account Click <a href="../views/add_lecturer.php">Here</a> To Add The Lecturer Again</h5>';
                echo "Error: " . $query . "<br>" . $conn->error;      }
          
           ?> 
           </div>
           </div>
</body>
</html>