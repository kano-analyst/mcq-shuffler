<?php 
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
$id=$_GET['id'];
$status=$_GET['status'];
echo $id;
echo $status;
if($status==0){
 $query="UPDATE `users` SET `status`=1 WHERE `id`='$id' ";
mysqli_query($conn, $query);
header('location: ../views/view_lecturers.php');
}elseif ($status==1) {
    $query="UPDATE `users` SET `status`=0 WHERE `id`='$id' ";
mysqli_query($conn, $query);
header('location: ../views/view_lecturers.php');

}

?>