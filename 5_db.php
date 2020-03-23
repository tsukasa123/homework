<?php

function Createdb(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "bookstore";

    $con = mysqli_connect($servername,$username,$password);
}

?>