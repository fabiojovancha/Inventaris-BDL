@extends('layout.main')

@section('container')
<h1>List Barang</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID Pelanggan</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Alamat</th>
      <th scope="col">Telepon</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pelanggan as $item)
    <tr>
        <td>{{ $item['idPelanggan'] }}</td>
        <td>{{ $item['namaPelanggan'] }}</td>
        <td>{{ $item['alamatPelanggan'] }}</td>
        <td>{{ $item['telepon'] }}</td>
        <td>
             <a href="{{route('editPelanggan',['idPelanggan'=>$item->idPelanggan])}}" class="btn btn-warning glyphicon glyphicon-trash" >Edit</a>
             <form action="{{ route('deletePelanggan', ['idPelanggan' => $item->idPelanggan]) }}" method="POST" style="display:inline;"  onclick="return confirm('Are you sure?')">
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
  <a href="{{route('createPelanggan')}}" class="btn btn-primary" role="button">Form Add Pelanggan</a>
</div>
@endsection