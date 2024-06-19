@extends('layout.main')

@section('container')
<h1>Add Pelanggan</h1>
<form method="post" action="{{route('storePelanggan')}}">
    @csrf
    <div class="form-group row mt-4">
        <label for="idPelanggan" class="col-sm-2 col-form-label">ID Pelanggan</label>
        <div class="col-sm-10">
        <input type="text"  name="idPelanggan" class="form-control" id="idPelanggan" placeholder="ID Pelanggan">
        </div>
    </div>

    <div class="form-group row mt-4">
        <label for="namaPelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
        <div class="col-sm-10">
        <input type="text"  name="namaPelanggan" class="form-control" id="namaPelanggan" placeholder="Nama Pelanggan">
        </div>
    </div>

  
    <div class="form-group row mt-4">
        <label for="alamatPelanggan" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamatPelanggan" class="form-control" id="alamatPelanggan" placeholder="Alamat">
        </div>
    </div>

    <div class="form-group row mt-4">
    <label for="telepon" class="col-sm-2 col-form-label">telepon</label>
    <div class="col-sm-10">
      <input type="text" name="telepon" class="form-control" id="telepon" placeholder="telepon">
    </div>
    
    <div class="text-right">
        <a href="{{route('listPelanggan')}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

@endsection