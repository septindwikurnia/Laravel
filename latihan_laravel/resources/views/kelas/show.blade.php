@extends('template')

@section('main')
      <div id="kelas">
      <div class="container">
      <div class="mt-4">
      <div class="col=md-8">
      <br>
            <h2 align="center">Detail Kelas</h2>
            <br>
            <table class="table table-striped">
            <tr>
                  <th>ID</th>
                  <td>{{ $kelas->id }}</td>
            </tr>

            <tr>
                  <th>Nama Kelas</th>
                  <td>{{ $kelas->nama_kelas }}</td>
            </tr>

            </table>
      </div>
      <center>
      <button type="button" class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/kelas'">Cancel</button>
      </form>
      </div>
    </div>
  </div>
</div>
@stop



