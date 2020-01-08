@extends('layout/headfoot')


@section('title,', 'ini info')
@section('container')
<div class="form-isi col-md-4">
    <a href="#">
        <div class="close">+</div>
    </a>
    <div class="row" style="justify-content: space-between;">
        <a href="{{url('/masuk')}}" class="nav-link">
            <h4>Masuk</h4>
        </a>
        <div class="row">
            <p><sub>atau</sub></p>
            <a href="{{url('/daftar')}}" class="nav-link">
                <h6>Daftar</h6>
            </a>
        </div>
    </div>
    <form class="was-validated">
        <div class="form-group" style="margin-top: 22px;">
            <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp" placeholder="Email"
                required>
        </div>
        <div class="form-group" style="margin-top: 22px;">
            <input type="password" class="form-control" id="" name="password" placeholder="Password" required="">
        </div>
        <button type="submit" style="margin-bottom: 115px; margin-top: 40px;"
            class="btn btn-primary btn-lg btn-block">Masuk</button>
    </form>
</div>

@endsection
