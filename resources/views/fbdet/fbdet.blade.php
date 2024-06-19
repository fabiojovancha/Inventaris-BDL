@extends('layout.main')

@section('container')
<h1>FJ Det</h1>

</form>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID FJ</th>
      <th scope="col">ID Barang</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Harga Jual</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($fbdet as $item)
    <tr>
        <td>{{ $item['idFB'] }}</td>
        <td>{{ $item['idBarang'] }}</td>
        <td>{{ $item['jumlah']}}</td>
        <td>Rp.{{ number_format($item['hargaBeli'], 2) }}</td>
        <td>  
              <a href="#" class="btn btn-warning glyphicon glyphicon-trash">Edit</a>
              <form action="#" method="POST" style="display:inline;">
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
  <a href="route('crateFBDet')" class="btn btn-primary" role="button">Form Add Barang</a>
</div>
@endsection