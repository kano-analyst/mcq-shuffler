<?php
$dbserver='localhost';
$dbuser='root';
$dbpass='';
$dbname='mcq_shuffler_db';
$conn= new mysqli ($dbserver, $dbuser, $dbpass, $dbname);
if($conn->connect_error) die ($conn->connect_error);
?>