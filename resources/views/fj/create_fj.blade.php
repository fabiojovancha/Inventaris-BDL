@extends('layout.main')

@section('container')
<h1>Add Faktur Jual</h1>
<form method="post" action="{{route('storeFJ')}}">
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
                @foreach($pelanggans as $pelanggan)
                    <option value="{{ $pelanggan->idPelanggan }}">{{ $pelanggan->namaPelanggan }}</option>
                @endforeach
            </select>
        </div>
    </div>

  <div class="form-group row mt-4">
        <label for="tglFJ" class="col-sm-2 col-form-label">Tanggal FJ</label>
        <div class="col-sm-10">
            <input type="date" name="tglFJ" class="form-control" id="tglFJ" >
        </div>
    </div>

  <div class="form-group row mt-4">
    <label for="subtotal" class="col-sm-2 col-form-label">Subtotal</label>
    <div class="col-sm-10">
      <input type="number" name="subtotal" class="form-control" id="subtotal" placeholder="subtotal">
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="diskon" class="col-sm-2 col-form-label">Diskon</label>
    <div class="col-sm-10">
      <input type="text" name="diskon"  class="form-control" id="diskon" placeholder="Harga Beli">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="totalFaktur" class="col-sm-2 col-form-label">totalFaktur</label>
    <div class="col-sm-10">
      <input type="text" name="totalFaktur" class="form-control" id="totalFaktur" placeholder="Harga Jual">
    </div>

    <div class="text-right mt-5">
        <a href="{{route('listBarang')}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
  </div>
  </div>
</form>

@endsection