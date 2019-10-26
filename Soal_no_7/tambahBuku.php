<?php 
include 'koneksi.php';
$nama = $_POST['name'];
$desc = $_POST['deskripsi'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];


mysqli_query($koneksi, "INSERT INTO books (name,stok,deskripsi,category_id,image) VALUES('$nama',$stok,'$desc',$kategori,'http://localhost/Jawaban_bootcamp/Soal_no_7/assets/download.jpeg')");


header("location:http://localhost/Jawaban_bootcamp/Soal_no_7/index.php?pesan=input");
?>