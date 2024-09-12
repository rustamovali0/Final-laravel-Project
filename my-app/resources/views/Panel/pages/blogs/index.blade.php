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
                                <th>Resim</th>
                                <th>Başlık</th>
                                <th>Slug</th>
                                <th>Açıklama</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Düzenle</th>
                                <th>Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($blogs) && $blogs->count() > 0)
                            @foreach ($blogs as $blog)
                            <tr>
                                <td class="py-1">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="image" style="width: 50px; height: 50px;"/>
                                </td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->slug }}</td>
                                <td>{{ Str::limit($blog->description, 50) }}</td>
                                <td>{{ $blog->category ?? 'Yok' }}</td>
                                <td><label class="badge badge-{{ $blog->status == '1' ? 'success' : 'danger' }}">{{ $blog->status == '1' ? 'Aktif' : 'Pasif' }}</label></td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Düzenle</a>
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
