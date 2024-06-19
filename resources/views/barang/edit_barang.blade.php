@extends('layout.main')

@section('container')
<h1>Edit Barang</h1>
<form method="post" action="{{route('updateBarang',['idBarang'=>$barang->idBarang])}}">
    @csrf
    @method('PUT')

  <div class="form-group row mt-4">
    <label for="namaBarang" class="col-sm-2 col-form-label">ID Barang</label>
    <div class="col-sm-10">
      <input type="text"  name="namaBarang" class="form-control" id="namaBarang" placeholder="Nama Barang" value="{{ $barang->idBarang }}" readonly>
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
    <div class="col-sm-10">
      <input type="text"  name="namaBarang" class="form-control" id="namaBarang" placeholder="Nama Barang" value="{{ $barang->namaBarang }}">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="idTipeBarang" class="col-sm-2 col-form-label">Id Tipe Barang</label>
    <div class="col-sm-10">
      <input type="text" name="idTipeBarang"  class="form-control" id="idTipeBarang" placeholder="ID Tipe Barang" value="{{ $barang->idTipeBarang }}">
    </div>
  </div>
  
  <div class="form-group row mt-4">
    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah" value="{{ $barang->jumlah }}">
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="hargaBeli" class="col-sm-2 col-form-label">Harga Beli</label>
    <div class="col-sm-10">
      <input type="text" name="hargaBeli"  class="form-control" id="hargaBeli" placeholder="Harga Beli" value="{{ $barang->hargaBeli }}">
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="hargaJual" class="col-sm-2 col-form-label">Harga Jual</label>
    <div class="col-sm-10">
      <input type="text" name="hargaJual" class="form-control" id="hargaJual" placeholder="Harga Jual" value="{{ $barang->hargaJual }}">
    </div>

    <div class="text-right mt-5">
        <a href="{{route('listBarang')}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

@endsection