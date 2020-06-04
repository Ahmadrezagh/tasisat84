@extends('layouts.panel')

@section('panel-content')
<div class="card">
    <div class="card-header">ارسال پیامک</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h5>ارسال پیامک</h5>
          <form action="/admin/send_sms" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlSelect1">انتخاب دریافت کننده</label>
              <select class="form-control" name="reciver" >
                @foreach ($users as $user)
              <option value="{{$user->phone}}" >{{$user->name}}</option>
                @endforeach
              </select>
              <br>
              <label >متن پیام</label>
              <textarea class="form-control" name="msg" id="" cols="30" rows="10"></textarea>
              <br>
            <button type="submit" class="btn btn-primary">ارسال پیام</button>
            </div>
          </form> 
          <hr>
          <h5>
            پیام های ارسال شده
          </h5>
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">دریافت کننده</th>
                <th scope="col">متن پیام</th>
                <th scope="col">وضعیت</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($smss as $sms)
              <th scope="row">{{$sms->id}}</th>
            <th>{{$sms->receptor}}</th>
            <th>{{$sms->message}}</th>
            <th>{{$sms->statustext}}</th>
              @endforeach
            </tbody>
          </table>
      </div>
</div>



@endsection
