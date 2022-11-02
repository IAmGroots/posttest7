<?php
include "../koneksi.php";
session_start();
if (!isset($_SESSION["session_username"])) {
  header("location: index.html");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add</title>
  <link rel="stylesheet" href="../add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="../proses/addData.php" method="POST" enctype="multipart/form-data">
        <h3>Tambah Games</h3>
        <div class="inputBox">
          <label for="">Nama</label>
          <input type="text" name="nama" placeholder="Nama Games" required>
        </div>
        <div class="inputBox">
          <label for="">Genre</label>
          <input type="text" name="genre" placeholder="Genre Games" required>
        </div>
        <div class="inputBox">
          <label for="">Gambar</label>
          <input type="file" name="gambar" required>
        </div>
        <div class="inputBox">
          <label for="">Deskripsi</label>
          <textarea name="deskripsi" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Tambah Games" name="tambah">
        <a href="../dashboard.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>