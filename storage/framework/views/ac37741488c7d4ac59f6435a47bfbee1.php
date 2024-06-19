

<?php $__env->startSection('container'); ?>
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
    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($item['idBarang']); ?></td>
        <td><?php echo e($item['namaBarang']); ?></td>
        <td><?php echo e($item['idTipeBarang']); ?></td>
        <td><?php echo e($item['jumlah']); ?></td>
        <td>Rp.<?php echo e(number_format($item['hargaBeli'], 2)); ?></td>
        <td>Rp.<?php echo e(number_format($item['hargaJual'], 2)); ?></td>
        <td>
             <a href="<?php echo e(route('editBarang',['idBarang'=>$item->idBarang])); ?>" class="btn btn-warning glyphicon glyphicon-trash">Edit</a>
             <form action="<?php echo e(route('deleteBarang', ['idBarang' => $item->idBarang])); ?>" method="POST" style="display:inline;" onclick="return confirm('Are you sure?')">
                 <?php echo csrf_field(); ?>
                 <?php echo method_field('delete'); ?>
                 <button type="submit" class="btn btn-danger">Delete</button>
             </form>        
        </td>
    </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<div class="text-right">
  <a href="<?php echo e(route('createBarang')); ?>" class="btn btn-primary" role="button">Form Add Barang</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Inventaris\resources\views/barang/barang.blade.php ENDPATH**/ ?>