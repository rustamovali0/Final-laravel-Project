@extends('Panel.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Xidmət yarat</h4>
                <form action="{{ route('services.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Xidmətin adı:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Açıqlama:</label>
                        <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Aktiv</option>
                            <option value="0">Deaktiv</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Təsdiq et</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
