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
        <a href="/admin/projects/add" class="btn btn-primary">ثبت پروژه جدید</a>
        <br>    
        <br>
        <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">عنوان</th>
                <th scope="col">شرح پروژه</th>
                <th scope="col">عملیات</th>
              </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
              <tr>
              <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{ \Illuminate\Support\Str::limit($project->desc, 15, $end='...') }}</td>
                <td>
                    <a href="/admin/projects/edit/{{$project->id}}"  style="color:blue">ویرایش</a>
                <a href="#" data-toggle="modal" data-target="#delete{{$project->id}}" style="color:red">حذف</a>
                </td>
              </tr>
              <!-- Modal -->
              <div dir="rtl" class="modal fade text-center" id="delete{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                   
                    <div class="modal-body">
                      <h5>
                      آیا در حذف پروژه '{{$project->title}}' مطمئن هستید؟
                    </h5>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>
                      <a type="button" href="/admin/projects/delete/{{$project->id}}" class="btn btn-primary">بله</a>

                    </div>
                    <br>
                  </div>
                </div>
              </div>
              @endforeach
            </tbody>
          </table>
        
    </div>
</div>



@endsection
