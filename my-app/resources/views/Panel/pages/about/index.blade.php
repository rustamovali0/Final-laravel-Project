@extends('Panel.layouts.app')

@section('content')
<div class="container">
    <h3>Haqqında</h3>
    <a href="{{ route('about.create') }}" class="btn btn-primary">Əlavə et</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Başlıq</th>
                <th>Açıqlama</th>
                <th>Şəkil</th>
                <th>Fəaliyyətlər</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abouts as $about)
            <tr>
                <td>{{ $about->id }}</td>
                <td>{{ $about->name }}</td>
                <td>{{ Str::limit($about->content, 50) }}</td>
                <td>
                    @if($about->image)
                        <img src="{{ asset('storage/' . $about->image) }}" alt="Image" width="100">
                    @endif
                </td>
                <td>
                    <a href="{{ route('about.edit', $about->id) }}" class="btn btn-primary">Redaktə et</a>
                    <form action="{{ route('about.destroy', $about->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Sil</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
