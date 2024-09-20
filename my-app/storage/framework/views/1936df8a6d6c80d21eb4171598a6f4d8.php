<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Footer text əlavə et</h4>
                    <p class="card-description">
                        <a href="<?php echo e(route('setting.create')); ?>" class="btn btn-primary">Yarat</a>
                    </p>

                    <?php if(session()->get('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('success')); ?>

                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Şəkil</th>
                                    <th>Key</th>
                                    <th>Data</th>
                                    <th>Redaktə et</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($settings) && $settings->count() > 0): ?>
                                    <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($setting->id); ?></td>

                                            <td class="py-1">
                                                <?php if($setting->set_type =='image'): ?>
                                                <img src="<?php echo e(asset('AdminPanel/img/setting/' . $slider->image)); ?>"
                                                alt="image" />
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($setting->name); ?></td>
                                            <td><?php echo e($setting->data ?? ''); ?></td>
                                            <td><?php echo e($setting->set_type); ?></td>
                                            <td class="d-flex">
                                                <a href="<?php echo e(route('setting.edit', $setting->id)); ?>"
                                                    class="btn btn-primary mr-0">Redaktə et</a>
                                            </td>
                                            <form action="<?php echo e(route('setting.destroy',$setting->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field("DELETE"); ?>
                                                <td><button type="submit" href="<?php echo e(route('setting.edit',$setting->id)); ?>" class="btn btn-danger">Sil</button></td>
                                            </form>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/Panel/pages/setting/index.blade.php ENDPATH**/ ?>