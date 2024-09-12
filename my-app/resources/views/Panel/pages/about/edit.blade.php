@extends('Panel.layouts.app')

@section('content')
<div class="container">
    <h1>Haqqında redaktə</h1>
    <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Başlıq</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $about->name) }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Açıqlama</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ old('content', $about->content) }}</textarea>
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Şəkil</label>
            <input type="file" id="image" name="image" class="form-control">
            @if($about->image)
                <img src="{{ asset('storage/' . $about->image) }}" alt="Current Image" width="100" class="mt-2">
            @endif
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Təsdiq et</button>
    </form>
</div>
@endsection
