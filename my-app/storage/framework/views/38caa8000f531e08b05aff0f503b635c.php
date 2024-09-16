<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Komment əlavə et</h2>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('comments.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="author_name">Komment yazan</label>
            <input type="text" id="author_name" name="author_name" class="form-control" value="<?php echo e(old('author_name')); ?>" required>
        </div>
        <div class="form-group">
            <label for="author_position">Kommenti yazanın pozisiyası</label>
            <input type="text" id="author_position" name="author_position" class="form-control" value="<?php echo e(old('author_position')); ?>">
        </div>
        <div class="form-group">
            <label for="comment">Komment</label>
            <textarea id="comment" name="comment" class="form-control" rows="4" required><?php echo e(old('comment')); ?></textarea>
        </div>
        <div class="form-group">
            <label>Şəkil yüklə</label>
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Şəkil yükləyin">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Yüklə</button>
              </span>
            </div>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control" required>
                <option value="1" <?php echo e(old('status') == '1' ? 'selected' : ''); ?>>Aktiv</option>
                <option value="0" <?php echo e(old('status') == '0' ? 'selected' : ''); ?>>Deaktiv</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Əlavə et</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final Proyekt\my-app\resources\views/Panel/pages/comments/create.blade.php ENDPATH**/ ?>