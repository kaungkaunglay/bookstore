<?php

$host = "localhost";
$dbname = "Bookstore";
$user = "root";
$password = "";
$conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//if($conn){
//    echo "work successfully ";
//}else{
//    echo "error in db";
//}
?>