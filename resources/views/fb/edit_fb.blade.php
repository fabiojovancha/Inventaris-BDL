@extends('layout.main')

@section('container')
<h1>Edit Faktur Jual</h1>
<form method="post" action="{{route('updateFB',['idFB'=>$FB->idFB])}}">
    @csrf
    @method('PUT')
    
  <div class="form-group row mt-4">
    <label for="idFB" class="col-sm-2 col-form-label">ID Pelanggan</label>
    <div class="col-sm-10">
      <input type="text"  name="idFB" class="form-control" id="idFB" placeholder="idFB" value="{{ $fb->idFB }}" readonly>
    </div>
  </div>
  
  <div class="form-group row mt-4">
    <label for="idPelanggan" class="col-sm-2 col-form-label">ID Pelanggan</label>
    <div class="col-sm-10">
      <input type="text"  name="idPelanggan" class="form-control" id="idPelanggan" placeholder="idPelanggan" value="{{ $fb->idPelanggan }}">
    </div>
  </div>
  
  <div class="form-group row mt-4">
        <label for="tglFB" class="col-sm-2 col-form-label">Tanggal FB</label>
        <div class="col-sm-10">
            <input type="date" name="tglFB" class="form-control" id="tglFB" value="{{ $fb->tglFB }}">
        </div>
    </div>

  <div class="form-group row mt-4">
    <label for="subtotal" class="col-sm-2 col-form-label">Subtotal</label>
    <div class="col-sm-10">
      <input type="number" name="subtotal" class="form-control" id="subtotal" placeholder="subtotal" value="{{ $fb->subtotal }}">
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="diskon" class="col-sm-2 col-form-label">Diskon</label>
    <div class="col-sm-10">
      <input type="text" name="diskon"  class="form-control" id="diskon" placeholder="Harga Beli" value="{{ $fb->diskon }}">
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="totalFaktur" class="col-sm-2 col-form-label">totalFaktur</label>
    <div class="col-sm-10">
      <input type="text" name="totalFaktur" class="form-control" id="totalFaktur" placeholder="Harga Jual" value="{{ $fb->totalFaktur }}">
    </div>

    </div> 

    <div class="text-right mt-5">
        <a href="{{route('listFB')}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

@endsection