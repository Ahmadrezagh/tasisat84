@extends('layouts.panel')

@section('panel-content')
<div class="card">
    <div class="card-header">امور مالی </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="/admin/recs/add" class="btn btn-primary">ثبت فیش حقوقی</a>
        <br>    
        <br>
        <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">کارمند مربوطه</th>
                <th scope="col">تاریخ فیش</th>
                <th scope="col">عملیات</th>
              </tr>
            </thead>
            <tbody>
                @foreach($recs as $rec)
              <tr>
              <th scope="row">{{$rec->id}}</th>
                <td>{{DB::table('users')->where('id','=',$rec->user_id)->pluck('name')->first()}}</td>
                <td>{{$rec->created_at}}</td>
                <td>
                    <a href="/admin/recs/edit/{{$rec->id}}"  style="color:blue">ویرایش</a>
                <a href="#" data-toggle="modal" data-target="#delete{{$rec->id}}" style="color:red">حذف</a>
                </td>
              </tr>
              <!-- Modal -->
              <div dir="rtl" class="modal fade text-center" id="delete{{$rec->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                   
                    <div class="modal-body">
                      <h5>
                      آیا در حذف دسته بندی '{{$rec->name}}' مطمئن هستید؟
                    </h5>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>
                      <a type="button" href="/admin/recs/delete/{{$rec->id}}" class="btn btn-primary">بله</a>

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
