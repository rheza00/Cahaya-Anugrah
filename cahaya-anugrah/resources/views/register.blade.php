<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/register.css') }}">
</head>
<body>
	<div class="background">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" id="daftar" class="toggle-btn">Daftar</button>
				<a href="{{url('/login')}}"><button type="button" id="masuk" class="toggle-btn">Masuk</button></a>
			</div>
			<form class="was-validated">
				<div class="form-group">
					<input type="text" class="form-control" id="" name="fullname" placeholder="Nama" required>
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" id="" name="phone" placeholder="Nomor Telp." pattern="[0-9]" required>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp" placeholder="Email" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="" name="password" placeholder="Password" required="">
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="" required>
					<label class="form-check-label" for="exampleCheck1">Dengan melakukan registrasi, saya setuju terhadap Aturan Penggunaaan, Kebijakan Privasi dari kami</label>
				</div>
				<button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
			</form>
		</div>
	</div>
</body>
</html>