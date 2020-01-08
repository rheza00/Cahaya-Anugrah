var app = angular.module("myApp", ['ngRoute']);
app.config(function ($routeProvider) {
            $routeProvider
                .when("/P-Populer", {
                    template: '<h5 style="padding-left:35px;">Top Trending:</h5>' +
                        '<section class="listings">' +
                        '<div class="wrapper">' +
                        '<ul class="list-barang">' +
                        '<li>' +
                        '<a href="#">' +
                        '<img src="IMG/Logo.png" alt="" title="" class="img-barang"/>' +
                        '</a>' +
                        '<div class="detail-barang">' +
                        '<h1>' +
                        '<a href="#">Nama Barang</a>' +
                        '</h1>' +
                        '<h2>Harga : <span class="harga-barang">Rp.-</span></h2>' +
                        '<a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>' +
                        '</div>' +
                        '</li>' +
                        '<li>' +
                        '<a href="#">' +
                        '<img src="IMG/Logo.png" alt="" title="" class="img-barang"/>' +
                        '</a>' +
                        '<div class="detail-barang">' +
                        '<h1>' +
                        '<a href="#">Nama Barang</a>' +
                        '</h1>' +
                        '<h2>Harga : <span class="harga-barang">Rp.-</span></h2>' +
                        '<a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>' +
                        '</div>' +
                        '</li>' +
                        '<li>' +
                        '<a href="#">' +
                        '<img src="IMG/Logo.png" alt="" title="" class="img-barang"/>' +
                        '</a>' +
                        '<div class="detail-barang">' +
                        '<h1>' +
                        '<a href="#">Nama Barang</a>' +
                        '</h1>' +
                        '<h2>Harga : <span class="harga-barang">Rp.-</span></h2>' +
                        '<a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>' +
                        '</div>' +
                        '</li>' +
                        '</ul>' +
                        '</div>' +
                        '</section>'
                })

                .when("/P-Baru", {
                    template: '<h5 style="padding-left:35px;">New Product:</h5>' +
                        '<section class="listings">' +
                        '<div class="wrapper">' +
                        '<ul class="list-barang">' +
                        '<li>' +
                        '<a href="#">' +
                        '<img src="IMG/Logo.png" alt="" title="" class="img-barang"/>' +
                        '</a>' +
                        '<div class="detail-barang">' +
                        '<h1>' +
                        '<a href="#">Nama Barang</a>' +
                        '</h1>' +
                        '<h2>Harga : <span class="harga-barang">Rp.-</span></h2>' +
                        '<a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>' +
                        '</div>' +
                        '</li>' +
                        '<li>' +
                        '<a href="#">' +
                        '<img src="IMG/Logo.png" alt="" title="" class="img-barang"/>' +
                        '</a>' +
                        '<div class="detail-barang">' +
                        '<h1>' +
                        '<a href="#">Nama Barang</a>' +
                        '</h1>' +
                        '<h2>Harga : <span class="harga-barang">Rp.-</span></h2>' +
                        '<a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>' +
                        '</div>' +
                        '</li>' +
                        '<li>' +
                        '<a href="#">' +
                        '<img src="IMG/Logo.png" alt="" title="" class="img-barang"/>' +
                        '</a>' +
                        '<div class="detail-barang">' +
                        '<h1>' +
                        '<a href="#">Nama Barang</a>' +
                        '</h1>' +
                        '<h2>Harga : <span class="harga-barang">Rp.-</span></h2>' +
                        '<a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>' +
                        '</div>' +
                        '</li>' +
                        '</ul>' +
                        '</div>' +
                        '</section>'
                })

                .when("/P-Anda", {
                    template: '<h5 style="padding-left:35px;">Based on Your Profile:</h5>' +
                        '<section class="listings">' +
                        '<div class="wrapper">' +
                        '<ul class="list-barang">' +
                        '<li>' +
                        '<a href="#">' +
                        '<img src="IMG/Logo.png" alt="" title="" class="img-barang"/>' +
                        '</a>' +
                        '<div class="detail-barang">' +
                        '<h1>' +
                        '<a href="#">Nama Barang</a>' +
                        '</h1>' +
                        '<h2>Harga : <span class="harga-barang">Rp.-</span></h2>' +
                        '<a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>' +
                        '</div>' +
                        '</li>' +
                        '<li>' +
                        '<a href="#">' +
                        '<img src="IMG/Logo.png" alt="" title="" class="img-barang"/>' +
                        '</a>' +
                        '<div class="detail-barang">' +
                        '<h1>' +
                        '<a href="#">Nama Barang</a>' +
                        '</h1>' +
                        '<h2>Harga : <span class="harga-barang">Rp.-</span></h2>' +
                        '<a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>' +
                        '</div>' +
                        '</li>' +
                        '<li>' +
                        '<a href="#">' +
                        '<img src="IMG/Logo.png" alt="" title="" class="img-barang"/>' +
                        '</a>' +
                        '<div class="detail-barang">' +
                        '<h1>' +
                        '<a href="#">Nama Barang</a>' +
                        '</h1>' +
                        '<h2>Harga : <span class="harga-barang">Rp.-</span></h2>' +
                        '<a class="btn btn-primary btn-block" href="#!Belanja" role="button">Beli</a>' +
                        '</div>' +
                        '</li>' +
                        '</ul>' +
                        '</div>' +
                        '</section>'
                })
