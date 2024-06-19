

<?php $__env->startSection('container'); ?>
<h1>Edit Tipe Barang</h1>
<form method="post" action="<?php echo e(route('updateTipeBarang',['idTipeBarang'=>$tipebarang->idTipeBarang])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

  <div class="form-group row mt-4">
    <label for="idTipeBarang" class="col-sm-2 col-form-label">ID Tipe Barang</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?php echo e($tipebarang->idTipeBarang); ?>" readonly>    
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="tipeBarang" class="col-sm-2 col-form-label">Tipe Barang</label>
    <div class="col-sm-10">
      <input type="text"  name="tipeBarang" class="form-control" id="tipeBarang" placeholder="Nama Barang" value="<?php echo e($tipebarang->tipeBarang); ?>">
    </div>
  </div>

    <div class="text-right mt-5">
        <a href="<?php echo e(route('listTipeBarang')); ?>" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Inventaris\resources\views/tipebarang/edit_tipebarang.blade.php ENDPATH**/ ?>