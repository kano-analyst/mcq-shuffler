<?php
if(session_status()== PHP_SESSION_NONE){

session_start();}
if(!isset($_SESSION['logged_in']) ){
    header('location: ../views/login.php');
}
include('../model/conn.php');
$testId=$_GET['testId'];
$question=$_POST['question'];
$option_a=$_POST['option_a'];
$option_b=$_POST['option_b'];
$option_c=$_POST['option_c'];
$option_d=$_POST['option_d'];
if (isset($_POST['answer_a'])) {
    $answer="A";
}elseif (isset($_POST['answer_b'])) {
   $answer="B";
}elseif (isset($_POST['answer_c'])) {
  $answer="C";
}elseif (isset($_POST['answer_d'])) {
   $answer="D";
}

$query="INSERT INTO `mcq`(`question`, `a`, `b`, `c`, `d`, `answer`, `testId`) 
VALUES ('$question','$option_a','$option_b','$option_c','$option_d','$answer','$testId')";
$result=$conn->query($query);
if($result){
    header('location: ../views/view_test.php?testId='.$testId.'&question_flag=success');
}
?>