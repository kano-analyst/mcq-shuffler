<?PHP 
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
include('../include/lecturer_dashboard.php');
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <script src="../js/bootstrap.js"></script>
</head>
<body>
  <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header" style="text-align:center;">All Created Test</h3>
                    <p>All created tests are listed here. Click view to VIEW individual tests and DELETE to delete </p>	  
                </div>
            </div>
  
        <div>
        <table class="table table-hover">
        <tr>
        <th>S/N</th>
        <th>Department</th>
        <th>Course</th>
        <th>Code</th>
        <th>Date of Test</th>
        <th>Author</th>
          <!-- <th>Test I.D</th> -->
        <th>Question(s)</th>
        <th>View</th>
        <th>Delete</th>
        </tr>
               
              <?php
              $name=$_SESSION['name'];
                $query= "SELECT * FROM `test` WHERE `author`='$name' ORDER BY id desc";
                $result=$conn->query($query);
                $numbering=1;
                if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
                $code=$row['code'];
                $testId=$row['testId'];
               $query2= "SELECT * FROM `mcq` where `testId`='$testId'";
                $result2=$conn->query($query2);
                $affected=mysqli_num_rows($result2); 
                $url="../controllers/lec_delete_test_handler.php?id=".$testId;
                echo '<tr><td>'.$numbering.'</td><td>'.$row['department'].'</td><td>'.$row['course'].'</td>
                <td>'.$row['code'].'</td><td>'.$row['date'].'</td><td>'.$row['author'].'</td>
                <td>'.$affected.'</td><td><a class="btn btn-default" href="lec_view_test.php?testId='.$testId.'">View</a>
               </td><td><a style="position:center" href="../controllers/lec_delete_test_handler.php?id='.$testId.'"class="btn btn-danger" onclick="ConfirmDelete()" >Delete</a></td>';
                                                echo '</tr>';
                                                $numbering++;
                    
            }
            }
 
                    ?> 
        </table>
        </div>
        </div>
          <script>
             function ConfirmDelete(){
               var x=confirm("Are you sure you want to delete this test?\n  Note that it cannot be undo");
               if(x){
                 return true;
                 //window.location.href= "<?php echo $url?>";
               }else{
                 return false;
               }
             }
             </script>
</div>
        </div>
</body>


</html>