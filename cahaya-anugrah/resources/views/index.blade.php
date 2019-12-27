@extends('layout/headfoot')

    
@section('title,', 'ini index')
@section('container') 
    <!-- Search Box -->
	<div class="jumbotron bg">
		<div id="src_box" class="container">
			<div id="title_src" class="text-light">
				<img src="IMG/ICON/Search.png" width="20px" height="20px">
				<p >Cari Barang atau Produk</p>
			</div>
			<div id="src">
				<input type="text" name="search" placeholder="Cari berdasarkan Kategori, Produk atau kata kunci" class="form-control">
				<a class="btn btn-primary" href="pencarian" style="margin: 10px;" role="button">Cari</a>
			</div>
		</div>
	</div>

	<!-- Produk -->
	<div class="container-fluid row ">
		<div class="col-md-4">
			<a class="nav-link" id="blue" href="#!P-Populer">Produk Terpopuler</a>
		</div>
		<div class="col-md-4">
			<a class="nav-link" id="blue" href="#!P-Baru">Produk Terbaru</a>
		</div>
		<div class="col-md-4">
			<a class="nav-link" id="blue" href="#!P-Anda">Sesuai Profil Anda</a>
		</div>
	</div>

	<div ng-view>

    </div>
    
    @endsection