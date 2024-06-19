

<?php $__env->startSection('container'); ?>
<h1>Edit Faktur Jual</h1>
<form method="post" action="<?php echo e(route('updateFJ',['idFJ'=>$fj->idFJ])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    
  <div class="form-group row mt-4">
    <label for="idFJ" class="col-sm-2 col-form-label">ID Pelanggan</label>
    <div class="col-sm-10">
      <input type="text"  name="idFJ" class="form-control" id="idFJ" placeholder="idFJ" value="<?php echo e($fj->idFJ); ?>" readonly>
    </div>
  </div>
  
  <div class="form-group row mt-4">
    <label for="idPelanggan" class="col-sm-2 col-form-label">ID Pelanggan</label>
    <div class="col-sm-10">
      <input type="text"  name="idPelanggan" class="form-control" id="idPelanggan" placeholder="idPelanggan" value="<?php echo e($fj->idPelanggan); ?>">
    </div>
  </div>
  
  <div class="form-group row mt-4">
        <label for="tglFJ" class="col-sm-2 col-form-label">Tanggal FJ</label>
        <div class="col-sm-10">
            <input type="date" name="tglFJ" class="form-control" id="tglFJ" value="<?php echo e($fj->tglFJ); ?>">
        </div>
    </div>

  <div class="form-group row mt-4">
    <label for="subtotal" class="col-sm-2 col-form-label">Subtotal</label>
    <div class="col-sm-10">
      <input type="number" name="subtotal" class="form-control" id="subtotal" placeholder="subtotal" value="<?php echo e($fj->subtotal); ?>">
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="diskon" class="col-sm-2 col-form-label">Diskon</label>
    <div class="col-sm-10">
      <input type="text" name="diskon"  class="form-control" id="diskon" placeholder="Harga Beli" value="<?php echo e($fj->diskon); ?>">
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="totalFaktur" class="col-sm-2 col-form-label">totalFaktur</label>
    <div class="col-sm-10">
      <input type="text" name="totalFaktur" class="form-control" id="totalFaktur" placeholder="Harga Jual" value="<?php echo e($fj->totalFaktur); ?>">
    </div>

    </div> 

    <div class="text-right mt-5">
        <a href="<?php echo e(route('listFJ')); ?>" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Inventaris\resources\views/fj/edit_fj.blade.php ENDPATH**/ ?>