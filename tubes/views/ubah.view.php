<?php require('view/header.php'); ?>
<?php require('view/navbar.php'); ?>

<div class="container mt-3">
  <h1>Ubah Artikel</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post">
        <input type="hidden" name="id" value="<?= $artikel['id']; ?>">
        <div class="mb-3">
          <label for="nama" class="form-label">Judul</label>
          <input type="text" class="form-control" name="judul" id="judul" value="<?= $artikel['judul']; ?>">
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">Teks</label>
          <input type="text" class="form-control" name="teks" id="teks" value="<?= $artikel['teks']; ?>">
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="text" class="form-control" name="gambar" id="gambar" value="<?= $artikel['gambar']; ?>">
        </div>
        <button class="btn btn-primary" type="submit" name="ubah">Ubah Artikel</button>
      </form>
    </div>
  </div>

</div>

<?php require('view/footer.php'); ?>