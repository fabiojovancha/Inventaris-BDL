
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
                <a class="nav-link" href="<?php echo e(route('listBarang')); ?>">Barang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('listTipeBarang')); ?>">TipeBarang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('listFJ')); ?>">Faktur Jual</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('listFB')); ?>">Faktur Beli</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('listPelanggan')); ?>">Pelanggan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('listSupplier')); ?>">Supplier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('listLogBarang')); ?>">Log Barang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="return confirm('Are you sure?')">Log Out</a>
            </li>
        </ul>
        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\Inventaris\resources\views/components/nav-bar.blade.php ENDPATH**/ ?>