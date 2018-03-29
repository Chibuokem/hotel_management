<?php
require("connection.php");
session_start();
$_SESSION['id']=array();
session_destroy();
header('location:index.php');
?>

