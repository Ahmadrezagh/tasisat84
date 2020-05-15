@extends('layouts.panel')

@section('panel-content')
<div class="card">
    <div class="card-header">مدیریت کاربران</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h5>افزودن کاربر</h5>
          <form action="/admin/users/add" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">نام</label>
          <input type="text" class="form-control" name="name" aria-describedby="emailHelp"  required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">ایمیل</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp"  required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">شماره تماس</label>
          <input type="number" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="09123456789"  required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">رمز عبور</label>
          <input type="password" class="form-control" name="password" aria-describedby="emailHelp"  required>
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
