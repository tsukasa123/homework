<?php

session_start();
session_destroy();

header('location: 1_form.php');

?>