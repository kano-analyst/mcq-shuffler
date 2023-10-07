<?php
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
include('../include/dashboard.php');
$id=$_GET['id'];
echo $id;
$query= "SELECT * FROM users WHERE role='lecturer' AND id='$id'";
 $result=$conn->query($query);?>
              <html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>example</title>
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
                    <h1 style="text-align:center" class="page-header">Lecturer Profile</h1>

                </div>
            </div>
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
           
 <form action="../controllers/add_lecturer_handler.php" method="post">
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
</body>
</html>