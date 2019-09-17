@extends('template')

@section('main')
      <div id="guru">
      <div class="container">
      <div class="mt-4">
      <div class="col=md-8">
      <br>
      <h2 align="center">Edit Guru</h2>

      <form action="{{ url('guru/' . $guru->id . '/update') }}" method="post">

{{csrf_field()}}
<br>
      <div class="form-group">
      <label for="nip" class="control-label">NIP</label>
      <input name="nip" type="text" class="form-control" value="{{$guru->nip}}">
      </div>

      <div class="form-group">
      <label for="nama_guru" class="control-label">Nama</label>
      <input name="nama_guru" type="text" class="form-control" value="{{$guru->nama_guru}}">
      </div>

      <div class="form-group">

      <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
      <input name="tanggal_lahir" type="date" class="form-control" value="{{$guru->tanggal_lahir}}">
      </div>

      <div class="form-group">
      <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
@if ($guru->jenis_kelamin=="P")
      <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked>
      <label class="form-check-label" for="jenis_kelamin"> Perempuan
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">
      <label class="form-check-label" for="jenis_kelamin">
Laki-Laki
      </label>
      </div>
@elseif ($guru->jenis_kelamin=="L")
      <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">
      <label class="form-check-label" for="jenis_kelamin"> Perempuan
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>
      <label class="form-check-label" for="jenis_kelamin"> Laki-Laki
      </label>
      </div>
      
@endif

      </div>
      <center>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button"  class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/guru'">Cancel</button>

            </form>
      </div>
    </div>
  </div>
</div>
@stop


