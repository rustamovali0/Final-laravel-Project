@extends('Panel.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Slaydların siyahısı</h4>
          <p class="card-description">
          <a href="{{route('slider.create')}}" class="btn btn-primary">Yarat</a>
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
                    <th>Başlıq</th>
                  <th>Məzmun </th>
                  <th>Link</th>
                  <th>Status</th>
                  <th>Redaktə et</th>
                  <th>Sil</th>
                </tr>
              </thead>
              <tbody>
                @if (!empty($sliders) && $sliders->count() > 0)
                @foreach ($sliders as $slider)
                <tr>
                    <td>{{$slider->id}}</td>

                    <td class="py-1">
                        <img src="{{ asset('AdminPanel/img/slider/' . $slider->image) }}" alt="image"/>
                    </td>
                      <td>{{$slider->name}}</td>
                      <td>{{$slider->content ?? ''}}</td>
                      <td>{{$slider->link}}</td>
                      <td><label class="badge badge-{{$slider->status == '1' ? 'success' : 'danger'}}">{{$slider->status == '1' ? 'Aktiv' : 'Deaktiv'}}</label></td>
                      <td class="d-flex">
                        <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-primary mr-2">Redakte et</a></td>
<form action="{{route('slider.destroy',$slider->id)}}" method="POST">
    @csrf
    @method("DELETE")
    <td><button type="submit" href="{{route('slider.edit',$slider->id)}}" class="btn btn-danger">Sil</button></td>
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
