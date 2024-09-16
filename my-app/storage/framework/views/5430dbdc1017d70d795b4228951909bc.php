<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Məhsullar</h1>
        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Məhsul əlavə et</a>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Şəkil</th>
                    <th>Slug</th>
                    <th>Ad</th>
                    <th>Qiymət</th>
                    <th>Fəaliyyətlər</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->id); ?></td>
                        <td><img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->name); ?>" width="100">
                        </td>
                        <td><?php echo e($product->name); ?></td>
                        <td><?php echo e($product->slug); ?></td>
                        <td><?php echo e($product->price); ?></td>
                        <td>
                            <a href="<?php echo e(route('products.edit', $product)); ?>" class="btn btn-warning">Redaktə et</a>
                            <form action="<?php echo e(route('products.destroy', $product)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger">Sil</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final Proyekt\my-app\resources\views/panel/pages/products/index.blade.php ENDPATH**/ ?>