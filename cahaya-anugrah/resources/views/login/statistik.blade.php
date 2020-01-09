<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('js/bootstrap.js') }}">
    <title>statistik</title>
    <style type="text/css">
        .samping {
            position: relative;
            left: 660px;
        }

        .ukuran {
            width: 30px;
        }

    </style>
</head>

<body>
    <div class="row pt-4">
        <div class="col-md-2 bg-light">
            <ul class="list-group">
<a href="{{url('/pesanan')}}"class="navbar-brand"><li class="list-group-item active">Pesanan</li></a>
                    <a href="{{url('/produksaya')}}" class="navbar-brand"><li class="list-group-item">Produk Saya</li></a>
                    <a href="{{url('/tambahproduk')}}" class="navbar-brand"><li class="list-group-item">Tambah Produk</li></a>
                    <a href="{{url('/statistik')}}" class="navbar-brand"><li class="list-group-item">Data Statistik</li></a>
                    <a href="{{url('/')}}" class="navbar-brand"><li class="list-group-item">Keluar</li></a>
            </ul>


        </div>
        <div class="col-md-10">
            <h1>Data Statistik</h1>

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Data Transaksi</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>


        </div>
    </div>


</body>

</html>
