@extends('layout.main')

@section('container')
<h1>List FJ</h1>

<form action="{{ route('filterFJ') }}" method="GET">
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
      <th scope="col">ID FJ</th>
      <th scope="col">ID Pelanggan</th>
      <th scope="col">Tanggal FJ</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Discount </th>
      <th scope="col">Total Faktur</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($fj as $item)
    <tr>
        <td>{{ $item['idFJ'] }}</td>
        <td>{{ $item['idPelanggan'] }}</td>
        <td>{{ \Carbon\Carbon::parse($item['tglFJ'])->format('d-m-Y') }}</td>
        <td>Rp.{{ number_format($item['subtotal'], 2) }}</td>
        <td>Rp.{{ number_format($item['diskon'], 2) }}</td>
        <td>Rp.{{ number_format($item['totalFaktur'], 2) }}</td>
        <td>  
              <a href="{{route('showFJ',['idFJ'=>$item->idFJ])}}" class="btn btn-success">FJDet</a>
              <a href="{{route('editFJ',['idFJ'=>$item->idFJ])}}" class="btn btn-warning glyphicon glyphicon-trash">Edit</a>
              <form action="{{route('deleteFJ',['idFJ'=>$item->idFJ])}}" method="POST" style="display:inline;">
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
  <a href="{{route('createFJ')}}" class="btn btn-primary" role="button">Form Add Barang</a>
</div>
@endsection