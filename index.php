<?php 
if(isset($_SESSION['name'])){
    	header("location: views/admin_home.php");
}else{
header('location: views/login.php');}
?>