<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Footer text əlavə et</h4>
            <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger">
                <?php echo e($error); ?>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php if(session()->has('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('success')); ?>

            </div>
            <?php endif; ?>

            <?php
                $routelink = !empty($setting->id) ? route('setting.update', $setting->id) : route('setting.store');
            ?>

<form action="<?php echo e($routelink); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php if(!empty($setting->id)): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>

    <div class="form-group">
        <label for="name">Key</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name', $setting->name ?? '')); ?>" placeholder="Key">
    </div>
    <div class="form-group">
        <label for="data">Data</label>
        <input type="text" class="form-control" id="data" name="data" value="<?php echo e(old('data', $setting->data ?? '')); ?>" placeholder="Data">
    </div>

    <button type="submit" class="btn btn-primary mr-2">Təsdiq et</button>
    <button type="reset" class="btn btn-light">Ləğv et</button>
</form>


          </div>
        </div>
      </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/Panel/pages/setting/edit.blade.php ENDPATH**/ ?>