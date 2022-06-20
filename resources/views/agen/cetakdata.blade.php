
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table.static {
            position: relative;
            border : 1px solid #543535;
        }
        </style>
    <title>Cetak Data</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan data</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
           
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">peminjam</th>
              <th scope="col">jumlah pinjaman</th>
              <th scope="col">jangka waktu</th>
              <th scope="col">bayar perbulan</th>
              <th scope="col">status</th>
              <th scope="col">agen</th>
             
           
            </tr>
          </thead>
          <tbody>
               @foreach ($models as $value)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->nama_peminjam }}</td>
                    <td>{{ number_format($value->jumlah,0, '.', '.') }}</td>
                    <td>{{ $value->jangka_waktu }}</td>
                     <td>{{ number_format($value->bayar_perbulan,0, '.', '.') }}</td>
                      <td>{{ $value->status }}</td>
                      <td>{{ $value->nama_agen}}</td>
               
                  </tr>
                  @endforeach
          </tbody>
        </table>
      </div>

</body>
</html>
