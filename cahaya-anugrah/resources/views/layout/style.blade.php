@import url('https://fonts.googleapis.com/css?family=Lato:400,700');

body{
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	font-family: 'Lato', sans-serif;
	color: #222;
}

#logo{
	height: auto;
	width: auto;
	max-height: 50px;
	max-width: 250px;
	vertical-align: top;
}

/*Navigasi*/
.navigasi{
	background-color: #27E6EB;
	letter-spacing: .1rem;
}

.navigasi li{
	padding-right: .7rem;
}

.dropdown {
	position: relative;
	display: inline-block;
}

.dropdown-content {
	display: none;
	position: absolute;
	left: 0;
	background-color: #f9f9f9;
	min-width: 200px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
	border-radius: 25px;
	padding: 10px;
}

.dropdown-content p{
	font-size: 12px;
	margin-bottom: 50px;
}

.dropdown-content a{
	color: white;
}

.dropdown-content a:hover{
	color: #27E6EB;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}


#white{
	color: white;
}

#white::after{
	content: '';
	display: block;
	width: 0;
	height: 2px;
	background:#fff;
	transition: width .3s
}

#white:hover::after{
	width: 100%;
	transition: width .3s;
}

#blue{
	color: blue;
	margin-bottom: 30px;
}

#blue::after{
	content: '';
	display: block;
	width: 0;
	height: 2px;
	background: blue;
	transition: width .3s
}

#blue:hover::after{
	width: 50%;
	transition: width .3s;
}

/*Produk*/
.listings{
    padding: 20px 0;
}

.listings ul.list-barang{
    list-style: none;
    overflow: hidden;
}

.listings ul.list-barang li{
    display: block;
    width: 340px;
    height: auto;
    position: relative;
    float: left;
    margin: 0 100px 100px 0;
}

.listings ul.list-barang li img.img-barang{
    width: 95%;
    height: auto!important;
    vertical-align: top;
}

.listings ul.list-barang li:nth-child(3n+0){
    margin-right: 0;
}

.listings ul li .detail-barang{
    width: 320px;
    padding: 10px 20px 14px 20px;
    border-bottom: 1px solid #f2f1f1;
    border-left: 1px solid #f2f1f1;
    border-right: 1px solid #f2f1f1;

    transition: all .2s linear;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -o-transition: all .2s linear;
}

.listings ul li:hover .detail-barang{
    border-bottom: 1px solid #95badf;
    border-left: 1px solid #95badf;
    border-right: 1px solid #95badf;
}

.listings ul li .detail-barang h1{
    color: #666464;
    font-family: "lato-bold", Helvetica, Arial, sans-serif;
    font-size: 16px!important;
    font-weight: bold;
    margin-bottom: 5px;
    line-height: 28px;
}

.listings ul li .detail-barang h1 a{
    text-decoration: none;
    color: #666464;
}

.listings ul li .detail-barang h2{
    color: #9d9d9d;
    font-family: "lato-regular", Helvetica, Arial, sans-serif;
    font-size: 12px;
    line-height: 26px;
}

.listings ul li .detail-barang .harga-barang{
    color: #676767;
}

/*Form*/
.bg-form{
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.7);
	position: fixed;
	top: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	z-index: 1;
/*	display: none;*/
}

.form-isi{
	background-color: white;
	border-radius: 5px;
	padding: 10px;
	position: relative;
}

.close{
	font-size: 40px;
	transform: rotate(45deg);
	cursor: pointer;
}

.bg{
	background-image: url('IMG/Background.png');
	min-height: 400px;
	background-size: cover;
	background-attachment: fixed;
}

/*Search*/
#src_box{
	background-color: rgba(107,102,102,0.6);
	display: flex;
	flex-direction: column;
	padding: 10px;
	margin-top: 65px;
	border-radius: 25px;
}

#title_src{
	display: flex;
	flex-direction: row;
}

#title_src p{
	margin-left: 10px
}

#src{
	display: flex;
	flex-direction: row;
}

#src button{
	margin: 5px 20px;
}

.btn-primary{
	background-color: #27E6EB;
	border: 1px solid #27E6EB;
	transition: 0.3s;
}

.btn-primary:hover{
	background-color: white;
	border: 1px solid #27CBEB;
	color: #27CBEB;
}

.plh_produk{
	display: flex;
	flex-direction: row;
}

footer{
	background-color: #3f3f3f;
	color: #d5d5d5;
	padding-top: 2rem;
}

hr.light{
	border-top: 1px solid #d5d5d5;
	width: 75%;
}
