@extends('layouts.panel')

@section('panel-content')
<div class="card">
    <div class="card-header">مدیریت پرسش </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="/admin/questions/add" class="btn btn-primary">ثبت پرسش جدید</a>
        <br>    
        <br>
        <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">شرح پرسش</th>
                <th scope="col">پاسخ</th>
                <th scope="col">عملیات</th>
              </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
              <tr>
              <th scope="row">{{$question->id}}</th>
                <td>{{$question->question}}</td>
                <td>{{ \Illuminate\Support\Str::limit($question->answer, 15, $end='...') }}</td>
                <td>
                    <a href="/admin/questions/edit/{{$question->id}}"  style="color:blue">ویرایش</a>
                <a href="#" data-toggle="modal" data-target="#delete{{$question->id}}" style="color:red">حذف</a>
                </td>
              </tr>
              <!-- Modal -->
              <div dir="rtl" class="modal fade text-center" id="delete{{$question->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                   
                    <div class="modal-body">
                      <h5>
                      آیا در حذف پرسش '{{$question->question}}' مطمئن هستید؟
                    </h5>
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>
                      <a type="button" href="/admin/questions/delete/{{$question->id}}" class="btn btn-primary">بله</a>

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
