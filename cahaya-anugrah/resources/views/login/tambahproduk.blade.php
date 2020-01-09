 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('js/bootstrap.js') }}">
<title>tambah_produk</title>
<style type="text/css">
.samping{
position: relative;
left: 660px;
}	
.ukuran{
	width: 100px;
}
.fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}

.legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
}

	</style>



</head>
<body>
	

<div class="row pt-4" >
<div class="col-md-2 bg-light">
	<ul class="list-group">
<a href="{{url('/pesanan')}}"class="navbar-brand"><li class="list-group-item active">Pesanan</li></a>
                    <a href="{{url('/produksaya')}}" class="navbar-brand"><li class="list-group-item">Produk Saya</li></a>
                    <a href="{{url('/tambahproduk')}}" class="navbar-brand"><li class="list-group-item">Tambah Produk</li></a>
                    <a href="{{url('/statistik')}}" class="navbar-brand"><li class="list-group-item">Data Statistik</li></a>
                    <a href="{{url('/')}}" class="navbar-brand"><li class="list-group-item">Keluar</li></a>
</ul>
	
	
</div>
<div class="col-md-10"><h1>Tambah Prodak</h1>
	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Upload Prodak</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Format Gambar .jpeg .jpg dan ukuran minimum 300 x 300px (untuk gambar optimal gunkan ukuran minimum 700px</th>
      
    </tr>
    <tr>
      <th scope="row"><img src="..." alt="..." class="img-thumbnail"> 
      	<img src="..." alt="..." class="img-thumbnail">
      	<img src="..." alt="..." class="img-thumbnail">
      </th>
      </tr>
    
  </tbody>
</table>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Informasi Produk</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nama Produk</th>
      <td><input type="text"></td>
     
    </tr>
    <tr>
      <th scope="row">Kategori</th>
      <td><div class="form-group col-md-4">
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div></td>
      
    </tr>
    <tr>
      <th scope="row">Kondisi</th>
      <td colspan="2"><input type="radio" name="Kondisi" value="Baru"/>Baru
                      <input type="radio" name="Kondisi" value="Bekas"/>Bekas</td>
     
    </tr>

    <tr>
      <th scope="row">Jumlah</th>
      <td colspan="2"><select class="custom-select mr-sm-2 ukuran" id="inlineFormCustomSelect">
        <option selected></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="3">4</option> 
        <option value="3">5</option>
      </select></td>
    
    </tr>

    <tr>
      <th scope="row">Harga</th>
      <td colspan="2">Rp <input type="text"></td>
      
    </tr>
  </tbody>
</table>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Deskripsi Produk</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><textarea name="komentar3" cols="50" rows="6">
     
   </textarea></th>
      
     
    </tr>
      
    </tr>
  </tbody>
</table>
</div>
</div>


</body>
</html>
