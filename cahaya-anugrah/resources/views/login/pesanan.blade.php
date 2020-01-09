<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('js/bootstrap.js') }}">
    <title>pesanan</title>
    <style type="text/css">
        .samping {
            position: relative;
            left: 660px;
            margin-left: 5px;
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
            <h1>Pesanan</h1>
            <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-secondary">Semua Pesanan</button>
                    <button type="button" class="btn btn-secondary">Pesanan Baru</button>
                    <button type="button" class="btn btn-secondary">Pesanan Berhasil</button>
                    <button type="button" class="btn btn-secondary">Pesanan Gagal</button>
                </div>
                <br>
                <br>

                <table class="table ">
                    <thead margin-bottom class="thead-light">
                        <tr>
                            <th scope="col">ID PEMBELIAN</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col"><img src="..." alt="..." class="img-thumbnail"></th>
                            <td>Nama Barang</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td>Total Harga</td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary samping">Konfirmasi</button>
                <button type="button" class="btn btn-primary samping">Batal</button>
            </div>
        </div>


</body>

</html>
