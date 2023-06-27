<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = "app";
$con = mysqli_connect($host , $user , $password , $database);
if($con){
    echo 'good';
}

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO user(email , password) VALUES('$email' , '$pass')";

mysqli_query($con , $sql);
?>