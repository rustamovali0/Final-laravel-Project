<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Xidməti redaktə et</h4>

                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo e(route('services.update', $service->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="name">Ad</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($service->name); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Açıqlama</label>
                        <textarea class="form-control" id="description" name="description" required><?php echo e($service->description); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1" <?php echo e($service->status == '1' ? 'selected' : ''); ?>>Aktiv</option>
                            <option value="0" <?php echo e($service->status == '0' ? 'selected' : ''); ?>>Deaktiv</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Təsdiq et</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/Panel/pages/services/edit.blade.php ENDPATH**/ ?>