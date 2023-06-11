<?php

  $conn = mysqli_connect('localhost', 'root', '', 'mobalist');


  function daftar($data) {
     global $conn;

    $nama = mysqli_real_escape_string($conn, $data['nama']);
    $username = mysqli_real_escape_string($conn, $data['username']);
    $email = mysqli_real_escape_string($conn, $data['email']);
    $password = mysqli_real_escape_string($conn, $data['password']);
    mysqli_query($conn, "INSERT INTO user 
                        (nama, username, email, password) 
                        VALUES 
                        ('$nama','$username',
                        '$email','$password')");
  }

  function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
  
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }
    return $rows;
  } 

  function tambah($data) {
    global $conn;
  
    $judul = mysqli_real_escape_string ($conn, $data['judul']);
    $teks = mysqli_real_escape_string ($conn, $data['teks']);
    $gambar = mysqli_real_escape_string ($conn, $data['gambar']);
  
    mysqli_query($conn, "INSERT INTO
                artikel (judul, teks, gambar)
                VALUES ('$judul','$teks','$gambar')"); 
  }

  function hapus($id) {
    global $conn;
    $query = "DELETE FROM artikel WHERE  id = $id";
  
    mysqli_query($conn, $query) or die (mysqli_error($conn));
  
    return mysqli_affected_rows($conn);
  }

  function ubah($data)  {
    global $conn;
    $id = $data['id'];
    $judul = mysqli_real_escape_string ($conn, $data['judul']);
    $teks = mysqli_real_escape_string ($conn, $data['teks']);
    $gambar = mysqli_real_escape_string ($conn, $data['gambar']);
  
    $query = "UPDATE artikel
               SET
               judul = '$judul',
               teks = '$teks',
               gambar = '$gambar'
               WHERE id = $id
               ";
  
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
  }

  function dd($value) {
    echo "<pre>";
    var_dump($value);
    die;
    echo "</pre>";
  }

  function uriIS($uri) {
    return ($_SERVER["REQUEST_URI"] === BASE_URL) ? 'active' : '';
  }

  

?>