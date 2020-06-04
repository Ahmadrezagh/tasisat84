@extends('layouts.panel')

@section('panel-content')
<div class="card">
    <div class="card-header">فیش های حقوقی</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <br>    
        <br>
        <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">تاریخ فیش</th>
                <th scope="col">عملیات</th>
              </tr>
            </thead>
            <tbody>
                @foreach($recs as $rec)
              <tr>
              <th scope="row">{{$rec->id}}</th>
                <td>{{$rec->created_at}}</td>
                <td>
                    <a href="{{$rec->rcp_img}}"  style="color:blue" download>دانلود</a>
                </td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
        
    </div>
</div>



@endsection
