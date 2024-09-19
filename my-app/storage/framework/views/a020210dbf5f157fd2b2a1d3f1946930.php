<?php $__env->startSection('content'); ?>
<section class="slider-area">
    <div class="slider-active">
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="single-slider slider-bg2 slider-height d-flex align-items-center" style="background-image:url(<?php echo e(asset('AdminPanel/img/slider/' . $slider->image)); ?>)">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-10">
                            <div class="hero-caption text-center">
                                <span><?php echo e($slider->name); ?></span>
                                <h1 data-animation="bounceIn" data-delay="0.2s"><?php echo e(old('content', $slider->content ?? '')); ?></h1>
                                <a href="<?php echo e(route('form')); ?>" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay="0.7s">Bizimlə əlaqə</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</section>



    <section class="items-product1 pt-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-items mb-20">


                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
    </section>


    <div class="latest-items section-padding fix">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-12">
                    <div class="nav-button">



                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

                    <div class="container">
                        <div class="latest-items-active">

                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="properties pb-30">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="<?php echo e(route('proDetails', $product->slug)); ?>">
                                            <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="">
                                            <div class="socal_icon">
                                            <a href="#"><i class="ti-shopping-cart"></i></a>
                                            <a href="#"><i class="ti-heart"></i></a>
                                            <a href="#"><i class="ti-zoom-in"></i></a>
                                            </div>
                                            </div>
                                            <div class="properties-caption properties-caption2">
                                            <h3><a href="<?php echo e(route('proDetails', $product->slug)); ?>"><?php echo e($product->name); ?></a></h3>
                                            <div class="properties-footer">
                                            <div class="price">
                                            <span>$ <?php echo e(number_format($product->price,0)); ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </div>
                    </div>

                </div>

        </div>
    </div>


    <div class="testimonial-area testimonial-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-11">
                    <div class="h1-testimonial-active">

                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-testimonial text-center">
                            <div class="testimonial-caption">
                                <div class="testimonial-top-cap">
                                    <h2>Müştəri Rəyi</h2>
                                    <p><?php echo e($comment->comment); ?></p>
                                </div>
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="<?php echo e(asset('storage/' . $comment->image)); ?>" alt="Image" style="border-radius: 100%; width:5rem; height:5rem;">
                                    </div>
                                    <div class="founder-text">
                                        <span><?php echo e($comment->author_name); ?></span>
                                        <p><?php echo e($comment->author_position); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="latest-items section-padding fix">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-tittle text-center mb-40">
                    <h2>Məhsullar</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="latest-items-active">

                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="properties pb-30">
                    <div class="properties-card">
                        <div class="properties-img">
                            <a href="<?php echo e(route('proDetails', $product->slug)); ?>">
                                <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="">
                                <div class="socal_icon">
                                <a href="#"><i class="ti-shopping-cart"></i></a>
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                                </div>
                                <div class="properties-caption properties-caption2">
                                <h3><a href="<?php echo e(route('proDetails', $product->slug)); ?>"><?php echo e($product->name); ?></a></h3>
                                <div class="properties-footer">
                                <div class="price">
                                <span>$ <?php echo e(number_format($product->price,0)); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
    </section>


    <section class="home-blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle text-center mb-40">
                        <h2>Son xəbərlər</h2>
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



    <div class="categories-area">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".<?php echo e($loop->index + 2); ?>s">
                            <div class="cat-icon">
                                <img src="<?php echo e(asset('Front/assets/img/icon/services' . $service->id . '.svg')); ?>" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><?php echo e($service->name); ?></h5>
                                <p><?php echo e($service->description); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/Front/pages/index.blade.php ENDPATH**/ ?>