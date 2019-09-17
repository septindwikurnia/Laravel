@extends('template')

@section('main')
 <div  id="walikelas">
 <br>
  <h2 align="center">walikelas</h2>

  @if (!empty($walikelas_list))
  <a href="{{ url('walikelas/create') }}" style="margin-bottom:15px;" class="btn btn-primary">+Tambah walikelas</a>
    <table class="table text-center">
      <thead>
        <tr>
        <th>ID</th>
          <th>Nama Guru</th>
          <th>Nama Kelas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

    @foreach ($walikelas_list as $walikelas)
    <tr>
    <td>{{ $walikelas->id }}</td>
      <td>{{ !empty($walikelas->guru->nama_guru)?
      $walikelas->guru->nama_guru : '-'}}</td>
      
      <td>{{ !empty($walikelas->kelas->nama_kelas)?
      $walikelas->kelas->nama_kelas : '-'}}</td>

      <td>
      <a class="btn btn-success btn-sm" href="{{ url('walikelas/' . $walikelas->id) }}">Detail</a>
      <a class="btn btn-warning btn-sm" href="{{ url('walikelas/' . $walikelas->id . '/edit') }}">Edit</a>
      <a class="btn btn-danger btn-sm" href="{{ url('walikelas/' . $walikelas->id . '/delete') }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
      </td>
    </tr>
    @endforeach
    </tbody>
    
    </table>
    

  @else
    <p>Tidak ada data walikelas.</p>
  @endif
</div>
@stop

@section('footer')
  <div id="footer">
    <p>&copy; 2019 Belajar_laravel</p>
  </div>
@stop


