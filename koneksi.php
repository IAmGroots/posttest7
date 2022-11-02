<?php 
  $koneksi = mysqli_connect("localhost", "root", "", "praktikum");
  if (!$koneksi) {
    die("Gagal terhubung ke database" . mysqli_connect_error());
  }
?>