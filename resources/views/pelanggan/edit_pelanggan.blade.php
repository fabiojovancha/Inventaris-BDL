@extends('layout.main')

@section('container')
<h1>Edit Pelanggan</h1>
<form method="post" action="{{route('updatePelanggan',['idPelanggan'=>$pelanggan->idPelanggan])}}">
    @csrf
    @method('PUT')
    <h2>ID Pelanggan : {{$pelanggan->idPelanggan}}</h2>
  <div class="form-group row mt-4">
    <label for="namaPelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
    <div class="col-sm-10">
      <input type="text"  name="namaPelanggan" class="form-control" id="namaPelanggan" placeholder="Nama Pelanggan" value="{{ $pelanggan->namaPelanggan }}">
    </div>
  </div>

  
  <div class="form-group row mt-4">
        <label for="alamatPelanggan" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamatPelanggan" class="form-control" id="alamatPelanggan" placeholder="Alamat" value="{{$pelanggan->alamatPelanggan}}">
        </div>
    </div>

  <div class="form-group row mt-4">
    <label for="telepon" class="col-sm-2 col-form-label">telepon</label>
    <div class="col-sm-10">
      <input type="number" name="telepon" class="form-control" id="telepon" placeholder="telepon" value="{{$pelanggan->telepon}}">
    </div>

    <div class="text-right">
        <a href="{{route('listPelanggan')}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

@endsection