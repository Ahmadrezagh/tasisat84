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
        <h5>مدیریت پرسش</h5>
          <form action="/admin/questions/edit/{{$question->id}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">پرسش</label>
          <input type="text" class="form-control" name="question" aria-describedby="emailHelp" value="{{$question->question}}"  required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">پاسخ</label>
          <input type="text" class="form-control" name="answer" aria-describedby="emailHelp" value="{{$question->answer}}"  required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">دسته بندی</label>
            <select class="form-control" name="cat" >
                @if($question->cat_id == null){
                  <option value="" selected>هیچ کدام</option>
                }@else{
                  <option value="" >هیچ کدام</option>
                }
                @endif
              @foreach ($cats as $cat)
                @if($cat->id == $question->cat_id)
                <option value="{{$cat->id}}" selected>{{$cat->name}}</option>
                @else
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">پروژه</label>
            <select class="form-control" name="project" >
                @if($question->project_id == null){
                  <option value="" selected>هیچ کدام</option>
                }@else{
                  <option value="" >هیچ کدام</option>
                }
                @endif
              @foreach ($projects as $project)
                @if($project->id == $question->project_id)
                <option value="{{$project->id}}" selected>{{$project->title}}</option>
                @else
                <option value="{{$project->id}}">{{$project->title}}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">خدمات</label>
            <select class="form-control" name="service" >
              @if($question->service_id == null){
                <option value="" selected>هیچ کدام</option>
              }@else{
                <option value="" >هیچ کدام</option>
              }
              @endif
            @foreach ($services as $service)
              @if($service->id == $question->service_id)
              <option value="{{$service->id}}" selected>{{$service->title}}</option>
              @else
              <option value="{{$service->id}}">{{$service->title}}</option>
              @endif
            @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">برای</label>
            <select class="form-control" name="type" >
              @if($question->type == null){
                <option value="" selected>هیچ کدام</option>
              }
              @elseif($question->type == 'project')
              <option value="" >هیچ کدام</option>
              <option value="project" selected>پروژه ها</option>
              <option value="service" >سرویس ها</option>
              @else
              <option value="" >هیچ کدام</option>
              <option value="project" >پروژه ها</option>
              <option value="service" selected>سرویس ها</option>
              @endif
            </select>
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
