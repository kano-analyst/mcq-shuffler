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
    <title>All Lecturers</title>
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
                    <p>All Department Lecturers are Listed here</p>	  
                </div>
            </div>
  
        <div>
        <table class="table table-hover">
        <tr>
        <th>S/N</th>
        <th>Name</th>
        <th>Staff I.D</th>
        <th>Username</th>
        <th>Department</th>
        <th>Faculty</th>
        <th>Account Status</th>
         <th>View</th>
          <th>Activate/Deact</th>
           <th>Delete Account</th>
        </tr>
               
              <?php
                $query= "SELECT * FROM `users` where `role`='lecturer' ORDER BY id desc";
                $result=$conn->query($query);
                $numbering=1;
                if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
        $status=$row['status'];
                $id=$row['id'];
                 if($status==1){
                           $flag="Active"; } 
                             else if($status==0){
                           $flag="Suspended";   }
                
                echo '<tr><td>'.$numbering.'</td><td>'.$row['name'].'</td><td>'.$row['staff_id'].'</td>
                <td>'.$row['username'].'</td><td>'.$row['department'].'</td><td>'.$row['faculty'].'</td><td>'.$flag.'</td>
              <td><a class="btn btn-default" href="view_lecturer.php?id='.$id.'">View</a></button></td>';
                                        
                        if($status==1){
                          echo '<td>
                        <a class="btn btn-default btn-danger" style="color:white;" href="../controllers/acct_status_handler.php?id='.$id.'&status=1">Deactivate</a>
                        </td>';
                        }else if($status==0){
                           echo '<td>
                        <a style="color:white;"  class="btn btn-default btn-success" href="../controllers/acct_status_handler.php?id='.$id.'&status=0">Activate</a>
                        </td>';  
                        }     
                        echo '<td><a style="position:center" href="../controllers/delete_lecturer_handler.php?id='.$id.'" class="btn btn-danger" onclick="ConfirmDelete()" >Delete</a></td>';   echo '</tr>';
                        $numbering++;
                      }
            }
 
                    ?> 
        </table>
        </div>
        </div>
          <script>
             function ConfirmDelete(){
               var x=confirm("Are you sure you want to delete this Lecturer?\n  Note that it cannot be undo");
               if(x){
                 return true;
                // window.location.href= "";
               }else{
                 return false;
               }
             }
             </script>
</div>
        </div>
</body>


</html>