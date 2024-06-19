@extends('layout.main')

@section('container')
<h1>List Supplier</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID Supplier</th>
      <th scope="col">Nama Supplier</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kote</th>
      <th scope="col">Telepon</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($supplier as $item)
    <tr>
        <td>{{ $item['idSupplier'] }}</td>
        <td>{{ $item['namaSupplier'] }}</td>
        <td>{{ $item['alamat'] }}</td>
        <td>{{ $item['kota'] }}</td>
        <td>{{ $item['telepon'] }}</td>
        <td>
             <a href="{{route('editSupplier',['idSupplier'=>$item->idSupplier])}}" class="btn btn-warning glyphicon glyphicon-trash" >Edit</a>
             <form action="{{ route('deleteSupplier', ['idSupplier' => $item->idSupplier]) }}" method="POST" style="display:inline;"  onclick="return confirm('Are you sure?')">
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
  <a href="{{route('createSupplier')}}" class="btn btn-primary" role="button">Form Add Pelanggan</a>
</div>
@endsection