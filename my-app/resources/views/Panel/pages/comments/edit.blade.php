@extends('Panel.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Yorumu redaktə et</h4>

          <form action="{{ route('comments.update', $comment->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="author_name">Komment yazan</label>
              <input type="text" class="form-control" id="author_name" name="author_name" value="{{ $comment->author_name }}" required>
            </div>

            <div class="form-group">
              <label for="author_position">Kommenti yazanın pozisiyası</label>
              <input type="text" class="form-control" id="author_position" name="author_position" value="{{ $comment->author_position }}">
            </div>

            <div class="form-group">
              <label for="comment">Yorum</label>
              <textarea class="form-control" id="comment" name="comment" rows="4" required>{{ $comment->comment }}</textarea>
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

                @if (isset($comment->image) && !empty($comment->image))
                    <div class="mt-2">
                        <label>Yüklənmiş Şəkil</label>
                        <img src="{{ asset('storage/comments/' . $comment->image) }}" alt="Current Image" width="100">

                    </div>
                @endif
            </div>



            <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" id="status" name="status">
                <option value="1" {{ $comment->status ? 'selected' : '' }}>Aktiv</option>
                <option value="0" {{ !$comment->status ? 'selected' : '' }}>Deaktiv</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary">Yenilə</button>
          </form>

        </div>
      </div>
    </div>
</div>
@endsection
