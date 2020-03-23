<?php

session_start();

$con = mysqli_connect('localhost','root','root') or die(mysqli_error());
mysqli_select_db($con,'homework1');


/*
$s = "SELECT * FROM itemlist WHERE code = '$code'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
*/
$update = false;
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['name'];
    $code = $_POST['code'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $count = $_POST['count'];
    
    $reg = "INSERT INTO itemlist (username, code, category, price, count)
    VALUES ('$username','$code','$category','$price','$count')";
    mysqli_query($con, $reg);
    echo "Success!";
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['name'];
    $code = $_POST['code'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $count = $_POST['count'];

    mysqli_query($con, "UPDATE itemlist SET username='$username', code = '$code', category = '$category'
                        price = '$category', count = '$count' WHERE id=$id");
    header('location: 4_add.php');
}






?>