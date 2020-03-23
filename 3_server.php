<?php

session_start();

$con = mysqli_connect('localhost','root','root') or die(mysqli_error());

mysqli_select_db($con, 'homework1');
$id = $_POST['id'];
$rate = $_POST['number'];
$textarea = $_POST['textarea'];
$email = $_POST['email'];

$e = "SELECT * FROM feedback WHERE email = '$email'";

$result = mysqli_query($con, $e);

$num = mysqli_num_rows($result);

if($num == 1) {
    echo "This E-mail is already taken!";
}elseif($rate == "" || $email == "") {
    echo "Please fill the form up!";
}else{
    $reg = "INSERT INTO feedback (rate,textarea,email) VALUES ('$rate','$textarea','$email')";
    mysqli_query($con,$reg);
    echo "Message's sent successfully!";
}

?>