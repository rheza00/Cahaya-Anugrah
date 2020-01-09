@extends('layout/headfoot')

    
@section('title,', 'ini info')
@section('container') 
<div class="container-fluid info-barang text-light p-4 mb-5">
		<div>
			<h5 class="mb-3">{{$barang->nama}}</h5>
			<p>{{$barang->kategori}}</p>
			<div class="d-flex justify-content-between">
				<p><i class="fas fa-tags mr-2"></i>{{$barang->harga}}</p>
				<p><i class="fas fa-fire mr-2"></i>{{$barang->kondisi}}</p>
				<p><i class="fas fa-eye mr-2"></i>Banyak Dilihat</p>
				<p>Terjual</p>
				<p>Tersisa</p>
			</div>
		</div>
	</div>
	<div class="container-fluid row">
		<div class="col-md-3 mb-4">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner border">
					<div class="carousel-item active">
						<img class="d-block w-100" src="img/logo.png" height="auto" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/logo.png"height="auto" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/logo.png"height="auto" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span><i class="fas fa-chevron-left" aria-hidden="true"></i></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span><i class="fas fa-chevron-right" aria-hidden="true"></i></span>
					<span class="sr-only">Next</span>
				</a>
<!-- 				<div class="container-fluid">
					<div class="row carousel-indicators">
						<div class="col-md-auto item border">
							<img src="img/logo.png" class="img-fluid" data-target="#carouselExampleIndicators" data-slide-to="0"/>
						</div>
						<div class="col-md-auto item border">
							<img src="img/logo.png" class="img-fluid" data-target="#carouselExampleIndicators" data-slide-to="1"/>
						</div>
						<div class="col-md-auto item border">
							<img src="img/logo.png" class="img-fluid" data-target="#carouselExampleIndicators" data-slide-to="2"/>
						</div>
					</div>
				</div> -->
			</div>
		</div>
		<div class="col-md-6 ml-4">
			<h4 class="text-secondary">Informasi Produk</h4>
			<hr>
			<p>{{$barang->deskripsi}}</p>
		</div>
	</div>
	<div ng-view></div>
	<div class="col-md-12 border p-3 mb-3">
		<div class="d-flex justify-content-around">
			<div class="d-flex justify-content-between col-md-4">
				<div>
					<p>Jumlah</p>
					<div class="d-flex">
						<i class="fas fa-plus-circle"></i>
						<p class="ml-2 mr-2">Angka</p>
						<i class="fas fa-minus-circle "></i>
					</div>
				</div>
				<div>
					<p>Total</p>
					<h5 id="harga">Harga</h5>
				</div>
			</div>
			<div class="col-md-2 pt-3">
				<a href="" class="btn btn-primary btn-block">Beli</a>
			</div>
		</div>
	</div>
    @endsection