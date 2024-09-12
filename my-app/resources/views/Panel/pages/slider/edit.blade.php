@extends('Panel.layouts.app')
@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Slayd əlavə et</h4>
            @if ($errors)
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}
            </div>
            @endforeach
            @endif
            @if (session()->get('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif

            @if (!empty($slider->id))

            @php
            $routelink = route('slider.update',$slider->id);
          @endphp
          @else
          @php
            $routelink = route('slider.store');
          @endphp
            @endif
            <form action="{{$routelink}}" class="forms-sample" method="POST" enctype="multipart/form-data">
              @csrf

              @if (!empty($slider->id))
              @method('PUT')
              @endif
              <div class="form-group">
                <div class="input-group col-xs-12">
                    <img style="width: 150px; height: 100px;" src="{{ asset('AdminPanel/img/slider/' . ($slider->image ?? 'cc.jpg')) }}" alt="image"/>

                </div>
              </div>
              <div class="form-group">
                <label for="name">Slayd adı</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$slider->name  ?? ''}}" placeholder="Slider basliq">
              </div>
              <div class="form-group">
                <label for="content">Məzmun</label>
                <textarea class="form-control" id="content" name="content" placeholder="Slider content" rows="3">{!!$slider->content  ?? '' !!}</textarea>
              </div>
              <div class="form-group">
                <label for="link">Slayd linki</label>
                <input type="text" class="form-control" id="link" name="link" value="{{$slider->link  ?? ''}}" placeholder="Slider linki">
              </div>



              <div class="form-group">
                <label>Şəkil əlavə et</label>
                <input type="file" name="image" class="file-upload-default">
                <div class="input-group col-xs-12">
                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="button">Yüklə</button>
                  </span>
                </div>
              </div>

              <div class="form-group">
                <label for="status"></label>
                @php
                    $status = $slider->status  ?? '1';
                @endphp
                <select name="status" id="" class="form-control">
                  <option value="0" {{$status == '0' ? 'selected' : ''}}>Deaktiv</option>
                  <option value="1" {{$status == '1' ? 'selected' : ''}}>Aktiv</option>
                </select>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Təsdiq et</button>
              <button class="btn btn-light">Ləğv et</button>
            </form>
          </div>
        </div>
      </div>

</div>

@endsection
