<?php 
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
include('../include/lecturer_dashboard.php');
$rand=rand(1,99);
$school=$_POST['school'];
$department=$_POST['department'];
$course=$_POST['course'];
$code=$_POST['code'];
$duration=$_POST['duration'];
$date=$_POST['date'];
$instruction=$_POST['instruction'];
$author=$_SESSION['name'];
$test_id=$code.'-'.$rand;
  $query="INSERT INTO `test`(`school`, `department`, `course`, `code`, `duration`, `date`, `instructions`, `author`,`testId`) 
  VALUES ('$school','$department','$course','$code','$duration','$date','$instruction','$author','$test_id')";
  //$result=$conn->query($query);
  ?>
  <html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Status</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.css" />
      <script src="../js/bootstrap.js"></script>
  </head>
  <body>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header" style="text-align:center;">Status</h2>
                </div>
            </div>
     <?php
  if (mysqli_query($conn, $query)) {
               echo '<h4 style="text-align: center;">Test Created Successfully</h4>';
                echo '<h5 style="text-align: center;">Click <a href="../views/lec_view_test.php?testId='.$test_id.'">Here</a> to View This Test and Add Questions</h5>';
          
                } 
                else {
            echo '<h5 style="text-align: center;">There is an error in Creating This Test Click <a href="../views/lec_create_test.php">Here</a> To Add The Test Again</h5>';
                echo "Error: " . $query . "<br>" . $conn->error;      }
          
           ?>  
           </div>
           </div>
  </body>
  </html>
