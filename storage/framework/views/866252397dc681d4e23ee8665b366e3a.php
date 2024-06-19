

<?php $__env->startSection('container'); ?>
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
    <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($item['idSupplier']); ?></td>
        <td><?php echo e($item['namaSupplier']); ?></td>
        <td><?php echo e($item['alamat']); ?></td>
        <td><?php echo e($item['kota']); ?></td>
        <td><?php echo e($item['telepon']); ?></td>
        <td>
             <a href="<?php echo e(route('editSupplier',['idSupplier'=>$item->idSupplier])); ?>" class="btn btn-warning glyphicon glyphicon-trash" >Edit</a>
             <form action="<?php echo e(route('deleteSupplier', ['idSupplier' => $item->idSupplier])); ?>" method="POST" style="display:inline;"  onclick="return confirm('Are you sure?')">
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
  <a href="<?php echo e(route('createSupplier')); ?>" class="btn btn-primary" role="button">Form Add Pelanggan</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Inventaris\resources\views/supplier/supplier.blade.php ENDPATH**/ ?>