@extends('layouts.panel')

@section('panel-content')
<div class="card">
    <div class="card-header">مدیریت پروژه ها</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h5>افزودن پروژه</h5>
          <form action="/admin/projects/add" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">عنوان</label>
          <input type="text" class="form-control" name="title" aria-describedby="emailHelp"  required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">دسته بندی</label>
            <select class="form-control" name="cat" required>
              @foreach ($cats as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">شرح پروژه</label>
          <textarea class="form-control" name="desc" rows="3" required></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">متن محتوا</label>
          <textarea class="form-control text-right" id="editor" name="content" rows="3" required></textarea>
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
