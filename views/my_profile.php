<?PHP 
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
include('../include/dashboard.php');
$name=$_SESSION['name'];
$query= "SELECT * FROM users WHERE name='$name'";
 $result=$conn->query($query);?>
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
                    <h3 class="page-header" style="text-align:center;">My Profile</h3>
                       </div>
            </div>
            <button style="position:center" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Change Password</button>
            <?php
                if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
           $name= $row['name'];
           $username= $row['username'];
           $staff_id= $row['staff_id'];
           $department= $row['department'];
           $faculty= $row['faculty'];

            }
        }?>
           
 <form action="../controllers/change_password_handler.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $name;?>"placeholder="Name" disabled>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">User-Name</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1"value="<?php echo $username;?>" placeholder="User-Name" disabled>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Staff I.D</label>
    <input type="text" class="form-control" name="staff_id" id="exampleInputEmail1"value="<?php echo $staff_id;?>" placeholder="Staff I.D"disabled>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Department</label>
    <input type="text" class="form-control" name="department"id="exampleInputEmail1" value="<?php echo $department;?>" placeholder="department" disabled>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Faculty</label>
    <input type="text" class="form-control" name="faculty" id="exampleInputEmail1" value="<?php echo $faculty;?>" placeholder="Faculty"disabled >
  </div>
 
</form>

 
  </div>
  </div>
 <!-- Modal View -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"style="text-align:center;" id="myModalLabel">Change Password</h4>
      </div>
      <div class="modal-body">
      <form action="../controllers/change_password_handler.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Old Password</label>
    <input type="password" class="form-control" name="old-password" placeholder="Enter Current Password" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">New Password</label>
    <input type="password" class="form-control" name="new-password" placeholder="Enter New Password" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Repeat New Password</label>
    <input type="password" class="form-control" name="new-password" placeholder="Repeat New Password" required>
  </div>
  

 <button type="submit"  class="btn btn-primary">Save changes</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
  
</form>
      </div>
      
    </div>
  </div>
</div>
<!--End of Modal View -->

    </body>

</html> 