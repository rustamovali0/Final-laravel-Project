@extends('Panel.layouts.app')
@section('content')
<div class="container">
    <h2>Bloq yarat</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Başlıq</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control" value="{{ old('slug') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Açıqlama</label>
            <textarea id="description" name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label>Şəkil əlavə et</label>
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Yüklə</button>
              </span>
            </div>
          </div>
        <button type="submit" class="btn btn-primary">Təsdiq et</button>
    </form>
</div>
@endsection
