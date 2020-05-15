@extends('layouts.panel')

@section('panel-content')
<div class="card">
    <div class="card-header">پنل کاربری</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        {{Auth::user()->name}}، به پنل کاربری خوش آمدید
    </div>
</div>
@endsection
