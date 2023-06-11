<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("Location:login.php");
    exit;
}

require('view/header.php');
require('view/navbar.php');
require('view/index.view.php');
require('view/footer.php');
?>  