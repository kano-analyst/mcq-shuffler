<?PHP 
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
include('../include/dashboard.php');
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Lecturer</title>
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
                    <h3 class="page-header" style="text-align:center;">Add New Lecturer</h3>
                       </div>
            </div>
 
 <form action="../controllers/add_lecturer_handler.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Name" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">User-Name</label>
    <input type="text" class="form-control" name="username" id="exampleInputEmail1"name="" placeholder="User-Name" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Staff I.D</label>
    <input type="text" class="form-control" name="staff_id" id="exampleInputEmail1"name="" placeholder="Staff I.D"required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Department</label>
    <input type="text" class="form-control" name="department"id="exampleInputEmail1"name="" placeholder="department" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Faculty</label>
    <input type="text" class="form-control" name="faculty" id="exampleInputEmail1"name="" placeholder="Faculty" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1"> Repeat Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  </div>
 
    </body>

</html> 