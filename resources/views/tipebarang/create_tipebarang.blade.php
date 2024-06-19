@extends('layout.main')

@section('container')
<h1>Add Tipe Barang</h1>
<form method="post" action="{{route('storeTipeBarang')}}">
    @csrf
  <div class="form-group row mt-4">
    <label for="idTipeBarang" class="col-sm-2 col-form-label">ID Tipe Barang</label>
    <div class="col-sm-10">
      <input type="text"  name="idTipeBarang" class="form-control" id="idTipeBarang" placeholder="ID Tipe Barang">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="tipeBarang" class="col-sm-2 col-form-label">Tipe Barang</label>
    <div class="col-sm-10">
      <input type="text"  name="tipeBarang" class="form-control" id="tipeBarang" placeholder="Nama Barang">
    </div>
  </div>

    <div class="text-right mt-5">
        <a href="{{route('listTipeBarang')}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

@endsection