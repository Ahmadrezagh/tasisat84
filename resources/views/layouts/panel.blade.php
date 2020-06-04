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
@section('panelx')
@if(Auth::check())
@if(Auth::user()->admin == 1)
                    <li class="nav__item with-dropdown d-block d-lg-none">
                      <a href="#" class="dropdown-toggle nav__item-link @yield('panel')">پنل ادمین</a>
                      <i class="fa fa-angle-left" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li class="nav__item">
                          <a  class="nav__item-link" href="/admin/projects">
                              مدیریت پروژه ها
                          </a>
                      </li>
                      <hr>
                      <li class="nav__item">
                          <a class="nav__item-link" href="/admin/services">
                              مدیریت خدمات
                          </a>
                      </li>
                      <hr>
                      <li class="nav__item">
                          <a class="nav__item-link" href="/admin/q&a">
                              مدیریت پرسش ها
                          </a>
                      </li>
                      <hr>
                      <li class="nav__item">
                          <a class="nav__item-link" href="/admin/cat">
                              مدیریت دسته بندی ها
                          </a>
                      </li>
                      <hr>
                      <li class="nav__item">
                          <a class="nav__item-link" href="/admin/users">
                              مدیریت کاربران
                          </a>
                      </li>
                      <hr>
                      <li class="nav__item">
                          <a class="nav__item-link" href="/admin/recs">
                              امور مالی شرکت
                          </a>
                      </li>
                      <hr>
                      <li class="nav__item">
                          <a class="nav__item-link" href="/admin/send_sms">
                              ارسال پیامک
                          </a>
                      </li>
                      <hr>
                      <li class="nav__item">
                          <a class="nav__item-link" href="/admin/settings">
                              تنظیمات وبسایت
                          </a>
                      </li>
                      
                      </ul>
                    </li>
                    @endif
                    @endif
@endsection

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
                            <a href="/admin/cat">
                                مدیریت دسته بندی ها
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
                            <a href="/admin/recs">
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