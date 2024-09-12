@extends('Panel.layouts.app')
@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Footer text əlavə et</h4>
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
            @endforeach
            @endif
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif

            @php
                $routelink = !empty($setting->id) ? route('setting.update', $setting->id) : route('setting.store');
            @endphp

<form action="{{ $routelink }}" method="POST">
    @csrf
    @if (!empty($setting->id))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="name">Key</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $setting->name ?? '') }}" placeholder="Key">
    </div>
    <div class="form-group">
        <label for="data">Data</label>
        <input type="text" class="form-control" id="data" name="data" value="{{ old('data', $setting->data ?? '') }}" placeholder="Data">
    </div>

    <button type="submit" class="btn btn-primary mr-2">Təsdiq et</button>
    <button type="reset" class="btn btn-light">Ləğv et</button>
</form>


          </div>
        </div>
      </div>
</div>
@endsection
