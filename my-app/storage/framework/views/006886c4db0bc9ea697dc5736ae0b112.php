<?php $__env->startSection('content'); ?>
    <main>
        <div class="hero-area section-bg2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-area">
                            <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
                                <div class="hero-caption hero-caption2">
                                    <h2>Məhsul açıqlaması</h2>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center">
                                            <li class="breadcrumb-item">
                                                <a href="<?php echo e(route('index')); ?>">Ana səhifə</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Məhsul açıqlaması</a>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services-area2 pt-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="single-services d-flex align-items-center mb-0">
                                    <div class="features-img">
                                        <img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="" style="width: 300px; height:300px;">

                                    </div>
                                    <div class="features-caption">
                                        <h3><?php echo e($product->name ?? ''); ?></h3>
                                        <p>By Kartic</p>
                                        <div class="price">
                                            <span><?php echo e(number_format($product->price,2)); ?> ₼</span>
                                        </div>
                                        <div class="review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <p>(120 Baxış)</p>
                                        </div>
                                        <a href="<?php echo e(route('contact')); ?>" class="white-btn mr-10">Sifariş et</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="our-client section-padding best-selling">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-1 col-xl-10">
                        <div class="nav-button f-left">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one"
                                        role="tab" aria-controls="nav-one" aria-selected="true">Açıqlama</a>



                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                        <div class="row">
                            <div class="offset-xl-1 col-lg-9">
                                <p>
                                    <?php echo $product->content ?? ''; ?>

                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                        <div class="row">
                            <div class="offset-xl-1 col-lg-9">

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                        <div class="row">
                            <div class="offset-xl-1 col-lg-9">


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">
                        <div class="row">
                            <div class="offset-xl-1 col-lg-9">

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">
                        <div class="row">
                            <div class="offset-xl-1 col-lg-9">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Front.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/Front/pages/proDetails.blade.php ENDPATH**/ ?>