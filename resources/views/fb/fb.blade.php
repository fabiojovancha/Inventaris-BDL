@extends('layout.main')

@section('container')
<h1>List FB</h1>

<form action="{{ route('filterFB') }}" method="GET">
<div class="row pb-3">
  <div class="col-md-3">
    <label for="start_date">Tanggal Awal :</label>
    <input type="date" class="form-control" name="satu_date" id="start_date" value="{{ request('start_date') }}">
  </div>
  
  <div class="col-md-3">
    <label for="end_date">Tanggal Akhir :</label>
    <input type="date" class="form-control" name="dua_date" id="end_date" value="{{ request('start_date') }}">
  </div>

  <div class="col-md-3 align-self-end">
    <button type="submit" class="btn btn-primary">Filter</button>
  </div>
</div>
</form>

</form>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID FB</th>
      <th scope="col">ID Supplier</th>
      <th scope="col">Tanggal FB</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Discount </th>
      <th scope="col">Total Faktur</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($fb as $item)
    <tr>
        <td>{{ $item['idFB'] }}</td>
        <td>{{ $item['idSupplier'] }}</td>
        <td>{{ \Carbon\Carbon::parse($item['tglFB'])->format('d-m-Y') }}</td>
        <td>Rp.{{ number_format($item['subtotal'], 2) }}</td>
        <td>Rp.{{ number_format($item['diskon'], 2) }}</td>
        <td>Rp.{{ number_format($item['totalFaktur'], 2) }}</td>
        <td>  
              <a href="{{route('showFB',['idFB'=>$item->idFB])}}" class="btn btn-success">FBDet</a>
              <a href="{{route('editFB',['idFB'=>$item->idFB])}}" class="btn btn-warning glyphicon glyphicon-trash">Edit</a>
              <form action="{{route('deleteFB',['idFB'=>$item->idFB])}}" method="POST" style="display:inline;">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>        
        </td>
    </tr>
      @endforeach
  </tbody>
</table>
<div class="text-right">
  <a href="{{route('createFB')}}" class="btn btn-primary" role="button">Form Add Barang</a>
</div>
@endsection