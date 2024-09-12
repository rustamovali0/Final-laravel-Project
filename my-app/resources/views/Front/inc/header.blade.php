<div class="header-area">
    <div class="header-top d-none d-sm-block">
        <div class="container">
            <div class="row">
    <div class="col-xl-12">
    <div class="d-flex justify-content-between flex-wrap align-items-center">
    <div class="header-info-left">
    <ul>
    <li><a href="#">+994 55 688 11 88</a></li>
    <li><a href="#">+994 50 688 11 88</a></li>
    </ul>
    </div>
    <div class="header-info-right d-flex">
    <ul class="order-list">
        <li><a href="#">Azərbaycanca</a></li>
        <li><a href="#">Tez-tez verilen suallar</a></li>
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

            <img src="{{ asset('Front/assets/img/logo/logo.png') }}"
            alt="" width="120px" height="50px" style="background-color: black">
            </div>

    <div class="main-menu d-none d-lg-block">
    <nav>
                        <ul id="navigation">
                            <li><a href="{{ route('index') }}">Ana səhifə</a></li>
                            <li><a href="{{ route('about') }}">Haqqımızda</a></li>
                            <li><a href="{{ route('services') }}">Xidmətlər</a></li>
                            <li><a href="{{ route('products') }}">Məhsullar</a>

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
