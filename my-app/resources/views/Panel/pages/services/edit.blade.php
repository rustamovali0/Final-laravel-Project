@extends('Panel.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Xidməti redaktə et</h4>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('services.update', $service->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Ad</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $service->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Açıqlama</label>
                        <textarea class="form-control" id="description" name="description" required>{{ $service->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1" {{ $service->status == '1' ? 'selected' : '' }}>Aktiv</option>
                            <option value="0" {{ $service->status == '0' ? 'selected' : '' }}>Deaktiv</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Təsdiq et</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
