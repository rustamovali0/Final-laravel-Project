@extends('Panel.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Yorumların Siyahısı</h4>
          <p class="card-description">
          <a href="{{route('comments.create')}}" class="btn btn-primary">Yarat</a>
        </p>

            @if (session()->get('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif

          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Şəkil</th>
                    <th>Komment yazan</th>
                    <th>Kommenti yazanın pozisiyası</th>
                    <th>Komment</th>
                    <th>Status</th>
                    <th>Redaktə et</th>
                    <th>Sil</th>
                </tr>
              </thead>
              <tbody>
                @if (!empty($comments) && $comments->count() > 0)
                @foreach ($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td class="py-1">
                        <img src="{{ asset('storage/comments/' . $comment->image) }}" alt="Image">

                    </td>
                    <td>{{$comment->author_name}}</td>
                    <td>{{$comment->author_position ?? ''}}</td>
                    <td>{{$comment->comment}}</td>

                    <td><label class="badge badge-{{$comment->status == '1' ? 'success' : 'danger'}}">{{$comment->status == '1' ? 'Aktiv' : 'Deaktiv'}}</label></td>
                    <td class="d-flex">
                        <a href="{{route('comments.edit', $comment->id)}}" class="btn btn-primary mr-2">Redakte et</a>
                    </td>
                    <form action="{{route('comments.destroy', $comment->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <td>
                            <button type="submit" class="btn btn-danger">Sil</button>
                        </td>
                    </form>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" class="text-center">Boşdur.</td>
                </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection
