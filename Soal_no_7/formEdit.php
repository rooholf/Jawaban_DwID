<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from books where id='$id'");

    while($d = mysqli_fetch_array($data)){
?>


<form action="updateBuku.php" method="GET">		
		<table>
			<tr>
                <td>Judul Buku</td>
                <input type="hidden" name="id" value="<?php echo $d['id']?>">
				<td><input type="text" name="name" value="<?php echo $d['name']?>"></td>					
			</tr>	
			<tr>
				<td>Deskripsi</td>
				<td><input type="text" name="deskripsi" value="<?php echo $d['deskripsi']?>"></td>					
			</tr>	
			<tr>
				<td>Kategori</td>
				<td><input type="number" name="kategori" value="<?php echo $d['category_id']?>"></td>					
            </tr>	
            <tr>
                <td>Stok Buku</td>
                <td><input type="number" name="stok" value="<?php echo $d['stok']?>"></td>
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
    </form>

<?php } ?>