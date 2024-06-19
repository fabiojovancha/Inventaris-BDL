@extends('layout.main')

@section('container')
<h1>Edit Faktur Jual</h1>
<form method="post" action="{{route('updateFJ',['idFJ'=>$fj->idFJ])}}">
    @csrf
    @method('PUT')
    
  <div class="form-group row mt-4">
    <label for="idFJ" class="col-sm-2 col-form-label">ID Pelanggan</label>
    <div class="col-sm-10">
      <input type="text"  name="idFJ" class="form-control" id="idFJ" placeholder="idFJ" value="{{ $fj->idFJ }}" readonly>
    </div>
  </div>
  
  <div class="form-group row mt-4">
    <label for="idPelanggan" class="col-sm-2 col-form-label">ID Pelanggan</label>
    <div class="col-sm-10">
      <input type="text"  name="idPelanggan" class="form-control" id="idPelanggan" placeholder="idPelanggan" value="{{ $fj->idPelanggan }}">
    </div>
  </div>
  
  <div class="form-group row mt-4">
        <label for="tglFJ" class="col-sm-2 col-form-label">Tanggal FJ</label>
        <div class="col-sm-10">
            <input type="date" name="tglFJ" class="form-control" id="tglFJ" value="{{ $fj->tglFJ }}">
        </div>
    </div>

  <div class="form-group row mt-4">
    <label for="subtotal" class="col-sm-2 col-form-label">Subtotal</label>
    <div class="col-sm-10">
      <input type="number" name="subtotal" class="form-control" id="subtotal" placeholder="subtotal" value="{{ $fj->subtotal }}">
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="diskon" class="col-sm-2 col-form-label">Diskon</label>
    <div class="col-sm-10">
      <input type="text" name="diskon"  class="form-control" id="diskon" placeholder="Harga Beli" value="{{ $fj->diskon }}">
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="totalFaktur" class="col-sm-2 col-form-label">totalFaktur</label>
    <div class="col-sm-10">
      <input type="text" name="totalFaktur" class="form-control" id="totalFaktur" placeholder="Harga Jual" value="{{ $fj->totalFaktur }}">
    </div>

    </div> 

    <div class="text-right mt-5">
        <a href="{{route('listFJ')}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

@endsection