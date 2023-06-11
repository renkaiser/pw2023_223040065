<?php 
require ('function.php');
$artikels = query("SELECT * FROM artikel");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php require('artikel/navbar.php');?>

<div class="container mt-3 dboard">
  <h1>Dashboard</h1>

  <a href="tambah.php" class="btn btn-primary">Tambah Artikel</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col">Teks</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;?>
    <?php foreach( $artikels as $artikel): ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="img/default.jpg" alt=""></td>
      <td><?= $artikel["judul"]; ?></td>
      <td><?= $artikel["teks"]; ?></td>
      <td>
        <a href="ubah.php?id=<?= $artikel['id']; ?>">Ubah</a> |
        <a href="hapus.php?id=<?= $artikel['id']; ?>" onclick="return confirm('yakin?');">Hapus</a>
      </td>
    </tr>
    <?php endforeach;  ?>
</table>
</div>

</body>
</html>

<?php require('view/footer.php');?>    