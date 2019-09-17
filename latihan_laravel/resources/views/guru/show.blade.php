@extends('template')

@section('main')
      <div id="guru">
      <div class="container">
      <div class="mt-4">
      <div class="col=md-8">
      <br>
            <h2 align="center">Detail Guru</h2>
            <br>
            <table class="table table-striped">
            <tr>
                  <th>NISN</th>
                  <td>{{ $guru->nip }}</td>
            </tr>

            <tr>
                  <th>Nama</th>
                  <td>{{ $guru->nama_guru }}</td>
            </tr>

            <tr>
                  <th>Tanggal Lahir</th>
                  <td>{{ $guru->tanggal_lahir }}</td>
            </tr>

            <tr>
                  <th>Jenis Kelamin</th>
                  <td>{{ $guru->jenis_kelamin }}</td>
            </tr>
            </table>
      </div>
      <center>
      <button type="button"  class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/guru'">Back</button>
      
@stop


