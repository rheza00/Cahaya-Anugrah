@extends('layout/headfoot')

    
@section('title,', 'ini Belanja')
@section('container') 
<div class="container-fluid m-2 row">
		<div class="col-md-7 m-2">
			<div class="d-flex justify-content-between">
				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input" value="">Pilih Semua Produk
					</label>
				</div>
				<a href="">Hapus</a>
			</div>
			<hr class="belanja">

			<!-- Item Belanja -->
			<div>
				<div class="d-flex">
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" class="form-check-input" value=""><img src="img/logo.png" width="150px" height="150px">
						</label>
					</div>
					<div class="m-2">
						<p>Nama Barang</p>
						<div class="d-flex justify-content-between">
							<h6 class="mr-5" >Harga</h6>
							<p style="transform: rotate(45deg);" class="mr-5">+</p>
							<i class="fas fa-plus-circle"></i>
							<p>Jumlah</p>
							<i class="fas fa-minus-circle mr-5"></i>
							<p class="mr-5">:</p>
							<p>Total Harga</p>
						</div>
					</div>
				</div>
				<hr class="belanja">
			</div>
		</div>
		
		<div class="col-md-3 p-2">
			<div class="border p-2">
				<h5><b>Ringkasan Belanja</b></h5>
				<hr>
				<div class="d-flex justify-content-between">
					<h6>Total Harga</h6>
					<h5 class="pl-2"><b>Rp.600.000</b></h5>
				</div>
				<a class="btn btn-primary btn-block" href="" role="button">Beli</a>
			</div>
		</div>
	</div>
    @endsection