<?php require('view/header.php'); ?>
<?php require('view/navbar.php'); ?>

<div class="container mt-3">
  <h1>Tambah Artikel</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post">
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" name="judul" id="judul">
        </div>
        <div class="mb-3">
          <label for="teks" class="form-label">Teks</label>
          <input type="text" class="form-control" name="teks" id="teks">
        </div>
        <div class="mb-5">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="text"  class="form-control" name="gambar" id="gambar">
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Tambah Data</button>
      </form>
    </div>
  </div>

</div>

<?php require('view/footer.php'); ?>