@extends('layout.main')

@section('container')
<h1>List Barang</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($tipebarang as $item)
    <tr>
        <td>{{ $item['idTipeBarang'] }}</td>
        <td>{{ $item['tipeBarang'] }}</td>
        <td>
             <a href="{{route('editTipeBarang',['idTipeBarang'=>$item->idTipeBarang])}}" class="btn btn-warning glyphicon glyphicon-trash">Edit</a>
             <form action="{{route('deleteTipeBarang',['idTipeBarang'=>$item->idTipeBarang])}}" method="POST" style="display:inline;"  onclick="return confirm('Are you sure?')">
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
  <a href="{{route('createTipeBarang')}}" class="btn btn-primary" role="button">Form Add Tipe</a>
</div>
@endsection