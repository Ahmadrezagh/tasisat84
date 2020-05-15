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
        <h5>ویرایش کاربر</h5>
          <form action="/admin/users/edit/{{$user->id}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">نام</label>
          <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{$user->name}}"  required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">ایمیل</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{$user->email}}"  required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">شماره تماس</label>
          <input type="number" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="09123456789" value="{{$user->phone}}"  required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">رمز عبور</label>
          <input type="password" class="form-control" name="password" aria-describedby="emailHelp"  required>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">ویرایش</button>
            </form>
    </div>
</div>
@endsection
