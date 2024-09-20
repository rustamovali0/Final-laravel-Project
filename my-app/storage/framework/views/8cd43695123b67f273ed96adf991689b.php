<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Xidmətlər siyahısı</h4>
                <p class="card-description">
                    <a href="<?php echo e(route('services.create')); ?>" class="btn btn-primary">Xidmət yarat</a>
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
                                <th>Ad</th>
                                <th>Açıqlama</th>
                                <th>Status</th>
                                <th>Redaktə</th>
                                <th>Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($services) && $services->count() > 0): ?>
                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($service->name); ?></td>
                                        <td><?php echo e($service->description); ?></td>
                                        <td>
                                            <label class="badge badge-<?php echo e($service->status ? 'success' : 'danger'); ?>">
                                                <?php echo e($service->status ? 'Active' : 'Inactive'); ?>

                                            </label>
                                        </td>
                                        <td>
                                            <a href="<?php echo e(route('services.edit', $service->id)); ?>" class="btn btn-primary">Redaktə et</a>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('services.destroy', $service->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger">Sil</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/Panel/pages/services/index.blade.php ENDPATH**/ ?>