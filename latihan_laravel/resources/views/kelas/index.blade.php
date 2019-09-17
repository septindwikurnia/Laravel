@extends('template')

@section('main')
 <div id="kelas">
 <br>
  <h2 align="center">Kelas</h2>

  @if (!empty($kelas_list))
  <a href="{{ url('kelas/create') }}" style="margin-bottom:15px;" class="btn btn-primary">+Tambah Kelas</a>
    <table class="table text-center">
      <thead>
        <tr>
   
          <th>ID</th>
          <th>Nama Kelas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

    @foreach ($kelas_list as $kelas)
    <tr>
      
      
      <td>{{ $kelas->id}}</td>
      <td>{{ $kelas->nama_kelas}}</td>
      <td>
      <a class="btn btn-success btn-sm" href="{{ url('kelas/' . $kelas->id) }}">Detail</a>
      <a class="btn btn-warning btn-sm" href="{{ url('kelas/' . $kelas->id . '/edit') }}">Edit</a>
      <a class="btn btn-danger btn-sm" href="{{ url('kelas/' . $kelas->id . '/delete') }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
      </td>
    </tr>
    @endforeach
    

    
    </tbody>
    
    </table>
    

  @else
    <p>Tidak ada Kelas.</p>
  @endif
</div>
@stop

@section('footer')
  <div id="footer">
    <p>&copy; 2019 Belajar_laravel</p>
  </div>
@stop


