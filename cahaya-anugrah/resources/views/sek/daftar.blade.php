@extends('layout/headfoot')


@section('title,', 'ini daftar')
@section('container')

    <div class="form-isi col-md-4 ">
        <a href="#">
            <div class="close">+</div>
        </a>
        <div class="row" style="justify-content: space-between;">
            <a href="{{url('/daftar')}}" class="nav-link">
                <h4>Daftar</h4>
            </a>
            <div class="row">
                <p><sub>atau</sub></p>
                <a href="{{url('/masuk')}}" class="nav-link">
                    <h6>Masuk</h6>
                </a>
            </div>
        </div>
        <form class="was-validated">
            <div class="form-group">
                <input type="text" class="form-control" id="" name="fullname" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" id="" name="phone" placeholder="Nomor Telp." pattern="[0-9]"
                    required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp"
                    placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="" name="password" placeholder="Password" required="">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="" required>
                <label class="form-check-label" for="exampleCheck1">Dengan melakukan registrasi, saya setuju terhadap
                    Aturan Penggunaaan, Kebijakan Privasi dari kami</label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
        </form>
    </div>


@endsection
