@extends('Front.layout.layout')

@section('content')
<section class="slider-area">
    <div class="slider-active">
        @foreach ($sliders as $slider)
            <div class="single-slider slider-bg2 slider-height d-flex align-items-center" style="background-image:url({{ asset('AdminPanel/img/slider/' . $slider->image) }})">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8 col-sm-10">
                            <div class="hero-caption text-center">
                                <span>{{ $slider->name }}</span>
                                <h1 data-animation="bounceIn" data-delay="0.2s">{{ old('content', $slider->content ?? '') }}</h1>
                                <a href="{{ route('form') }}" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay="0.7s">Bizimlə əlaqə</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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

                            @foreach ($products as $product)
                            <div class="properties pb-30">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="{{route('proDetails', $product->slug)}}">
                                            <img src="{{ asset($product->image) }}"alt=""></a>
                                            <div class="socal_icon">
                                            <a href="#"><i class="ti-shopping-cart"></i></a>
                                            <a href="#"><i class="ti-heart"></i></a>
                                            <a href="#"><i class="ti-zoom-in"></i></a>
                                            </div>
                                            </div>
                                            <div class="properties-caption properties-caption2">
                                            <h3><a href="{{route('proDetails', $product->slug)}}">{{$product->name}}</a></h3>
                                            <div class="properties-footer">
                                            <div class="price">
                                            <span>$ {{number_format($product->price,0)}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


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

                        <div class="single-testimonial text-center">
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <h2>Müştəri Rəyi</h2>
                                    <p>Sizinlə müqavilə bağlayandan sonra,nəhayət ki kartric və printer ilə bağlı olan problemlərimiz aradan qaldırıldı.</p>
                                </div>

                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="{{ asset('Front/assets/img/gallery/founder-img.png') }}"
                                            alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>FIDAN KADIROVA</span>
                                        <p>"AQUAVITA"</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-testimonial text-center">
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <div class="testimonial-top-cap">
                                        <h2>Müştəri Rəyi</h2>
                                        <p>Münasib qiymətlərlə printer və katriclərimizə yüksək keyfiyyətli xidmət göstərirsiniz.Vacibi olan isə sifariş verendən sonra ən qısa zaman ərzinde gəlirsiniz və bu bizim üçün çox önəmlidir.
                                        </p>
                                    </div>

                                </div>

                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="{{ asset('Front/assets/img/gallery/founder-img.png') }}"
                                            alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>LƏTİFƏ MƏMMƏDOVA
                                        </span>
                                        <p>“KRİSTAL”MMC
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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

                @foreach ($products as $product)
                <div class="properties pb-30">
                    <div class="properties-card">
                        <div class="properties-img">
                            <a href="{{route('proDetails', $product->slug)}}">
                                <img src="{{ asset($product->image) }}"alt=""></a>
                                <div class="socal_icon">
                                <a href="#"><i class="ti-shopping-cart"></i></a>
                                <a href="#"><i class="ti-heart"></i></a>
                                <a href="#"><i class="ti-zoom-in"></i></a>
                                </div>
                                </div>
                                <div class="properties-caption properties-caption2">
                                <h3><a href="{{route('proDetails', $product->slug)}}">{{$product->name}}</a></h3>
                                <div class="properties-footer">
                                <div class="price">
                                <span>$ {{number_format($product->price,0)}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>


    <section class="home-blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle text-center mb-40">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <a href="{{ route('blogs.show', $blog->id) }}">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="">
                                </a>
                            </div>
                            <div class="blogs-cap">
                                <h5><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h5>
                                <p>{{ Str::limit($blog->description, 100) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <div class="categories-area">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".{{ $loop->index + 2 }}s">
                            <div class="cat-icon">
                                <img src="{{ asset('Front/assets/img/icon/services' . $service->id . '.svg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>{{ $service->name }}</h5>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
