<?php require "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>FP PWL 2019</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<?php
	$query = "Select * from barang";
	$result = mysqli_query($db, $query);
	?>

	<?php
	if(!empty($_POST)){
		$nama = $_POST['nama'];
		$kondisi = $_POST['kondisi'];
		$jumlah = $_POST['jumlah'];
		$kategori = $_POST['kategori'];
		$harga = $_POST['harga'];
		$deskripsi = $_POST['deskripsi'];

		if($_FILES['img']['error']==0){
			$img = $_FILES['img'];
			$new_img = 'images/img_'.date('YmdHis').'.jpg';
			if(copy($img['tmp_name'], $new_img)){
				$query_add = "Insert into barang
				(nama, kategori, kondisi, jumlah, harga, deskripsi, image)
				value('$nama', '$kategori', '$kondisi', '$jumlah', '$harga', '$deskripsi', '$new_img')";
				$exec_add = mysqli_query($db, $query_add);
			}else{
				echo "<p class='alert alert-danger' role='alert'>
				[Error] Upload Gambar Gagal.<br />
				</p>";
			}
		}else{
				$query_add = "Insert into barang
				(nama, kategori, kondisi, jumlah, harga, deskripsi, image)
				value('$nama', '$kategori', '$kondisi', '$jumlah', '$harga', '$deskripsi', '$new_img')";
			$exec_add = mysqli_query($db, $query_add);
		}

		if($exec_add)
			echo "<p class='alert alert-success' role='alert'>
		Tambah data Berhasil.<br />
		<a href='home.php'>Ke halaman utama</a>
		</p>";
		else
			echo "<p class='alert alert-danger' role='alert'>
		[Error] Tambah data Gagal.<br />".mysql_error($db)."
		</p>";}
		?>


		<div class="container">
			<div class="row">
				<div class="col-sm">
					<br>
					<h2>Daftar</h2>
					<form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
						<div class="form-group">
							<input type="text" name="nama" class="form-control" placeholder="Nama Barang">
						</div>
						<div class="form-group">           
							<input type="text" name="kategori" class="form-control" placeholder="Kategori Barang">
						</div>   
						<div class="form-group">
							<input type="radio" name="kondisi" value="Baru">Baru<br>
							<input type="radio" name="kondisi" value="Bekas">Bekas<br>
						</div>
						<div class="form-group">
							<input type="number" name="jumlah" class="form-control" placeholder="Stock">
						</div>
						<div class="form-group">
							<input type="text" name="harga" class="form-control" placeholder="Harga">
						</div>
						<div class="form-group">
							<textarea name="deskripsi" rows="10" cols="40"></textarea>
						</div>
						<div class="form-group">
							<div class="custom-file">
								<input type="file" name="img" >
							</div><br/>
						</div>
						<button class="btn btn-primary" type="submit">Submit form</button>
					</form>
				</div>
			</div>
		</div>

	</body>
	</html>

	<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	'use strict';
	window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
    	form.addEventListener('submit', function(event) {
    		if (form.checkValidity() === false) {
    			event.preventDefault();
    			event.stopPropagation();
    		}
    		form.classList.add('was-validated');
    	}, false);
    });
}, false);
})();
</script>