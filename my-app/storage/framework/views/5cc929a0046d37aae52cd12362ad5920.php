<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Gələn Mesajlar</h4>

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
                                    <th>Ad Soyad</th>
                                    <th>Email</th>
                                    <th>Telefon</th>
                                    <th>Sifariş</th>
                                    <th>Mesaj</th>
                                    <th>Tarix</th>
                                    <th>Proses</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($contacts) && $contacts->count() > 0): ?>
                                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($contact->id); ?></td>
                                            <td><?php echo e($contact->name); ?></td>
                                            <td><?php echo e($contact->email); ?></td>
                                            <td><?php echo e($contact->number); ?></td>
                                            <td><?php echo e($contact->subject); ?></td>
                                            <td><?php echo e($contact->message); ?></td>
                                            <td><?php echo e($contact->created_at); ?></td>
                                            <td>
                                                <form action="<?php echo e(route('contact.destroy', $contact->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Bu mesajı silmək istədiyinizdən əminsiniz?');">
                                                        Sil
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7">Mesajınız yoxdur.</td>
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

<?php echo $__env->make('Panel.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final Proyekt\my-app\resources\views/Panel/pages/contact/index.blade.php ENDPATH**/ ?>