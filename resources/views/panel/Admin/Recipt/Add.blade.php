@extends('layouts.panel')

@section('panel-content')
<div class="card">
    <div class="card-header">امور مالی شرکت</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h5>ثبت فیش حقوقی جدید</h5>
          <form action="/admin/recs/add" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlSelect1">انتخاب کارمند</label>
            <select class="form-control" name="user_id" >
              @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                <i class="fa fa-picture-o"></i> انتخاب تصویر
              </a>
            </span>
          <input id="thumbnail" class="form-control" type="text" name="filepath"  required>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">ثبت</button>
            </form>
        
      <script>
        {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
      </script>
      <script>
        $('#lfm').filemanager('image');
      </script>
    </div>
</div>
@endsection
