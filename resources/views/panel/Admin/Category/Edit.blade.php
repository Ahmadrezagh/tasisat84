@extends('layouts.panel')

@section('panel-content')
<div class="card">
    <div class="card-header">مدیریت دسته بندی ها</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h5>مدیریت دسته بندی</h5>
          <form action="/admin/cats/edit/{{$id}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">نام دسته بندی</label>
          <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{$cat->name}}"  required>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">ویرایش</button>
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
