@extends('layout/headfoot')

    
@section('title,', 'ini akun')
@section('container') 
<div class="container-fluid p-5">
		<h5>Bioadata Diri</h5>
		<hr>
		<div class="d-flex">
			<div class="col-md-4">
				<img id="foto" src="http://placehold.it/360" alt="Foto Profil" class="mb-3" />
				<div class="custom-file mb-3">
					<input type="file" class="custom-file-input" id="customFile">
					<label class="custom-file-label" for="customFile">Pilih Foto</label>
				</div>
				<a href="" class="btn btn-primary btn-block">Ubah Kata Sandi</a>
			</div>
			<div class="col-md-6">
				<p><b>Ubah Biodata Diri</b></p>
				<form>
					<div class="form-group row">
						<label for="inputName" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputName">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputGender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-10">
							<select id="inputState" class="form-control">
								<option>Pria</option>
								<option>Wanita</option>
							</select>
						</div>
					</div>
					<p><b>Ubah Kontak</b></p>
					<form>
						<div class="form-group row">
							<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="inputEmail">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPhone" class="col-sm-2 col-form-label">Nomor HP</label>
							<div class="col-sm-10">
								<input type="tel" class="form-control" id="inputPhone">
							</div>
						</div>
						<a href="" class="btn btn-primary btn-block">Simpan</a>
					</form>
				</div>
			</div>
		</div>
    @endsection