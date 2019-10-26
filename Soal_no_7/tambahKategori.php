<?php
    include 'koneksi.php';
    $nama = $_POST['name'];


    mysqli_query($koneksi, "INSERT INTO categories (name) VALUES('$nama')");


 
    header("location:http://localhost/Jawaban_bootcamp/Soal_no_7/index.php");
?>