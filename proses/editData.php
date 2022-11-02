<?php
include "../koneksi.php";

if (isset($_POST["ubah"])) {
  date_default_timezone_set("asia/kuala_lumpur");
  $id = $_GET["id"];
  $nama = $_POST["nama"];
  $genre = $_POST["genre"];
  $deskripsi = $_POST["deskripsi"];
  $waktu = date("y-m-d h:i:s");
  $gambar = $_FILES["gambar"]["name"];
  $gambarBaru = "$id.png";
  $tmp = $_FILES["gambar"]["tmp_name"];

  if (move_uploaded_file($tmp, '../databaseImages/' . $gambarBaru)) {
    $sql = "UPDATE listgames SET 
              nama = '$nama',
              genre = '$genre',
              deskripsi = '$deskripsi',
              gambar = '$gambarBaru',
              waktu = '$waktu'
              WHERE id = '$id'";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
      echo "
          <script>
            alert('Data berhasil diubah');
            document.location.href = '../dashboard.php';
          </script>
        ";
    } else {
      echo "
        <script>
          alert('Data gagal diubah');
          document.location.href = '../dashboard.php';
        </script>
        ";
    }
  }
}
