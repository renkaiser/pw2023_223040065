<?php 
require 'function.php';

$id = htmlspecialchars($_GET['id']);

if(hapus($id) > 0) {
    echo "<script>
            alert('data berhasil dihapus!');
          </script>";
          header("Location:dashboard.php");
} else {
    echo "<script>
            alert('data gagal dihapus');
          </script>";
          header("Location:dashboard.php");
}