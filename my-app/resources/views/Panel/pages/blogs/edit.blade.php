@extends('Panel.layouts.app')
@section('content')
<div class="container">
    <h2>Bloqu redaktə et</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Başlıq</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $blog->title }}" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control" value="{{ $blog->slug }}" required>
        </div>
        <div class="form-group">
            <label for="description">Açıqlama</label>
            <textarea id="description" name="description" class="form-control" rows="4" required>{{ $blog->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Şəkil</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $product->name }}" width="100">
            <img style="width: 150px; height: 100px;" src="{{ asset('storage/' . $blog->image) . ($blog->image ?? 'aa.jpg')) }}" alt="image"/>

        </div>
        <button type="submit" class="btn btn-primary">Təsdiq et</button>
    </form>
</div>
@endsection
