<?php $__env->startSection('content'); ?>
<div class="order-form" style="margin-left: 20px; margin-right: 20px; display: flex;">
    <div style="flex: 1;">
        <h2  style="margin-left: 3rem;">Əlaqə - Sifariş Formu</h2>
        <form action="<?php echo e(route('contact.form')); ?>" method="post"  style="margin-left: 3rem; margin-bottom: 3rem; " >
             <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Ad Soyad</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="number">Telefon nömrəsi</label>
                <input type="tel" class="form-control" id="number" name="number" required>
            </div>
            <div class="form-group">
                <label for="subject">Sifariş</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>

            <div class="form-group">
                <label for="message">Mesaj</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                <label class="form-check-label" for="terms">Şərtlər və qaydalar</label>
            </div>
            <button type="submit" class="btn">Sifariş et</button>
        </form>
    </div>

    <img src="https://guide-images.cdn.ifixit.com/igi/mCxGkjZHJMSMBKiJ.large"
    alt="" width="320px" height="200px" style="margin-top: 10rem" ></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/Front/pages/form.blade.php ENDPATH**/ ?>