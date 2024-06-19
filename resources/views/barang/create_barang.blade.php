@extends('layout.main')

@section('container')
<h1>Add Barang</h1>
<form method="post" action="{{route('storeBarang')}}">
    @csrf
  <div class="form-group row mt-4">
    <label for="idBarang" class="col-sm-2 col-form-label">ID Barang</label>
    <div class="col-sm-10">
      <input type="text"  name="idBarang" class="form-control" id="idBarang" placeholder="ID Barang" required>
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
    <div class="col-sm-10">
      <input type="text"  name="namaBarang" class="form-control" id="namaBarang" placeholder="Nama Barang" required>
    </div>
  </div>

  <div class="form-group row mt-4">
        <label for="idTipeBarang" class="col-sm-2 col-form-label">Tipe Barang</label>
        <div class="col-sm-10">
            <select name="idTipeBarang" class="form-control" id="idTipeBarang">
                <option value="">-- Select Tipe Barang --</option>
                @foreach($tipeBarangs as $tipeBarang)
                    <option value="{{ $tipeBarang->idTipeBarang }}">{{ $tipeBarang->tipeBarang }}</option>
                @endforeach
            </select>
        </div>
    </div>
  
  <div class="form-group row mt-4">
    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah" required>
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="hargaBeli" class="col-sm-2 col-form-label">Harga Beli</label>
    <div class="col-sm-10">
      <input type="text" name="hargaBeli"  class="form-control" id="hargaBeli" placeholder="Harga Beli" required>
    </div>

  </div>  
  <div class="form-group row mt-4">
    <label for="hargaJual" class="col-sm-2 col-form-label">Harga Jual</label>
    <div class="col-sm-10">
      <input type="text" name="hargaJual" class="form-control" id="hargaJual" placeholder="Harga Jual" required>
    </div>

    <div class="text-right mt-4">
        <a href="{{route('listBarang')}}" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

@endsection