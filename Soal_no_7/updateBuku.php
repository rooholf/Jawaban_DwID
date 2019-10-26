<?php 
include 'koneksi.php';
$id = $_GET['id'];
$nama = $_GET['name'];
$desc = $_GET['deskripsi'];
$kategori = $_GET['kategori'];
$stok = $_GET['stok'];

mysqli_query($koneksi, "UPDATE `books` SET `name`='$nama',`stok`=$stok,`deskripsi`='$desc',`category_id`=$kategori WHERE id='$id'");


header("location:http://localhost/Jawaban_bootcamp/Soal_no_7/index.php?pesan=update");
exit();
?>