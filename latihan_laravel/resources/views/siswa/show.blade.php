@extends('template')

@section('main')
      <div id="siswa">
      <div class="container">
      <div class="mt-4">
      <div class="col=md-8">

            <h2 align="center">Detail Siswa</h2><br>

            <table class="table table-striped">
            <tr>
            <center>
                  <img class="rounded" src="{{asset('images/'.$siswa->image)}}" width="300px" height="auto">
            </tr>
            <br>
            <tr>
            
                  <th>NISN</th>
                  <td>{{ $siswa->nisn }}</td>
            </tr>

            <tr>
                  <th>Nama</th>
                  <td>{{ $siswa->nama_siswa }}</td>
            </tr>

            <tr>
                  <th>Tanggal Lahir</th>
                  <td>{{ $siswa->tanggal_lahir }}</td>
            </tr>

            <tr>
                  <th>Jenis Kelamin</th>
                  <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>

            <tr>
                  <th>Kelas</th>
                  <td>{{! empty($siswa->kelas->nama_kelas)?
                  $siswa->kelas->nama_kelas : '-'}}</td>
            </tr>

            </table>
            </div>
      <center>
      <button type="button"  class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/siswa'">Back</button>
      
      </form>
      </div>
    </div>
  </div>
</div>
@stop


