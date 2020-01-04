<?php require "koneksi.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<?php
		$query = "select * from customer";
		$result = mysqli_query($db, $query);
		?>
<?php
    session_start();
        echo ' Wellcome ' .$_SESSION['User'];
        echo '<a href="logout.php?logout">Logout</a>';
?>


		<div class="row">
			<div class="col-sm">
				<br />
				<h2>My Info</h2>
				<p></p>
				<a href="daftar.php" class="btn btn-primary">daftar</a>
				<a href="login.php" class="btn btn-primary">login</a>
				<br /><br />

				<table class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>nama</th>
							<th>tgl_lahir</th>
							<th>Jenis Kelamin</th>
							<th>Email</th>
							<th>Nomor HP</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; while($customer = mysqli_fetch_array($result)):?>
						<tr>
							<td><?php echo $no++?></td>
							<td><?php echo $customer['nama']?></td>
							<td><?php echo $customer['tgl_lahir']?></td>
							<td><?php echo $customer['gender']?></td>
							<td><?php echo $customer['email']?></td>
							<td><?php echo $customer['no_telp']?></td>

						</tr>
					<?php endwhile;?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="container">
	<?php
	$query = "select * from barang";
	$result = mysqli_query($db, $query);
	?>
	<div class="row">
		<div class="col-sm">
			<br />
			<h2>Barang</h2>
			<p></p>
			<a href="barang.php" class="btn btn-primary">tambah barang</a>
			<br /><br />

			<table class="table table-striped">
				<thead>
					<tr>
						<th>Gambar</th>
						<th>Nama</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th>kondisi</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; while($barang = mysqli_fetch_array($result)):?>
					<tr>
						<td><?php if($barang['image']!=null):?>
						<img width="200" src="<?php echo $barang['image']?>"><br />
						<?php endif;?></td>
						<td><?php echo $barang['nama']?></td>
						<td><?php echo $barang['kategori']?></td>
						<td><?php echo $barang['harga']?></td>
						<td><?php echo $barang['kondisi']?></td>
						<td><a href="detail.php?kd_barang=<?php echo $barang['kd_barang']?>" class="btn btn-info btn-sm">view</a></td>
					</tr>
				<?php endwhile;?>
			</tbody>
		</table>
	</div>
</div>
</div>

</body>
</html>