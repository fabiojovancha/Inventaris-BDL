@extends('layout.main')

@section('container')
<h1>Add Faktur Jual</h1>
<form method="post" action="{{route('storeFB')}}">
    @csrf
  <div class="form-group row mt-4">
    <label for="idFB" class="col-sm-2 col-form-label">ID FB</label>
    <div class="col-sm-10">
      <input type="text"  name="idFB" class="form-control" id="idFB" placeholder="ID FB">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="idSupplier" class="col-sm-2 col-form-label">ID Supplier</label>
        <div class="col-sm-10">
            <select name="idSupplier" class="form-control" id="idSupplier">
                <option value="">-- Select ID Supplier --</option>
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->idSupplier }}">{{ $supplier->namaSupplier }}</option>
                @endforeach
            </select>
        </div>
    </div>

  <div class="form-group row mt-4">
        <label for="tglFB" class="col-sm-2 col-form-label">Tanggal FB</label>
        <div class="col-sm-10">
            <input type="date" name="tglFB" class="form-control" id="tglFB" >
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