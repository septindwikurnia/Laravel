<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Laporan PDF dengan DOMPDF</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
      <style type="text/css">
            table tr td, table tr th{
                  font-size: 9pt;
            }
      </style>

      <div>
      <center>
      <h4>Laporan PDF</h4>
      <h6><a target="_blank">XI RPL 5</a></h5>
      </center>

      <table class="table table-bordered">
            <thead>
            <tr>
                  <th>NISN</th>
                  <th>Nama</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Kelas</th>
            </tr>
            </thead>
            <tbody>
                  @php $i=1 @endphp
                  @foreach($siswa as $s)
                  <tr>
                  <td>{{ $s->nisn }}</td>
                  <td>{{ $s->nama_siswa }}</td>
                  <td>{{ $s->tanggal_lahir }}</td>
                  <td>{{ $s->jenis_kelamin }}</td>
                  <td>{{ $s->kelas->nama_kelas}}</td>
                  </tr>
                  @endforeach
                  </tbody>
      <div>
      </table>
</body>
</html>