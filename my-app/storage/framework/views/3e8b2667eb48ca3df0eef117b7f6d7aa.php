<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Yorumu redaktə et</h4>

          <form action="<?php echo e(route('comments.update', $comment->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
              <label for="author_name">Komment yazan</label>
              <input type="text" class="form-control" id="author_name" name="author_name" value="<?php echo e($comment->author_name); ?>" required>
            </div>

            <div class="form-group">
              <label for="author_position">Kommenti yazanın pozisiyası</label>
              <input type="text" class="form-control" id="author_position" name="author_position" value="<?php echo e($comment->author_position); ?>">
            </div>

            <div class="form-group">
              <label for="comment">Yorum</label>
              <textarea class="form-control" id="comment" name="comment" rows="4" required><?php echo e($comment->comment); ?></textarea>
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

                <?php if(isset($comment->image) && !empty($comment->image)): ?>
                    <div class="mt-2">
                        <label>Yüklənmiş Şəkil</label>
                        <img src="<?php echo e(asset('storage/' . $comment->image)); ?>" alt="Current Image" width="100">

                    </div>
                <?php endif; ?>
            </div>



            <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" id="status" name="status">
                <option value="1" <?php echo e($comment->status ? 'selected' : ''); ?>>Aktiv</option>
                <option value="0" <?php echo e(!$comment->status ? 'selected' : ''); ?>>Deaktiv</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Yenilə</button>
          </form>

        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final Proyekt\my-app\resources\views/Panel/pages/comments/edit.blade.php ENDPATH**/ ?>