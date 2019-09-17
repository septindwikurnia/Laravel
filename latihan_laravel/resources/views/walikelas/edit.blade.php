@extends('template')

@section('main')
      <div id="walikelas">
      <div class="container">
      <div class="mt-4">
      <div class="col=md-8">
      <br>
      <h2 align="center">Edit Walikelas</h2>
      <form action="{{ url('walikelas/' . $walikelas->id . '/update') }}" method="post">
@csrf
      <br>
      <div class="form-group">
      <label for="id_guru" class="control-label">Nama Guru</label>
      <select  class="form-control" type="text" name="id_guru">
            @foreach ($guru as $g)
                  <option value="{{$g->id}}">{{$g->nama_guru}}</option>
            @endforeach
      </select>
      </div>

      <div class="form-group">
      <label for="id_kelas" class="control-label">Nama Kelas</label>
      <select  class="form-control" type="text" name="id_kelas">
            @foreach ($kelas as $k)
                  <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
            @endforeach
      </select>
      </div>

      </div>
      <center>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button"  class="btn btn-primary" onclick="window.location='http://localhost/latihan_laravel/public/walikelas'">Cancel</button>

      </form>
      </div>
    </div>
  </div>
</div>
@stop

