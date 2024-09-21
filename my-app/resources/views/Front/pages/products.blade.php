@extends('Front.layout.layout')

@section('content')
<div class="hero-area section-bg2">
    <div class="container">
    <div class="row">
    <div class="col-xl-12">
    <div class="slider-area">
    <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
    <div class="hero-caption hero-caption2">
    <h2>Məhsullar</h2>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="{{ route('index') }}">Ana səhifə</a></li>
        <li class="breadcrumb-item"><a href="">Məhsullar</a></li>
    </ol>
    </nav>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


    <div class="listing-area pt-50 pb-50">
    <div class="container">
    <div class="row">

    <div class="col-xl-2 col-lg-4 col-md-2">



    </div>

    <div class="col-xl-9 col-lg-8 col-md-8">
    <div class="latest-items latest-items2">
    <div class="row">



    @if (!empty($products) && $products->count() > 0)
    @foreach ($products as $product)
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <div class="properties pb-30">
        <div class="properties-card">
        <div class="properties-img">
        <a href="{{route('proDetails', $product->slug)}}">
            <img src="{{ asset('storage/' . $product->image) }}" alt="" style="width: 15rem; height:10rem">

        </div>
        <div class="properties-caption properties-caption2">
        <h3><a href="{{route('proDetails', $product->slug)}}">{{$product->name}}</a></h3>
        <div class="properties-footer">
        <div class="price">
        <span>{{number_format($product->price,2)}} ₼</span>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    @endforeach
    @endif




    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endsection
