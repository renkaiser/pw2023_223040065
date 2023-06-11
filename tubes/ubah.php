<?php  

require 'function.php';
$id = htmlspecialchars($_GET['id']);
$artikel = query("SELECT * FROM artikel WHERE id = $id")[0];


if (isset ($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('ubah data berhasil!');
              </script>";
    }
    header("Location:dashboard.php");
}

require 'views/ubah.view.php';