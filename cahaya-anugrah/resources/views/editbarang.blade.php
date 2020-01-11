
<!DOCTYPE html>
<html>
<head>
	<title>Edit Barang</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<br>
                    <h2>Form Edit Data Barang</h2>
                    <br><br>
					<form method="post" action="/viewadmindelete/{{ $barang->id}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @method('patch')
                        @csrf	
					<div class="form-group">
                        <label for="nama">Nama Barang</label>
                    <input value="{{ $barang->nama }}" type="text" name="nama" class="form-control" placeholder="Nama Barang">
						</div> 
						<div class="form-group">    
                            <label for="nama">Kagtegori</label>       
							<input value="{{ $barang->kategori }}" type="text" name="kategori" class="form-control" placeholder="Kategori Barang">
						</div>   
						<div class="form-group">
                            <label for="nama">Kondisi</label>
							<input value="{{ $barang->kondisi }}" type="text" name="kondisi" class="form-control" placeholder="Kondisi Barang">
						</div>
						<div class="form-group">
                            <label for="nama">Jumlah</label>
							<input value="{{ $barang->jumlah }}" type="number" name="jumlah" class="form-control" placeholder="Stock">
						</div>
						<div class="form-group">
                            <label for="nama">Harga</label>
							<input value="{{ $barang->harga }}" type="text" name="harga" class="form-control" placeholder="Harga">
						</div>
						<div class="form-group">
                            <label for="nama">Deskripsi</label>
                            <input value="{{ $barang->deskripsi }}" type="text" name="deskripsi" class="form-control" placeholder="deskripsi">
						</div>
						<div class="form-group">
							<div class="custom-file">
								<input value="{{ $barang->image }}" type="file" name="image" >
							</div><br/>
						</div>
						<button class="btn btn-primary" type="submit">Ubah Data</button>
					</form>
				</div>
			</div>
		</div>

	</body>
	</html>