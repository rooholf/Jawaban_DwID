<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM `books` WHERE id=$id");

    header("location:http://localhost/Jawaban_bootcamp/Soal_no_7/index.php?pesan=hapus");
    exit();
?>