@extends('Panel.layouts.app')

@section('content')
    <div class="container">
        <h1>Məhsullar</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary" style="margin-bottom: 1.2rem;">Məhsul əlavə et</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Şəkil</th>
                    <th>Slug</th>
                    <th>Ad</th>
                    <th>Qiymət</th>
                    <th>Fəaliyyətlər</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->slug }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Redaktə et</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
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
