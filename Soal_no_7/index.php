<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/card.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <title>Document</title>
    <?php
    include 'koneksi.php';
    if(isset($_GET['pesan'])){
	    $pesan = $_GET['pesan'];
	    if($pesan == "input"){
		echo "Data berhasil di input.";
	    }else if($pesan == "update"){
		echo "Data berhasil di update.";
	    }else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	    }
        }
    ?>
</head>
<body>

    <button onclick="window.location.href='formAddBuku.php'" type="button" class="btn btn-default" id="addBooks">Tambah Buku</button>
    <button onclick="window.location.href='formAddKategori.php'"type="button" class="btn btn-default" id="addCat">Tambah Kategori</button>

<div class="container">
    <div class="row clearfix">
    <?php 
        include "stokMin.php";
        $data = mysqli_query($koneksi,"select * from books"); 
        while($d = mysqli_fetch_array($data)){
            ?>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="<?php echo $d['image']?>" alt="Product" class="img-fluid">
                        <div class="hover">
                            <a href="stokAdd.php/?id=<?php echo $d['id']?>&stok=<?php echo $d['stok']?>" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="stokMin.php/?id=<?php echo $d['id']?>&stok=<?php echo $d['stok']?>" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-minus"></i></a>
                            <a href="formEdit.php/?id=<?php echo $d['id']?>" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-edit"></i></a>
                            <a href="deleteBuku.php/?id=<?php echo $d['id']?>" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><div class="product-desc"><?php echo $d['deskripsi']?></div></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price"><?php echo $d['name']?></li>
                            <li class="new_price">Stocks <?php echo $d['stok'];?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

      
      <?php  }
    ?>
    </div>
    </div>    
    



</body>

</html>

