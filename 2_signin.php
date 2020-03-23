<?php

session_start();

$con = mysqli_connect('localhost','root','root') or die(mysql_error());

mysqli_select_db($con, 'homework1');
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$info = "SELECT * FROM creative WHERE username = '$username' && password = '$password'";

$result = mysqli_query($con, $info);

$num = mysqli_num_rows($result);

if($num == 1) {
    header('location: 2_home.php');
}else{
    header('location: 2_form.php');
}

?>