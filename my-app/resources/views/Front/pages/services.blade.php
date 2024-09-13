@extends('Front.layout.layout')

@section('content')
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
@endsection

