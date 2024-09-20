<?php $__env->startSection('content'); ?>
<h1>Məhsulu redaktə et</h1>

<form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="form-group">
        <label for="name">Məhsulun Adı</label>
        <input type="text" name="name" class="form-control" value="<?php echo e(old('name', $product->name)); ?>" required>
    </div>

  

    <div class="form-group">
        <label>Şəkil əlavə et</label>
        <input type="file" name="image" class="file-upload-default">
        <div class="input-group col-xs-12">
          <input type="text" class="form-control file-upload-info" disabled placeholder="Şəkil yüklə">
          <span class="input-group-append">
            <button class="file-upload-browse btn btn-primary" type="button">Yüklə</button>
          </span>
        </div>
      </div>




    <div class="form-group">
        <label for="price">Qiyməti</label>
        <input type="text" name="price" class="form-control" value="<?php echo e(old('price', $product->price)); ?>" required>
    </div>

    <div class="form-group">
        <label for="qty">Sayı</label>
        <input type="text" name="qty" class="form-control" value="<?php echo e(old('qty', $product->qty)); ?>" required>
    </div>

    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" class="form-control" required>
            <option value="1" <?php echo e($product->status == '1' ? 'selected' : ''); ?>>Aktiv</option>
            <option value="0" <?php echo e($product->status == '0' ? 'selected' : ''); ?>>Deaktiv</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Dəyişiklikləri yadda saxla</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/Panel/pages/products/edit.blade.php ENDPATH**/ ?>