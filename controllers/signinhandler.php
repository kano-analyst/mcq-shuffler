<?php 
require '../model/conn.php';
session_start();
	if(isset($_POST['Login'])){ //check if browser has posted any data to be collected
$email =$_POST['email'];
$password=$_POST['password'];
//$password=md5($password);
    $query= "SELECT * FROM `users` WHERE username='$email' AND password='$password' and `status`=1"; 
    
	$result=$conn->query($query);
    }
if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)) {
      $role=$row['role'];
      switch($role){
          case 'admin':
                $name= $row['name'];
            $_SESSION['logged_in']=true;
            $_SESSION['name']= $name;  
            $_SESSION['username']= $row['username'];
        
            header("location: ../views/admin_home.php");
         break;
         case 'lecturer':
         $name= $row['name'];
         $_SESSION['logged_in']=true;
         $_SESSION['name']= $name;  
         $_SESSION['username']= $row['username'];
     
         header("location: ../views/lecturer_home.php");
         break;
         default:
         break;

    }
}
}
else{
  //  $_SESSION['logged_in']=false;
    echo"failed";
    	header("location: ../views/login.php");
}
?>