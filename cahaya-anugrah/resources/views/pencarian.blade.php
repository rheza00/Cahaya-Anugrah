@extends('layout/headfoot')

    
@section('title,', 'ini pencarian')
@section('container') 

	<!-- Pencarian -->
	<div class="jumbotron">
		<div class="container">
			<div id="title_src" class="text-light">
				<img src="img/ICON/Search.png" width="20px" height="20px">
				<p >Cari Barang atau Produk</p>
			</div>
			<div id="src">
				<input type="text" name="search" placeholder="Cari berdasarkan Kategori, Produk atau kata kunci" class="form-control">
				<a class="btn btn-primary" href="{{url('/pencarian')}}" style="margin: 10px;" role="button">Cari</a>
			</div>
		</div>
	</div>

	<div class="container-fluid row">
		<div class="col-md-2" id="sidebar">
			<ul class="list-unstyled components">
				<li>
					<a href="#KategoriSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kategori</a>
					<ul class="collapse list-unstyled" id="KategoriSubmenu"> 
						<li>
							<a href="">Handtools</a>
						</li>
						<li>
							<a href="">Alat Bangunan</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#KondisiSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kondisi</a>
					<ul class="collapse list-unstyled" id="KondisiSubmenu"> 
						<li>
							<a href="">Baru</a>
						</li>
						<li>
							<a href="">Bekas</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#HargaSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Harga</a>
					<ul class="collapse list-unstyled" id="HargaSubmenu"> 
						<li>
							<a href="">Termurah</a>
						</li>
						<li>
							<a href="">Termahal</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="col-md-8">
			
			<!-- Item Pencarian -->
			@foreach ( $pencarian as $barang )
			<div class="border rounded p-3 m-2 d-flex justify-content-between">
				<div class="d-flex">
					
					<img src="{{ $barang->image }}" width="150px" height="150px" class="mr-3 mb-4">			
					<div class="ml-3">
						<h5><a href="info/{{ $barang->id }}">{{$barang->nama}}</a></h5>
						<p class="mt-4">{{$barang->kategori}}</p>
						<div class="d-flex mt-4">
							<p class="mr-5" id="harga"><i class="fas fa-tags mr-2"></i>{{$barang->harga}}</p>
							<p class="mr-5"><i class="fas fa-fire mr-2"></i>{{$barang->kondisi}}</p>
							<p class="mr-5"><i class="fas fa-eye mr-2"></i>Banyak Dilihat</p>
						</div>
					</div>
				</div>
				<div class="d-flex">
					<hr id="line">
					<div class="container">
						<a href="{{url('/belanja')}}" class="mt-4 btn btn-primary col">Beli</a>
						<a href="{{url('/info')}}" class="mt-4 btn btn-primary col">Info</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
    @endsection