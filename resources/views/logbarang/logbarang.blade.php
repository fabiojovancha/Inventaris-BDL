@extends('layout.main')

@section('container')
<h1>List Log Barang</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Pengguna</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    @foreach($logbarang as $item)
    <tr>
        <td>{{ $item->pengguna }}</td>
        <td>{{ $item->tanggal }}</td>
        <td>{{ $item->keterangan }}</td>
    </tr>
      @endforeach
  </tbody>
</table>
@endsection