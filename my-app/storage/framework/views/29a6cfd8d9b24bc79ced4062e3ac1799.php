<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Slayd əlavə et</h4>
            <?php if($errors): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger">
                <?php echo e($error); ?>

            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php if(session()->get('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('success')); ?>

            </div>
            <?php endif; ?>

            <?php if(!empty($slider->id)): ?>

            <?php
            $routelink = route('slider.update',$slider->id);
          ?>
          <?php else: ?>
          <?php
            $routelink = route('slider.store');
          ?>
            <?php endif; ?>
            <form action="<?php echo e($routelink); ?>" class="forms-sample" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>

              <?php if(!empty($slider->id)): ?>
              <?php echo method_field('PUT'); ?>
              <?php endif; ?>
              <div class="form-group">
                <div class="input-group col-xs-12">
                    <img style="width: 150px; height: 100px;" src="<?php echo e(asset('AdminPanel/img/slider/' . ($slider->image ?? 'cc.jpg'))); ?>" alt="image"/>

                </div>
              </div>
              <div class="form-group">
                <label for="name">Slayd Başlıq</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo e($slider->name  ?? ''); ?>" placeholder="Slider basliq">
              </div>
              <div class="form-group">
                <label for="content">Məzmun</label>
                <textarea class="form-control" id="content" name="content" placeholder="Slider content" rows="3"><?php echo $slider->content  ?? ''; ?></textarea>
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
                <label for="status"></label>
                <?php
                    $status = $slider->status  ?? '1';
                ?>
                <select name="status" id="" class="form-control">
                  <option value="0" <?php echo e($status == '0' ? 'selected' : ''); ?>>Deaktiv</option>
                  <option value="1" <?php echo e($status == '1' ? 'selected' : ''); ?>>Aktiv</option>
                </select>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Təsdiq et</button>
              <button class="btn btn-light">Ləğv et</button>
            </form>
          </div>
        </div>
      </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/Panel/pages/slider/edit.blade.php ENDPATH**/ ?>