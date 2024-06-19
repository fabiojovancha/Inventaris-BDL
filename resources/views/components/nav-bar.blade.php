
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Inventaris</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('listBarang')}}">Barang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('listTipeBarang')}}">TipeBarang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('listFJ')}}">Faktur Jual</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('listFB')}}">Faktur Beli</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('listPelanggan')}}">Pelanggan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('listSupplier')}}">Supplier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('listLogBarang')}}">Log Barang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}" onclick="return confirm('Are you sure?')">Log Out</a>
            </li>
        </ul>
        </div>
    </div>
</nav>