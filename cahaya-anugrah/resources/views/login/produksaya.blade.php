<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('js/bootstrap.js') }}">
    <title>produksaya</title>
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
            <h1>Produk Saya</h1>

            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari Produk" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 bg-aqua" type="submit">cari</button>
                    <button class="btn btn-outline-success bg-aqua samping" type="input" margin="right">+tambah
                        Produk</button>
                </form>
            </nav>
            <br>
            <br>
            <br>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col"><img src="..." alt="..." class="img-thumbnail"></th>
                        <td class="ukuran">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control ukuran"
                                    aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
                        </td>
                        <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>stok</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="..." alt="..." class="img-thumbnail"></th>
                        <td class="ukuran">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                    <span class="input-group-text"></span>
                                </div>
                                <input type="text" class="form-control ukuran"
                                    aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
                        </td>
                        <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>stok</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th scope="row"><img src="..." alt="..." class="img-thumbnail"></th>
                        <td class="ukuran">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>

                                </div>
                                <input type="text" class="form-control"
                                    aria-label="Dollar amount (with dot and two decimal places)">
                            </div>
                        </td>
                        <td><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option selected>stok</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>
