@extends('template')

@section('main')
      <div id="walikelas">
      <div class="container">
      <div class="mt-4">
      <div class="col=md-8">
      <br>
            <h2 align="center">Detail Walikelas</h2>
            <br>
            <table class="table table-striped">

            <tr>
                  <th>ID</th>
                  <td>{{ $walikelas->id }}</td>
            </tr>
            <tr>
                  <th>Nama Guru</th>
                  <td>{{ !empty($walikelas->guru->nama_guru)?
                  $walikelas->guru->nama_guru : '-'}}</td>
            </tr>

            <tr>
                  <th>Nama Kelas</th>
                  <td>{{ !empty($walikelas->kelas->nama_kelas)?
                  $walikelas->kelas->nama_kelas : '-'}}</td>
            </tr>

            </table>
      </div>
      <center>
      <button type="button"  class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/walikelas'">Back</button>
      
      </form>
      </div>
    </div>
  </div>
</div>
@stop


