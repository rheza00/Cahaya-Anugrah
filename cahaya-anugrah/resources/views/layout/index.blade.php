var app = angular.module("myApp", ['ngRoute']);
app.config(function ($routeProvider) {
$routeProvider
.when("/P-Populer", {
template: <h5 style="padding-left:35px;">Top Trending:</h5>
<section class="listings">
    <div class="wrapper">
        <ul class="list-barang">
            <li>
                <a href="#">
                    <img src="IMG/Logo.png" alt="" title="" class="img-barang" />
                </a>
                <div class="detail-barang">
                    <h1>
                        <a href="#">Nama Barang</a>
                    </h1>
                    <h2>Harga : <span class="harga-barang">Rp.-</span></h2>
                    <a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>
                </div>
            </li>
            <li>
                <a href="#">
                    <img src="IMG/Logo.png" alt="" title="" class="img-barang" />
                </a>
                <div class="detail-barang">
                    <h1>
                        <a href="#">Nama Barang</a>
                    </h1>
                    <h2>Harga : <span class="harga-barang">Rp.-</span></h2>
                    <a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>
                </div>
            </li>
            <li>
                <a href="#">
                    <img src="IMG/Logo.png" alt="" title="" class="img-barang" />
                </a>
                <div class="detail-barang">
                    <h1>
                        <a href="#">Nama Barang</a>
                    </h1>
                    <h2>Harga : <span class="harga-barang">Rp.-</span></h2>
                    <a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>
                </div>
            </li>
        </ul>
    </div>
</section>'
})

.when("/P-Baru", {
template: <h5 style="padding-left:35px;">New Product:</h5>
<section class="listings">
    <div class="wrapper">
        <ul class="list-barang">
            <li>
                <a href="#">
                    <img src="IMG/Logo.png" alt="" title="" class="img-barang" />
                </a>
                <div class="detail-barang">
                    <h1>
                        <a href="#">Nama Barang</a>
                    </h1>
                    <h2>Harga : <span class="harga-barang">Rp.-</span></h2>
                    <a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>
                </div>
            </li>
            <li>
                <a href="#">
                    <img src="IMG/Logo.png" alt="" title="" class="img-barang" />
                </a>
                <div class="detail-barang">
                    <h1>
                        <a href="#">Nama Barang</a>
                    </h1>
                    <h2>Harga : <span class="harga-barang">Rp.-</span></h2>
                    <a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>
                </div>
            </li>
            <li>
                <a href="#">
                    <img src="IMG/Logo.png" alt="" title="" class="img-barang" />
                </a>
                <div class="detail-barang">
                    <h1>
                        <a href="#">Nama Barang</a>
                    </h1>
                    <h2>Harga : <span class="harga-barang">Rp.-</span></h2>
                    <a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>
                </div>
            </li>
        </ul>
    </div>
</section>'
})

.when("/P-Anda", {
template: <h5 style="padding-left:35px;">Based on Your Profile:</h5>
<section class="listings">
    <div class="wrapper">
        <ul class="list-barang">
            <li>
                <a href="#">
                    <img src="IMG/Logo.png" alt="" title="" class="img-barang" />
                </a>
                <div class="detail-barang">
                    <h1>
                        <a href="#">Nama Barang</a>
                    </h1>
                    <h2>Harga : <span class="harga-barang">Rp.-</span></h2>
                    <a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>
                </div>
            </li>
            <li>
                <a href="#">
                    <img src="IMG/Logo.png" alt="" title="" class="img-barang" />
                </a>
                <div class="detail-barang">
                    <h1>
                        <a href="#">Nama Barang</a>
                    </h1>
                    <h2>Harga : <span class="harga-barang">Rp.-</span></h2>
                    <a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>
                </div>
            </li>
            <li>
                <a href="#">
                    <img src="IMG/Logo.png" alt="" title="" class="img-barang" />
                </a>
                <div class="detail-barang">
                    <h1>
                        <a href="#">Nama Barang</a>
                    </h1>
                    <h2>Harga : <span class="harga-barang">Rp.-</span></h2>
                    <a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>
                </div>
            </li>
        </ul>
    </div>
</section>'
})

.when("/Masuk", {
template: <div class="bg-form">
    <div class="form-isi col-md-4">
        <a href="#">
            <div class="close">+</div>
        </a>
        <div class="row" style="justify-content: space-between;">
            <a href="#!Masuk" class="nav-link">
                <h4>Masuk</h4>
            </a>
            <div class="row">
                <p><sub>atau</sub></p>
                <a href="#!Daftar" class="nav-link">
                    <h6>Daftar</h6>
                </a>
            </div>
        </div>
        <form class="was-validated">
            <div class="form-group" style="margin-top: 22px;">
                <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp"
                    placeholder="Email" required>
            </div>
            <div class="form-group" style="margin-top: 22px;">
                <input type="password" class="form-control" id="" name="password" placeholder="Password" required="">
            </div>
            <button type="submit" style="margin-bottom: 115px; margin-top: 40px;"
                class="btn btn-primary btn-lg btn-block">Masuk</button>
        </form>
    </div>
</div>'
})

.when("/Daftar", {
template: <div class="bg-form">
    <div class="form-isi col-md-4 ">
        <a href="#">
            <div class="close">+</div>
        </a>
        <div class="row" style="justify-content: space-between;">
            <a href="#!Daftar" class="nav-link">
                <h4>Daftar</h4>
            </a>
            <div class="row">
                <p><sub>atau</sub></p>
                <a href="#!Masuk" class="nav-link">
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
</div>'
})
});
