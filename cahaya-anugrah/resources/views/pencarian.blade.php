@extends('layout/headfoot')

    
@section('title,', 'ini pencarian')
@section('container') 
	<!-- Pencarian -->
	<div class="jumbotron">
		<div class="container">
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


	<div class="container-fluid list-produk">
		<div class="col-md-2" id="sidebar">
			<ul class="list-unstyled components">
				<li class="active">
					<a href="#KategoriSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kategori</a>
					<ul class="collapse list-unstyled" id="KategoriSubmenu">
						<li>
							<a href="#">Home 1</a>
						</li>
						<li>
							<a href="#">Home 2</a>
						</li>
						<li>
							<a href="#">Home 3</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#KondisiSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kondisi</a>
					<ul class="collapse list-unstyled" id="KondisiSubmenu">
						<li>
							<a href="#">Baru</a>
						</li>
						<li>
							<a href="#">Bekas</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#HargaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Harga</a>
					<ul class="collapse list-unstyled" id="HargaSubmenu">
						<li>
							<a href="#">Termurah</a>
						</li>
						<li>
							<a href="#">Termahal</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="produk border row">
				<img src="IMG/logo.png" width="150px" height="150px">
				<div class="detail-produk">
					<h5><a href="">Nama Item</a></h5>
					<p style="margin-top: 30px;">Kategori</p>
					<div class="status-produk">
						<p class="harga">Harga</p>
						<p class="kondisi">Kondisi</p>
						<p class="banyak-dilihat">Banyak Dilihat</p>
					</div>
				</div>
				beli
			</div>
			<div class="produk">asdfsaf</div>
		</div>
	</div>
    <div ng-view></div>
    @endsection