<?php
include "../koneksi.php";

if (isset($_POST["tambah"])) {
  date_default_timezone_set("asia/kuala_lumpur");
  $nama = $_POST["nama"];
  $genre = $_POST["genre"];
  $deskripsi = $_POST["deskripsi"];
  $waktu = date("y-m-d h:i:s");
  $gambar = $_FILES["gambar"]["name"];
  $gambarBaru = "$nama.png";
  $tmp = $_FILES["gambar"]["tmp_name"];

  if (move_uploaded_file($tmp, '../databaseImages/' . $gambarBaru)) {
    $sql = "INSERT INTO listgames VALUES 
              ('',
              '$nama',
              '$genre',
              '$deskripsi',
              '$gambarBaru',
              '$waktu')";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
      echo "
          <script>
            alert('Data berhasil ditambah');
            document.location.href = '../dashboard.php';
          </script>
        ";
    } else {
      echo "
          <script>
            alert('Data gagal ditambah');
            document.location.href = '../dashboard.php';
          </script>
        ";
    }
  }
}
