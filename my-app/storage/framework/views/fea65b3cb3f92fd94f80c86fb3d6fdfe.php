<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Yeni məhsul əlavə et</h1>
    <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="form-group">
            <label for="name">Məhsulun Adı</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">

        
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
            <label for="price">Qiymət</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>
     
        <div class="form-group">
            <label for="qty">Sayı</label>
            <input type="number" name="qty" id="qty" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="0">Deaktiv</option>
                <option value="1">Aktiv</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="content">Açıqlama</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Əlavə et</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/panel/pages/products/create.blade.php ENDPATH**/ ?>