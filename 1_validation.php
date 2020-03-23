<?php

session_start();

$con = mysqli_connect('localhost','root','root') or die(mysql_error());

mysqli_select_db($con, 'homework1');
$id = $_POST['id'];
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
/* ??? re-enter password ??? */

$e = "SELECT * FROM signup WHERE email = '$email' && password = '$pass'";
$u = "SELECT username FROM signup WHERE email = '$email' && password = '$pass'";


$result_email = mysqli_query($con, $e);

$num_email = mysqli_num_rows($result_email);

if($num_email == 1) {
    header('location: 1_home.php');
}else{
    header('location: 1_form.php');
}

?>