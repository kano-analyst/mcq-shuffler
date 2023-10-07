<?PHP 
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
include('../include/dashboard.php');
$old_pswrd=$_POST['old-password'];
$new_pswrd=$_POST['new-password'];
$name=$_SESSION['name'];
$query= "UPDATE `users` SET `password`='$new_pswrd' WHERE `name`='$name' AND `password`='$old_pswrd'";
 ?>
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- My Style CSS    -->
    <link href="../css/bootstrap.css" rel="stylesheet" />
   
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
<?php
            if($conn->query($query)){
                echo '<h4 style="text-align:center">Your Password has been successfully changed</h4>';
            }else{
                echo '<h4 style="text-align:center">There is an <b>error</b> in changing your Password </h4>';
            }
      ?>  </div>
    </div>
    </body>
 </html>   