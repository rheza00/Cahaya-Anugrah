
<!DOCTYPE html>
<html>
<head>
	<title>FP PWL 2019</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<br>
					<h2>Daftar</h2>
					<form action="/pencarian" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
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