<?php
include "../koneksi.php";
session_start();
if (!isset($_SESSION["session_username"])) {
  header("location: index.html");
  exit;
}

$id = $_GET["id"];
$query = mysqli_query($koneksi, "SELECT * FROM listGames WHERE id='$id'");
$row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="../add-edit.css">
</head>

<body>
  <div class="bg">
    <div class="container">
      <form action="../proses/editData.php?id=<?php echo $row["id"] ?>" method="POST" enctype="multipart/form-data">
        <h3>Edit Games</h3>
        <div class="inputBox">
          <label for="">Nama</label>
          <input type="text" name="nama" value="<?php echo $row["nama"] ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Genre</label>
          <input type="text" name="genre" value="<?php echo "$row[genre]" ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Gambar</label>
          <input type="file" name="gambar" value="<?php echo "$row[gambar]" ?>" required>
        </div>
        <div class="inputBox">
          <label for="">Deskripsi</label>
          <textarea name="deskripsi" cols="30" rows="10"><?php echo "$row[deskripsi]" ?></textarea>
        </div>
        <input type="submit" value="Ubah Games" name="ubah">
        <a href="../dashboard.php">Kembali</a>
      </form>
    </div>
  </div>
</body>

</html>