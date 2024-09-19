<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Slayd</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('slider.index')); ?>">Slayd Siyahısı</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('slider.create')); ?>">Slayd Əlavə et</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#product-menu" aria-expanded="false" aria-controls="product-menu">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Məhsullar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="product-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('products.index')); ?>">Məhsulların siyahısı</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('products.create')); ?>">Məhsul əlavə et</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('setting.index')); ?>" aria-expanded="false">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Footer text</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#service-menu" aria-expanded="false" aria-controls="service-menu">
                <i class="icon-star menu-icon"></i>
                <span class="menu-title">Xidmətlər</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="service-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('services.index')); ?>">Xidmətlər Siyahısı</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('services.create')); ?>">Xidmət Əlavə et</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#blog-menu" aria-expanded="false" aria-controls="blog-menu">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Blog</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blog-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('blogs.index')); ?>">Blog Siyahısı</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('blogs.create')); ?>">Blog Əlavə et</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#comment-menu" aria-expanded="false" aria-controls="comment-menu">
                <i class="icon-speech menu-icon"></i>
                <span class="menu-title">Yorumlar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="comment-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('comments.index')); ?>">Yorumlar Siyahısı</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('comments.create')); ?>">Yorum Əlavə et</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('contact.index')); ?>">
                <i class="icon-star menu-icon"></i>
                <span class="menu-title">Gələn mesajlar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#about-menu" aria-expanded="false" aria-controls="about-menu">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Haqqımızda</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="about-menu">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('about.index')); ?>">Haqqımızda Siyahısı</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo e(route('about.create')); ?>">Haqqımızda Əlavə et</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
<?php /**PATH C:\Users\Ali\Desktop\Final-laravel-Project\my-app\resources\views/Panel/inc/sidebar.blade.php ENDPATH**/ ?>