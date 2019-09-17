@extends('template')

@section('main')
 <div id="siswa">
 <br>
  <h2 align="center">Siswa</h2>

  @if (!empty($siswa_list))
  <a href="{{ url('siswa/create') }}" class="btn btn-primary" style="margin-bottom:15px;">+Tambah Siswa</a>
  <a href="{{ url('siswa/siswa_pdf') }}" target="_blank" class="btn btn-primary" style="margin-bottom:15px;">Cetak PDF</a>
  
    <table class="table text-center">
      <thead>
        <tr>
   
          <th>NISN</th>
          <th>Nama</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Kelas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

    @foreach ($siswa_list as $siswa)
    <tr>
      
       
      <td>{{ $siswa->nisn}}</td>
      <td>{{ $siswa->nama_siswa}}</td>
      <td>{{ $siswa->tanggal_lahir}}</td>
      <td>{{ $siswa->jenis_kelamin}}</td>
      <td>{{! empty($siswa->kelas->nama_kelas)?
        $siswa->kelas->nama_kelas : '-'}}</td>
      <td>
      <a class="btn btn-success btn-sm" href="{{ url('siswa/' . $siswa->id) }}">Detail</a>
      <a class="btn btn-warning btn-sm" href="{{ url('siswa/' . $siswa->id . '/edit') }}">Edit</a>
      <a class="btn btn-danger btn-sm" href="{{ url('siswa/' . $siswa->id . '/delete') }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
      </td>
    </tr>
    @endforeach
     

    
    </tbody>
    
    </table>
    

  @else
    <p>Tidak ada data siswa.</p>
  @endif
</div>
@stop

@section('footer')
  <div id="footer">
    <p>&copy; 2019 Belajar_laravel</p>
  </div>
@stop


