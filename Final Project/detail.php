<?php require "koneksi.php"; ?>
<?php
$kd_barang = $_GET['kd_barang'];
$query = "Select * from barang Where kd_barang = '$kd_barang'";
$result = mysqli_query($db, $query);
$barang = mysqli_fetch_array($result);
?>

<?php if($barang['image']!=null):?>
<img width="200" src="<?php echo $barang['image']?>"><br />
<?php echo $barang['harga']?><br />
<?php echo $barang['kondisi']?><br /><br />
<h4>Informasi Produk</h4>
<?php echo $barang['deskripsi']?><br />
<?php endif;?>