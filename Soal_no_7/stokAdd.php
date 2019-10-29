<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $stok = $_GET['stok'];
    $stok = $stok+1;
    mysqli_query($koneksi, "UPDATE `books` SET `stok`=$stok WHERE id='$id'");

    header("location:http://localhost/Jawaban_DwID/Soal_no_7/index.php");
    exit();
?>