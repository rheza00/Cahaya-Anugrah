<!DOCTYPE html>
<html lang="id">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Angular JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.0/angular-route.min.js"></script>

	<!--Boostrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- Prototyping Vue Js -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

	<!-- Index.js -->
	<script type="text/javascript" src="js/index.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/pencarian.css">
	<link rel="stylesheet" type="text/css" href="css/info.css">
	<link rel="stylesheet" type="text/css" href="css/belanja.css">
	<link rel="stylesheet" type="text/css" href="css/akun.css">
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body ng-app="myApp">

	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-light sticky-top navigasi ">
		<div class="container-fluid">
			<a href="{{url('/')}}" class="navbar-brand"><img id="logo" src="IMG/logo.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">  
					<li class="nav-item">
						<a class="nav-link" id="white" href="{{url('/')}}">Home</a>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<a class="nav-link" id="white" href="{{url('/belanja')}}" id="Belanja">Belanja</a>
							<div class="dropdown-content text-center">
								<p>Keranjang Belanja Anda Kosong</p>
								<a class="btn btn-primary" href="{{url('/belanja')}}" role="button">Belanja Sekarang</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="white" href="#!Daftar" id="Daftar">Daftar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="white" href="#!Masuk" id="Masuk">Masuk</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

    @yield('container');


	<div ng-view>

	</div>

	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<img src="IMG/logo.png" width="50px" height="45px">
					<hr class="light">
					<p>Nomor Telp</p>
					<p>Email</p>
					<p>Alamat</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Jam Kerja</h5>
					<hr class="light">
					<p>Senin - Jumat : 9am - 5pm</p>
					<p>Sabtu : 10am - 4pm</p>
					<p>Minggu :Tutup</p>
				</div>
				<div class="col-md-4">
					<img src="IMG/Creator.png" width="50px" height="45px">
					<hr class="light">
					<p>Brayen Bakara</p>
					<p>Reza Anugrah</p>
					<p>Titik Wulan</p>
				</div>
				<div class="col-12">
					<hr class="light">
					<h5>&copy; CahayaAnugrah.com</h5>
				</div>
			</div>
		</div>
	</footer>
	

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

	<!-- Popper.js -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>