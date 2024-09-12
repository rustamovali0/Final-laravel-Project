@extends('Panel.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Xidmətlər siyahısı</h4>
                <p class="card-description">
                    <a href="{{ route('services.create') }}" class="btn btn-primary">Xidmət yarat</a>
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
                                <th>Ad</th>
                                <th>Açıqlama</th>
                                <th>Status</th>
                                <th>Redaktə</th>
                                <th>Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($services) && $services->count() > 0)
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->description }}</td>
                                        <td>
                                            <label class="badge badge-{{ $service->status ? 'success' : 'danger' }}">
                                                {{ $service->status ? 'Active' : 'Inactive' }}
                                            </label>
                                        </td>
                                        <td>
                                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary">Redaktə et</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('services.destroy', $service->id) }}" method="POST">
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
