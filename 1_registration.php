<?php

session_start();
header('location:1_form.php');

$con = mysqli_connect('localhost','root','root') or die(mysql_error());;

mysqli_select_db($con, 'homework1');
$id = $_POST['id'];
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
/* ??? re-enter password ??? */
$pass2 = $_POST['password2'];

$s = "SELECT * FROM signup WHERE username = '$name'";
$e = "SELECT * FROM signup WHERE email = '$email'";

$result = mysqli_query($con, $s);
$result_email = mysqli_query($con, $e);

$num = mysqli_num_rows($result);
$num_email = mysqli_num_rows($result_email);

if($num == 1) {
    header('location: 1_username.php');
}elseif($num_email == 1) {
    header('location: 1_email.php');
}elseif($pass !== $pass2) {
    header('location: 1_password.php');
}
else{
    $reg = "INSERT INTO signup (username, email, password) VALUES ('$name' , '$email' , '$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>