@extends('Panel.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Bloq siyahısı</h4>
                <p class="card-description">
                    <a href="{{ route('blogs.create') }}" class="btn btn-primary">Blog Ekle</a>
                </p>

                @if (session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Şəkil</th>
                                <th>Başlıq</th>
                                <th>Slug</th>
                                <th>Açıqlama</th>
                                <th>Kateqorya</th>
                                <th>Status</th>
                                <th>Redaktə et</th>
                                <th>Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($blogs) && $blogs->count() > 0)
                            @foreach ($blogs as $blog)
                            <tr>
                                <td class="py-1">
                                    <td>{{ $blog->id }}</td>

                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="image" style="width: 50px; height: 50px;"/>
                                </td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->slug }}</td>
                                <td>{{ Str::limit($blog->description, 50) }}</td>
                                <td>{{ $blog->category ?? 'Yoxdur' }}</td>
                                <td><label class="badge badge-{{ $blog->status == '1' ? 'success' : 'danger' }}">{{ $blog->status == '1' ? 'Aktiv' : 'Deaktiv' }}</label></td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Redaktə et</a>
                                </td>
                                <td>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Sil</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
