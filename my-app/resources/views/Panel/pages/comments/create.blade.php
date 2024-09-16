@extends('Panel.layouts.app')

@section('content')
<div class="container">
    <h2>Komment əlavə et</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comments.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="author_name">Komment yazan</label>
            <input type="text" id="author_name" name="author_name" class="form-control" value="{{ old('author_name') }}" required>
        </div>
        <div class="form-group">
            <label for="author_position">Kommenti yazanın pozisiyası</label>
            <input type="text" id="author_position" name="author_position" class="form-control" value="{{ old('author_position') }}">
        </div>
        <div class="form-group">
            <label for="comment">Komment</label>
            <textarea id="comment" name="comment" class="form-control" rows="4" required>{{ old('comment') }}</textarea>
        </div>
        <div class="form-group">
            <label>Şəkil yüklə</label>
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Şəkil yükləyin">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Yüklə</button>
              </span>
            </div>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control" required>
                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Aktiv</option>
                <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Deaktiv</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Əlavə et</button>
    </form>
</div>
@endsection
