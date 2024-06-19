

<?php $__env->startSection('container'); ?>
<h1>Edit Barang</h1>
<form method="post" action="<?php echo e(route('updatePelanggan',['idPelanggan'=>$pelanggan->idPelanggan])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <h2>ID Pelanggan : <?php echo e($pelanggan->idPelanggan); ?></h2>
  <div class="form-group row mt-4">
    <label for="namaPelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
    <div class="col-sm-10">
      <input type="text"  name="namaPelanggan" class="form-control" id="namaPelanggan" placeholder="Nama Pelanggan" value="<?php echo e($pelanggan->namaPelanggan); ?>">
    </div>
  </div>

  
  <div class="form-group row mt-4">
        <label for="alamatPelanggan" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="text" name="alamatPelanggan" class="form-control" id="alamatPelanggan" placeholder="Alamat" value="<?php echo e($pelanggan->alamatPelanggan); ?>">
        </div>
    </div>

  <div class="form-group row mt-4">
    <label for="telepon" class="col-sm-2 col-form-label">telepon</label>
    <div class="col-sm-10">
      <input type="number" name="telepon" class="form-control" id="telepon" placeholder="telepon" value="<?php echo e($pelanggan->telepon); ?>">
    </div>

    <div class="text-right">
        <a href="<?php echo e(route('listPelanggan')); ?>" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Inventaris\resources\views/pelanggan/edit_pelanggan.blade.php ENDPATH**/ ?>