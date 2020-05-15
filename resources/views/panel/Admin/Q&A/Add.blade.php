@extends('layouts.panel')

@section('panel-content')
<div class="card">
    <div class="card-header">مدیریت پرسش ها</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h5>افزودن پرسش</h5>
          <form action="/admin/questions/add" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">پرسش</label>
          <input type="text" class="form-control" name="question" aria-describedby="emailHelp"  required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">پاسخ</label>
          <input type="text" class="form-control" name="answer" aria-describedby="emailHelp"  required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">دسته بندی</label>
            <select class="form-control" name="cat" >
                <option value="" selected>هیچ کدام</option>
              @foreach ($cats as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">پروژه</label>
            <select class="form-control" name="project" >
              <option value="" selected>هیچ کدام</option>
              @foreach ($projects as $project)
                <option value="{{$project->id}}">{{$project->title}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">خدمات</label>
            <select class="form-control" name="service" >
              <option value="" selected>هیچ کدام</option>
              @foreach ($services as $service)
                <option value="{{$service->id}}">{{$service->title}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">برای</label>
            <select class="form-control" name="type" >
              <option value="" selected>هیچ کدام</option>
              <option value="service">سرویس ها</option>
              <option value="project">پروژه ها</option>
            </select>
          </div>

          
          <br>
          <button type="submit" class="btn btn-primary">ثبت</button>
            </form>
        
    
    
    <script>
      var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
      };
    </script>
    <script>
      CKEDITOR.replace('editor', options);
      </script>
      <script>
        {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
      </script>
      <script>
        $('#lfm').filemanager('image');
      </script>
    </div>
</div>
@endsection
