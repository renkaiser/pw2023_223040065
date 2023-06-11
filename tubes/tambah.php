<?php  

require 'function.php';


if (isset ($_POST['submit'])) {

    if (tambah($_POST) >0) {
        "<script>
            alert('tambah data berhasil!');
        </script>";
    }
    header("Location:dashboard.php");
}

require 'views/tambah.view.php';