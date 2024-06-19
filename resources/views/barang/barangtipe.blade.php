@extends('layout.main')

@section('container')
<h1>Jumlah Barang Pertipe</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">ID Tipe Barang</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($views as $item)
    <tr>
        <td>{{ $item['idTipeBarang'] }}</td>
        <td>{{ $item['tipeBarang'] }}</td>
        <td>{{ $item['idBarang'] }}</td>
    </tr>
      @endforeach
  </tbody>
</table>
@endsection