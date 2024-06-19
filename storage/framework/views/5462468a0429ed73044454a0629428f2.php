

<?php $__env->startSection('container'); ?>
<h1>Add Supplier</h1>
<form method="post" action="<?php echo e(route('storeSupplier')); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group row mt-4">
        <label for="idSupplier" class="col-sm-2 col-form-label">ID Supplier</label>
        <div class="col-sm-10">
        <input type="text"  name="idSupplier" class="form-control" id="idSupplier" placeholder="ID Supplier">
        </div>
    </div>

    <div class="form-group row mt-4">
        <label for="namaSupplier" class="col-sm-2 col-form-label">Nama Supplier</label>
        <div class="col-sm-10">
        <input type="text"  name="namaSupplier" class="form-control" id="namaSupplier" placeholder="Nama Supplier">
        </div>
    </div>

  
    <div class="form-group row mt-4">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
        </div>
    </div>

    <div class="form-group row mt-4">
        <label for="kota" class="col-sm-2 col-form-label">Kota</label>
        <div class="col-sm-10">
            <input type="text" name="kota" class="form-control" id="alamat" placeholder="Kota">
        </div>
    </div>

    <div class="form-group row mt-4">
    <label for="telepon" class="col-sm-2 col-form-label">telepon</label>
    <div class="col-sm-10">
      <input type="text" name="telepon" class="form-control" id="telepon" placeholder="telepon">
    </div>
    
    <div class="text-right">
        <a href="<?php echo e(route('listSupplier')); ?>" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Inventaris\resources\views/Supplier/create_Supplier.blade.php ENDPATH**/ ?>