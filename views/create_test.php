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
                    <h2 class="page-header" style="text-align:center;">Create New Test</h2>
                </div>
            </div>
<button style="position:center" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">New Test</button>

            

        </div>
    </div>
<!--END OF DOCUMENT-->
<!-- Modal View -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"style="text-align:center;" id="myModalLabel">Create New Test</h4>
      </div>
      <div class="modal-body">
      <form action="../controllers/create_test_controller.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">School Name</label>
    <input type="text" class="form-control" name="school" placeholder="School" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Department</label>
    <input type="text" class="form-control" name="department" placeholder="Department" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Course Title</label>
    <input type="text" class="form-control" name="course" placeholder="Course Name" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Course Code</label>
    <input type="text" class="form-control" name="code" placeholder="Course Code" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Semester/Type/Session(E.g 1st Semester 2019/20 Session Examinations)</label>
    <input type="text" class="form-control" name="details" placeholder="Semester/Type/Session" required>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Duration</label>
    <input type="text" class="form-control" name="duration" placeholder="Test Duration" required>
  </div>  <div class="form-group">
    <label for="exampleInputEmail1">Date for Test</label>
    <input type="date" class="form-control" name="date" placeholder="0000-00-00" required>
  </div> 
   <div class="form-group">
    <label>Instructions</label>
    <input type="text" class="form-control" name="instruction" placeholder="Instruction" required>
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