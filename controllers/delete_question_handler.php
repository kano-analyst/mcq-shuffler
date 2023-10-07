<?PHP 
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
include('../include/dashboard.php');
$id=$_GET['id'];
$query1="SELECT `testId` from `mcq` WHERE `id`='$id'";
$query2="DELETE FROM `mcq` WHERE `id`='$id'";
$result=$conn->query($query2);
$result2=$conn->query($query1);

?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Deletion Status</title>
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
                    <h3 class="page-header" style="text-align:center;">Status</h3>
                       </div>
            </div>  
                                     <?php 
                                       
                                  
                                     if($result){
                                                ECHO '<p>Question deleted Successfully. Click <a href="#">Here</a> to go Back</p>';
                                            }else {
                                                ECHO '<p>There is an error in deleting the Question. Please try again Later</p>';
                                            }
                                      
                                ?>   
            </div>
            </div> 
</body>
</html>