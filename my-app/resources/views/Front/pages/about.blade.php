@extends('Front.layout.layout')

@section('content')

<div class="about-container" style="display: flex; flex-direction:column; justify-content: center; align-items: center; padding: 30px; background-color: #f5f5f5; min-height: 80vh; margin: 0;">
    <div class="hero-caption hero-caption2" style="margin-bottom: 30px; padding-top: 0px;">
        <h2>Haqqımızda</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('index') }}">Ana səhifə</a></li>
                <li class="breadcrumb-item"><a href="">Haqqımızda</a></li>
            </ol>
        </nav>
    </div>

    <div class="about-content" style="display: flex; justify-content: space-between; align-items: center; max-width: 1400px; margin: 0 auto; padding: 30px; background: #ffffff; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); border-radius: 12px;">
        <div class="about-text" style="flex: 1; margin-right: 30px;">
            <h1 style="font-size: 3.5rem; color: #333; margin-bottom: 20px;">{{$about->name}}</h1>
            <p style="font-size: 1.25rem; color: #666; line-height: 1.8;">
                {{$about->content}}
            </p>
        </div>
        <div class="about-image" style="flex: 0 0 auto;">
            <img src="{{ asset('storage/' . $about->image) }}" alt="Image" style="border-radius: 12px; object-fit: cover;" width="300" height="300">
        </div>
    </div>
</div>

@endsection
