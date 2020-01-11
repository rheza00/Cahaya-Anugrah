<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap.css') }}">
</head>
<body>
    <div class="card">
        <div class="card-body">
        <h5 class="card-title">{{ $barang->nama }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $barang->kategori }}</h6>
        <p class="card-text">{{ $barang-> kondisi}}</p>
        <p class="card-text">{{ $barang-> jumlah}}</p>
        <p class="card-text">{{ $barang-> harga}}</p>
        <p class="card-text">{{ $barang-> deskripsi}}</p>

        <a href="{{ $barang->id }}/editbarang" class="btn btn-primary">Edit</a>

        <form action="{{ $barang->id}}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="/viewadmin" class="card-link">Kembali</a>
        </div>
    </div>
</body>
</html>