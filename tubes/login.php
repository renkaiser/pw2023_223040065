<?php 
session_start();
if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}
require "function.php";

require('view/header.php');
require('data/navbar.php');
require('data/login.view.php');
require('view/footer.php');
?>  