@extends('layouts.web')
@section('title')
پنل کاربری
@endsection
@section('panel')
active
@endsection
@section('content')
<br>
<div class="d-none d-lg-block">
    <br>
    <br>
    <br>
</div>
@if(Auth::check())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 d-none d-lg-block">
            @if(Auth::user()->admin == 1)
            <div class="card">
                <div class="card-header">
                    منو
                </div>
                <div class="card-body">
                    <ul>
                        <li>
                            <a href="/admin/projects">
                                مدیریت پروژه ها
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="/admin/services">
                                مدیریت خدمات
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="/admin/q&a">
                                مدیریت پرسش ها
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="/admin/users">
                                مدیریت کاربران
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="/admin/financial_department">
                                امور مالی شرکت
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="/admin/send_sms">
                                ارسال پیامک
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="/admin/settings">
                                تنظیمات وبسایت
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            @else
            <div class="card">
                <div class="card-header">
                    منو
                </div>
                <div class="card-body">
                    <ul>
                        <li>
                            <a href="/user/receipt">
                                فیش های حقوقی
                            </a>
                        </li>
                        <hr>
                        <li>
                            <a href="/user/chat">
                                پیام به پشتیبانی
                            </a>
                        </li>
                        <hr>
                        
                    </ul>
                </div>
            </div>
            @endif
        </div>
        <div class="col-md-12 col-lg-9">
            @yield('panel-content')
            
        </div>
    </div>
</div>
@else
@yield('panel-content')
@endif
<br>
<br>
@endsection