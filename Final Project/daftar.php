<?php require "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>FP PWL 2019</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<?php
	$query = "Select * from customer";
	$result = mysqli_query($db, $query);
	?>

	<?php
	if(!empty($_POST)){
		$nama = $_POST['nama'];
		$no_telp = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['pwd'];
		$tgl_lahir = $_POST['tgl'];
		$alamat = $_POST['alamat'];
		$gender = $_POST['gender'];

		if($_FILES['img']['error']==0){
			$img = $_FILES['img'];
			$new_img = 'images/img_'.date('YmdHis').'.jpg';
			if(copy($img['tmp_name'], $new_img)){
				$query_add = "Insert into customer
				(nama, no_telp, email, password, alamat, tgl_lahir, gender, gambar)
				value('$nama', '$no_telp', '$email', '$password', '$alamat', '$tgl_lahir', '$gender', '$new_img')";
				$exec_add = mysqli_query($db, $query_add);
			}else{
				echo "<p class='alert alert-danger' role='alert'>
				[Error] Upload Gambar Gagal.<br />
				</p>";
			}
		}else{
			$query_add = "Insert into customer
				(nama, no_telp, email, password, alamat, tgl_lahir, gender)
				value('$nama', '$no_telp', '$email', '$password', '$alamat', '$tgl_lahir', '$gender')";
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
							<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
						</div>
						<div class="form-group">           
							<input type="text" name="phone" class="form-control" placeholder="Nomor Ponsel">
						</div>   
						<div class="form-group">           
							<input type="text" name="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" name="pwd" class="form-control" placeholder="Password">
						</div>
						<div class="form-group">
							<input type="text" name="alamat" class="form-control" placeholder="Alamat">
						</div>
						<div class="form-group">
							<input type="date" name="tgl" class="form-control">
						</div>

						<div class="form-group">
							<input type="radio" name="gender" value="Laki-laki">Laki-laki<br>
							<input type="radio" name="gender" value="Perempuan">Perempuan<br>
						</div>
						<div class="form-group">
							<div class="custom-file">
								<input type="file" name="img" >
							</div><br/>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
								<label class="form-check-label" for="invalidCheck">
									Dengan melakukan registrasi, saya setuju terhadap <a href="">Aturan Penggunaan, Kebijakan Privasi</a> dari Kami
								</label>
								<div class="invalid-feedback">
									You must agree before submitting.
								</div>
							</div>
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