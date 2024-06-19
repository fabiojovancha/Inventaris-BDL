@extends('layout.main')

@section('container')
<h1>Add Faktur Jual Det</h1>
<form method="post" action="{{route('storeFJDet')}}">
    @csrf
  <div class="form-group row mt-4">
    <label for="idFJ" class="col-sm-2 col-form-label">ID FJ</label>
    <div class="col-sm-10">
      <input type="text"  name="idFJ" class="form-control" id="idFJ" placeholder="ID FJ">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="idPelanggan" class="col-sm-2 col-form-label">ID Pelanggan</label>
        <div class="col-sm-10">
            <select name="idPelanggan" class="form-control" id="idPelanggan">
                <option value="">-- Select ID Pelanggan --</option>
                @foreach($barangs as $barang)
                    <option value="{{ $barang->idBarang }}">{{ $barang->namaBarang }}</option>
                @endforeach
            </select>
        </div>
    </div>


  <div class="form-group row mt-4">
    <label for="subtotal" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="number" name="subtotal" class="form-control" id="subtotal" placeholder="subtotal">
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="hargaJual" class="col-sm-2 col-form-label">harga Jual</label>
    <div class="col-sm-10">
      <input type="text" name="hargaJual"  class="form-control" id="hargaJual" placeholder="Harga Jual">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="FJ_idFJ" class="col-sm-2 col-form-label">FJ_idFJ</label>
    <div class="col-sm-10">
      <input type="text" name="FJ_idFJ" class="form-control" id="FJ_idFJ" placeholder="FJ ID">
    </div>

    <div class="text-right mt-5">
        <a href="{{route('listBarang')}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
  </div>
  </div>
</form>

@endsection