<?php 
require('function.php');

if (isset($_POST{"submit"})) {
    if (daftar($_POST) >0){

    }else{
        "<script>
        alert('Daftar Gagal');
        </script>";
    }
    header("Location:login.php");
}
require('view/header.php');
require('data/navbar.php');
require('data/register.view.php');
require('view/footer.php');
?>  