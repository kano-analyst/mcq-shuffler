<?php
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
$user=$_SESSION['name'];
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MCQ Shuffler</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">MCQ Shuffler</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="admin_home.php"><i class="fa fa-home fa-fw"></i>Home</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            
          <li><a href="#"><i class="fa fa-calendar fa-fw"></i><?php echo date('D.d-M-Y');?></a>
                    </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i><?php echo $user;?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="../views/my_profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="../views/settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li><a href="../views/about.php"><i class="fa fa-users fa-fw"></i> About</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../views/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
     <a href="../views/admin_home.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
   </li>
        <li>
            <a href="../views/create_test.php"><i class="fa fa-edit fa-fw"></i> Create New Test</a>
        </li>
           <li>
    <a href="../views/all_test.php"><i class="fa fa-files-o fa-fw"></i> All Created Tests</a>
        </li>
                  <li>
    <a href="../views/view_lecturers.php"><i class="fa fa-file-photo-o fa-fw"></i> View Lecturers</a>
        </li>
                  <li>
    <a href="../views/add_lecturer.php"><i class="fa fa-graduation-cap fa-fw"></i>Add New Lecturer</a>
        </li>
</li>
                </ul>

            </div>
        </div>
         
    </nav>


</div>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/startmin.js"></script>

</body>
</html>
