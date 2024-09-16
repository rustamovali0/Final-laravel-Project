<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Yorumların Siyahısı</h4>
          <p class="card-description">
          <a href="<?php echo e(route('comments.create')); ?>" class="btn btn-primary">Yarat</a>
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
                    <th>Komment yazan</th>
                    <th>Kommenti yazanın pozisiyası</th>
                    <th>Komment</th>
                    <th>Status</th>
                    <th>Redaktə et</th>
                    <th>Sil</th>
                </tr>
              </thead>
              <tbody>
                <?php if(!empty($comments) && $comments->count() > 0): ?>
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($comment->id); ?></td>
                    <td class="py-1">
                        <img src="<?php echo e(asset('storage/' . $comment->image)); ?>" alt="Image">

                    </td>
                    <td><?php echo e($comment->author_name); ?></td>
                    <td><?php echo e($comment->author_position ?? ''); ?></td>
                    <td><?php echo e($comment->comment); ?></td>

                    <td><label class="badge badge-<?php echo e($comment->status == '1' ? 'success' : 'danger'); ?>"><?php echo e($comment->status == '1' ? 'Aktiv' : 'Deaktiv'); ?></label></td>
                    <td class="d-flex">
                        <a href="<?php echo e(route('comments.edit', $comment->id)); ?>" class="btn btn-primary mr-2">Redakte et</a>
                    </td>
                    <form action="<?php echo e(route('comments.destroy', $comment->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                        <td>
                            <button type="submit" class="btn btn-danger">Sil</button>
                        </td>
                    </form>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <tr>
                    <td colspan="8" class="text-center">Boşdur.</td>
                </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final Proyekt\my-app\resources\views/Panel/pages/comments/index.blade.php ENDPATH**/ ?>