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
        <a href="/admin/users/add" class="btn btn-primary">ثبت کاربر جدید</a>
        <br>    
        <br>
        <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">نام</th>
                <th scope="col">شماره تماس</th>
                <th scope="col">عملیات</th>
              </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
              <tr>
              <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    <a href="/admin/users/edit/{{$user->id}}"  style="color:blue">ویرایش</a>
                <a href="#" data-toggle="modal" data-target="#delete{{$user->id}}" style="color:red">حذف</a>
                </td>
              </tr>
              <!-- Modal -->
              <div dir="rtl" class="modal fade text-center" id="delete{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                   
                    <div class="modal-body">
                      <h5>
                      آیا در حذف کاربر '{{$user->user}}' مطمئن هستید؟
                    </h5>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>
                      <a type="button" href="/admin/users/delete/{{$user->id}}" class="btn btn-primary">بله</a>

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
