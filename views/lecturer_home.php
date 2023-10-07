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
    <title>Page Title</title>
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
                    <h3 class="page-header" style="text-align:center;">Homepage</h3>
                       </div>
            </div>
    <div class="row">
                    <div class="col-sm-3">
                        <div class="hero-widget well well-sm">
                            <div class="icon">
                                <i class="fa fa-user-secret fa-fw"></i>
                            </div>
                            <div class="text">
                                <span class="value"><?php echo $_SESSION['username']?></span>
                                <label class="text-muted"><?php echo $_SESSION['name']?></label>
                            </div>
                           <!--  <div class="options">
                                <a href="javascript:;" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> View Profile</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="hero-widget well well-sm">
                            <div class="icon">
                                <i class="fa fa-graduation-cap fa-fw"></i>
                            </div>
                             <?PHP  $sql= "SELECT * FROM `users`";
                $rslt=$conn->query($sql);
                $alllecturers=mysqli_num_rows($rslt); ?>
                            <div class="text">
                                <span class="value"><?php echo $alllecturers?></span>
                                <label class="text-muted">Total System Users</label>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="hero-widget well well-sm">
                            <div class="icon">
                                <i class="fa fa-files-o fa-fw"></i>
                            </div>
                             <?PHP  $query= "SELECT * FROM `test`";
                $result=$conn->query($query);
                $alltests=mysqli_num_rows($result); ?>
                            <div class="text">
                                <span class="value"><?php echo $alltests?></span>
                                <label class="text-muted">Total No. of Created Tests</label>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="hero-widget well well-sm">
                            <div class="icon">
                                <i class="fa fa-edit fa-fw"></i>
                            </div>
                        <?PHP  $query2= "SELECT * FROM `mcq`";
                $result2=$conn->query($query2);
                if(mysqli_num_rows($result2)>0 ){
                    $affected=mysqli_num_rows($result2);
                }else{
                    $affected=0;
                } ?> 
                   <div class="text">
                                <span class="value"><?php echo $affected?></span>
                                <label class="text-muted">Question Bank Total</label>
                            </div>
                           
                        </div>
                    </div>
                </div>
                   
  </div></div>              
</body>
</html>