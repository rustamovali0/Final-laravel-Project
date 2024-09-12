@extends('Panel.layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Footer text əlavə et</h4>
                    <p class="card-description">
                        <a href="{{ route('setting.create') }}" class="btn btn-primary">Yarat</a>
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
                                    <th>Key</th>
                                    <th>Data</th>
                                    <th>Redaktə et</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($settings) && $settings->count() > 0)
                                    @foreach ($settings as $setting)
                                        <tr>
                                            <td>{{ $setting->id }}</td>

                                            <td class="py-1">
                                                @if ($setting->set_type =='image')
                                                <img src="{{ asset('AdminPanel/img/setting/' . $slider->image) }}"
                                                alt="image" />
                                                @endif
                                            </td>
                                            <td>{{ $setting->name }}</td>
                                            <td>{{ $setting->data ?? '' }}</td>
                                            <td>{{ $setting->set_type }}</td>
                                            <td class="d-flex">
                                                <a href="{{ route('setting.edit', $setting->id) }}"
                                                    class="btn btn-primary mr-0">Redaktə et</a>
                                            </td>
                                            <form action="{{route('setting.destroy',$setting->id)}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <td><button type="submit" href="{{route('setting.edit',$setting->id)}}" class="btn btn-danger">Sil</button></td>
                                            </form>

                                        </tr>
                                    @endforeach
                                @endif


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    @endsection
