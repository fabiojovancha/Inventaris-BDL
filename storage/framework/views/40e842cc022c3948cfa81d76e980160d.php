

<?php $__env->startSection('container'); ?>
<h1>Add Barang</h1>
<form method="post" action="<?php echo e(route('storeBarang')); ?>">
    <?php echo csrf_field(); ?>
  <div class="form-group row mt-4">
    <label for="idBarang" class="col-sm-2 col-form-label">ID Barang</label>
    <div class="col-sm-10">
      <input type="text"  name="idBarang" class="form-control" id="idBarang" placeholder="ID Barang" required>
    </div>
  </div>

  <div class="form-group row mt-4">
    <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
    <div class="col-sm-10">
      <input type="text"  name="namaBarang" class="form-control" id="namaBarang" placeholder="Nama Barang" required>
    </div>
  </div>

  <div class="form-group row mt-4">
        <label for="idTipeBarang" class="col-sm-2 col-form-label">Tipe Barang</label>
        <div class="col-sm-10">
            <select name="idTipeBarang" class="form-control" id="idTipeBarang">
                <option value="">-- Select Tipe Barang --</option>
                <?php $__currentLoopData = $tipeBarangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipeBarang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($tipeBarang->idTipeBarang); ?>"><?php echo e($tipeBarang->tipeBarang); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
  
  <div class="form-group row mt-4">
    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-10">
      <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah" required>
    </div>

  </div>  <div class="form-group row mt-4">
    <label for="hargaBeli" class="col-sm-2 col-form-label">Harga Beli</label>
    <div class="col-sm-10">
      <input type="text" name="hargaBeli"  class="form-control" id="hargaBeli" placeholder="Harga Beli" required>
    </div>

  </div>  
  <div class="form-group row mt-4">
    <label for="hargaJual" class="col-sm-2 col-form-label">Harga Jual</label>
    <div class="col-sm-10">
      <input type="text" name="hargaJual" class="form-control" id="hargaJual" placeholder="Harga Jual" required>
    </div>

    <div class="text-right mt-4">
        <a href="<?php echo e(route('listBarang')); ?>" class="btn btn-outline-secondary mr-2" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Inventaris\resources\views/barang/create_barang.blade.php ENDPATH**/ ?>