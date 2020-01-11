
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    {{-- {!! Charts::assets() !!} --}}
    <title>Data Buku</title>

  </head>
  <body>
  	<div class="container">
  		<div class="row">
    		<div class="col-sm">
          
          <br />
          <h2>FORM SHOW BARANG</h2>
          <a href="/tambahbarang" class="btn btn-primary">Tambah Barang</a>
          <br /><br />

          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Image</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>kondisi</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ( $viewadmin as $barang )
            
            
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang->image }}</td>
                <td>{{ $barang->nama }}</td>
                <td>{{ $barang->kategori }}</td>
                <td>{{ $barang->harga }}</td>
                <td>{{ $barang->kondisi }}</td>
                <td><a href="viewadmindelete/{{ $barang->id }}" class="btn btn-info btn-sm">view</a></td>
                
              </tr>
              
              @endforeach
            </tbody>
          </table>

          {{-- <div class="panel-body">
            {!! $chart->render() !!}
          </div> --}}

        </div>
      </div>
    </div>
  </body>
</html>