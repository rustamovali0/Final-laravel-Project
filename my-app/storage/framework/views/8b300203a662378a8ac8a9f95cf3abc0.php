<?php $__env->startSection('content'); ?>
<section class="home-blog">
    <div class="container">
        <div class="row justify-content-center">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle text-center mb-40">
                    <h2>Xidmətlər</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Ana səhifə</a></li>
                        <li class="breadcrumb-item"><a href="">Xidmətlər</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <a href="<?php echo e(route('blogs.show', $blog->id)); ?>">
                                <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="">
                            </a>
                        </div>
                        <div class="blogs-cap">
                            <h5><a href="<?php echo e(route('blogs.show', $blog->id)); ?>"><?php echo e($blog->title); ?></a></h5>
                            <p><?php echo e(Str::limit($blog->description, 100)); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/Front/pages/services.blade.php ENDPATH**/ ?>