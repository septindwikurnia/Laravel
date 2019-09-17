@extends('template')

@section('main')
<div id="kelas">
  <div class="container">
    <div class="mt-4">
      <div class="col=md-8">
      <br>
          <h2 align="center">Edit Kelas</h2>
          <form action="{{ url('kelas/' .$kelas->id.'/update')}}" method="post">
            @csrf
            <br>
            <div class="form-group">
              <label for="id" class="control-label">ID Kelas</label>
              <input name="id" type="text" class="form-control" value="{{$kelas->id}}">
            </div>

            <div class="form-group">
              <label for="nama_kelas" class="control-label">Nama</label>
              <input name="nama_kelas" type="text" class="form-control" value="{{$kelas->nama_kelas}}">
            </div>

          </div>
          <center>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button"  class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/kelas'">Cancel</button>

        </form>
      </div>
    </div>
  </div>
</div>
@stop
