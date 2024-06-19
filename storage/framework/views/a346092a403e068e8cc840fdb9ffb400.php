

<?php $__env->startSection('container'); ?>
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
    <?php $__currentLoopData = $tipebarang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($item['idTipeBarang']); ?></td>
        <td><?php echo e($item['tipeBarang']); ?></td>
        <td>
             <a href="<?php echo e(route('editTipeBarang',['idTipeBarang'=>$item->idTipeBarang])); ?>" class="btn btn-warning glyphicon glyphicon-trash">Edit</a>
             <form action="<?php echo e(route('deleteTipeBarang',['idTipeBarang'=>$item->idTipeBarang])); ?>" method="POST" style="display:inline;"  onclick="return confirm('Are you sure?')">
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
  <a href="<?php echo e(route('createTipeBarang')); ?>" class="btn btn-primary" role="button">Form Add Tipe</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Inventaris\resources\views/tipebarang/tipebarang.blade.php ENDPATH**/ ?>