

<?php $__env->startSection('container'); ?>
<h1>Add Faktur Jual</h1>
<form method="post" action="<?php echo e(route('storeFB')); ?>">
    <?php echo csrf_field(); ?>
  <div class="form-group row mt-4">
    <label for="idFB" class="col-sm-2 col-form-label">ID FB</label>
    <div class="col-sm-10">
      <input type="text"  name="idFB" class="form-control" id="idFB" placeholder="ID FB">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="idSupplier" class="col-sm-2 col-form-label">ID Supplier</label>
        <div class="col-sm-10">
            <select name="idSupplier" class="form-control" id="idSupplier">
                <option value="">-- Select ID Supplier --</option>
                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($supplier->idSupplier); ?>"><?php echo e($supplier->namaSupplier); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>

  <div class="form-group row mt-4">
        <label for="tglFB" class="col-sm-2 col-form-label">Tanggal FB</label>
        <div class="col-sm-10">
            <input type="date" name="tglFB" class="form-control" id="tglFB" >
        </div>
    </div>

  <div class="form-group row mt-4">
    <label for="subtotal" class="col-sm-2 col-form-label">Subtotal</label>
    <div class="col-sm-10">
      <input type="number" name="subtotal" class="form-control" id="subtotal" placeholder="subtotal">
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="diskon" class="col-sm-2 col-form-label">Diskon</label>
    <div class="col-sm-10">
      <input type="text" name="diskon"  class="form-control" id="diskon" placeholder="Harga Beli">
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="totalFaktur" class="col-sm-2 col-form-label">totalFaktur</label>
    <div class="col-sm-10">
      <input type="text" name="totalFaktur" class="form-control" id="totalFaktur" placeholder="Harga Jual">
    </div>

    <div class="text-right mt-5">
        <a href="<?php echo e(route('listBarang')); ?>" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
  </div>
  </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Inventaris\resources\views/FB/create_FB.blade.php ENDPATH**/ ?>