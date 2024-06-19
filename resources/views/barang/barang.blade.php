@extends('layout.main')

@section('container')
<h1>List Barang</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">ID Tipe Barang</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga Beli</th>
      <th scope="col">Harga Jual</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($barang as $item)
    <tr>
        <td>{{ $item['idBarang'] }}</td>
        <td>{{ $item['namaBarang'] }}</td>
        <td>{{ $item['idTipeBarang'] }}</td>
        <td>{{ $item['jumlah'] }}</td>
        <td>Rp.{{ number_format($item['hargaBeli'], 2) }}</td>
        <td>Rp.{{ number_format($item['hargaJual'], 2) }}</td>
        <td>
             <a href="{{route('editBarang',['idBarang'=>$item->idBarang])}}" class="btn btn-warning glyphicon glyphicon-trash">Edit</a>
             <form action="{{ route('deleteBarang', ['idBarang' => $item->idBarang]) }}" method="POST" style="display:inline;" onclick="return confirm('Are you sure?')">
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
  <a href="{{route('createBarang')}}" class="btn btn-primary" role="button">Form Add Barang</a>
</div>
@endsection