@extends('template')

@section('main')
 <div  id="guru">
 <br>
  <h2 align="center">Guru</h2>

  @if (!empty($guru_list))
  <a href="{{ url('guru/create') }}" style="margin-bottom:15px;" class="btn btn-primary">+Tambah Guru</a>
    <table class="table text-center">
      <thead>
        <tr>
   
          <th>NIP</th>
          <th>Nama</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

    @foreach ($guru_list as $guru)
    <tr>
      
      
      <td>{{ $guru->nip}}</td>
      <td>{{ $guru->nama_guru}}</td>
      <td>{{ $guru->tanggal_lahir}}</td>
      <td>{{ $guru->jenis_kelamin}}</td>
      <td>
      <a class="btn btn-success btn-sm" href="{{ url('guru/' . $guru->id) }}">Detail</a>
      <a class="btn btn-warning btn-sm" href="{{ url('guru/' . $guru->id . '/edit') }}">Edit</a>
      <a class="btn btn-danger btn-sm" href="{{ url('guru/' . $guru->id . '/delete') }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
      </td>
    </tr>
    @endforeach
    

    
    </tbody>
    
    </table>
    

  @else
    <p>Tidak ada data guru.</p>
  @endif
</div>
@stop

@section('footer')
  <div id="footer">
    <p>&copy; 2019 Belajar_laravel</p>
  </div>
@stop


