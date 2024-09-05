<div class="header-area">
    <div class="header-top d-none d-sm-block">
        <div class="container">
            <div class="row">
    <div class="col-xl-12">
    <div class="d-flex justify-content-between flex-wrap align-items-center">
    <div class="header-info-left">
    <ul>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Privacy</a></li>
    </ul>
    </div>
    <div class="header-info-right d-flex">
    <ul class="order-list">
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Questions</a></li>
    </ul>
    <ul class="header-social">
    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
    <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="header-mid header-sticky">
    <div class="container">
    <div class="menu-wrapper">

    <div class="logo">
    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
    </div>

    <div class="main-menu d-none d-lg-block">
    <nav>
                        <ul id="navigation">
                            <li><a href="{{ route('index') }}">Ana səhifə</a></li>
                            <li><a href="{{ route('about') }}">Haqqımızda</a></li>
                            <li class="new"><a href="{{ route('services') }}">Xidmətlər</a></li>
                            <li><a href="{{ route('products') }}">Məhsullar <i class="fas fa-angle-down"></i></a>
                                <ul class="submenu">
                                    @if (!empty($categories) && $categories->count() > 0)
                                        @foreach ($categories as $category)
                                            @if ($category->cat_ust == null)
                                                <li class="has-children">
                                                    <a href="#">{{ $category->name }}</a>
                                                    <ul class="dropdown">
                                                        @foreach ($categories as $subCategory)
                                                            @if ($subCategory->cat_ust == $category->id)
                                                                <li><a href="#">{{ $subCategory->name }}</a></li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ul>
                            </li>

                            <ul class="submenu">
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                                <li><a href="{{ route('blog') }}">Element</a></li>
                                <li><a href="{{ route('blog') }}">Blog Details</a></li>
                            </ul>
                            </li>
                            <li><a href="{{ route('contact') }}">Əlaqə</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <ul>
                        <li>
                            <div class="nav-search search-switch hearer_icon">
                                <a id="search_1" href="javascript:void(0)">
                                    <span class="flaticon-search"></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="search_input" id="search_input_box">
                <form class="search-inner d-flex justify-content-between ">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>

            <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>

</div>
