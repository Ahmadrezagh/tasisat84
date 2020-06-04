<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="/assets/images/favicon/favicon.png" rel="icon">
  <title>@yield('title') | {{$website_info[0]->name}}</title>
  <link rel="stylesheet" href="/assets/css/libraries.css">
  <link rel="stylesheet" href="/assets/css/libraries-rtl.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <script src="{{ asset('/js/app.js') }}"></script>
  
    <!-- Include this in your blade layout -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

</head>

<body>
  @include('sweet::alert')
  
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-white header-full header-full-layout2">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index-2.html">
            <img src={{$website_info[0]->logo_nav}} class="logo-light" alt="logo">
            <img src={{$website_info[0]->logo_nav}} class="logo-dark" alt="logo">
            {{-- <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo"> --}}
          </a>
          <div class="header__topbar d-none d-lg-block">
            <div class="d-flex flex-wrap">
              <ul class="contact__list list-unstyled">
                <li>
                  <i class="icon-phone"></i>
                  <div>
                    <span>تماس با ما:</span><strong dir="ltr">{{$website_info[0]->phone}}</strong>
                  </div>
                </li>
                <li>
                  <i class="icon-envelope2"></i>
                  <div>
                    <span>ایمیل:</span><strong>{{$website_info[0]->mail}}</strong>
                  </div>
                </li>
                <li>
                  <i class="icon-clock1"></i>
                  <div>
                    <span>ساعات کاری:</span><strong>{{$website_info[0]->time_to_work}}</strong>
                  </div>
                </li>
              </ul>
              <a href="/contact-us" class="btn btn__secondary module__btn-request">
                <span>تماس با ما</span><i class="icon-arrow-right2"></i>
              </a>
            </div>
          </div><!-- /.header-topbar -->
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
        </div><!-- /.container -->
        <div class="navbar__bottom  sticky-navbar">
          <div class="container">
            <div class="collapse navbar-collapse" id="mainNavigation">
              <ul class="navbar-nav">
                <li class="nav__item">
                  <a href="/" class="nav__item-link @yield('home')">خانه</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="/projects" class="nav__item-link @yield('projects')">پروژه ها</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="/services" class="nav__item-link @yield('services')">خدمات</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="/about-us" class="nav__item-link @yield('aboutus')">درباره ما</a>
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="/contact-us" class="nav__item-link @yield('contact')">تماس با ما</a>
                </li><!-- /.nav-item -->
                @yield('panelx')
                @if(Auth::check())
                <li class="nav__item with-dropdown">
                  <a href="#" class="dropdown-toggle nav__item-link @yield('panel')">پنل کاربری</a>
                  <i class="fa fa-angle-left" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li class="nav__item d-none d-lg-block">
                      <a href="/panel" class="btn btn-primary">پنل کاربری</a>
                    </li>
                    <!-- /.nav-item -->
                    <li class="nav__item d-none d-lg-block">
                      <a class="btn btn-danger"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </li>
                    
                    <li class="nav__item d-block d-lg-none">
                      <a href="/panel" class="nav__item-link" style="color:blue" >پنل کاربری</a>
                    </li>
                    <!-- /.nav-item -->
                    <li class="nav__item d-block d-lg-none">
                      <a class="nav__item-link" style="color:red"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </li>
                    <!-- /.nav-item -->
                  </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                @else
                <li class="nav__item">
                  <a href="/panel" class="nav__item-link @yield('panel')">پنل کاربری</a>
                </li><!-- /.nav-item -->
                @endif
              </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            <div class="navbar-modules d-none d-lg-block">
              <ul class="list-unstyled d-flex align-items-center modules__btns-list">
                <li>
                  <div class="social__icons">
                    @if($website_info[0]->instagram != '#')
                      <a href="https://instagram.com/{{$website_info[0]->instagram}}"><i class="fa fa-instagram"></i></a>
                    @endif
                    @if($website_info[0]->facebook != '#')
                      <a href="https://instagram.com/{{$website_info[0]->facebook}}"><i class="fa fa-facebook"></i></a>
                    @endif
                    @if($website_info[0]->twitter != '#')
                      <a href="https://instagram.com/{{$website_info[0]->twitter}}"><i class="fa fa-twitter"></i></a>
                    @endif
                  </div>
                </li>
                <li>
                  <form class="module__search-form" action="/search" method="GET">
                    <input type="text" name="search" class="search__input" placeholder="جستجو...">
                    <button type="button" class="module__btn module__btn-search"><i class="fa fa-search"></i></button>
                  </form>
                </li>
              </ul><!-- /.modules-wrapper -->
            </div><!-- /.navbar-modules -->
          </div><!-- /.container -->
        </div><!-- /.navbar-bottom -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

    @yield('content')
    <!-- ========================
      Footer
    ========================== -->
    <footer id="footer" class="footer footer-1">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 footer__widget footer__widget-about  mb-30">
              <div class="footer__widget-content">
              <img src={{$website_info[0]->logo_footer}} alt="logo">
                <p>{{$website_info[0]->address}}</p>
                <p>ایمیل: <a href="mailto:{{$website_info[0]->mail}}">{{$website_info[0]->mail}}</a></p>
                <p><a href="tel:{{$website_info[0]->phone}}" class="font-weight-bold color-white" dir="ltr">{{$website_info[0]->phone}}</a></p>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav d-none d-lg-block">
              <h6 class="footer__widget-title">صفحات</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="/services">خدمات ما</a></li>
                    <li><a href="/projects">پروژه های ما</a></li>
                    <li><a href="/contact-us">تماس با ما</a></li>
                    <li><a href="/about-us">درباره ما</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav d-none d-lg-block">
              <h6 class="footer__widget-title">خدمات</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    @foreach ($website_info->category as $category)
                  <li><a href="/search?search={{$category->name}}">{{$category->name}}</a></li>
                    @endforeach
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 footer__widget footer__widget-newsletter d-none d-lg-block">
              <div class="footer__widget-content">
                <h6 class="footer__widget-title">خبرنامه</h6>
                <p>درخبرنامه ما عضو شوید و جدیدترین اخبار را در ایمیل خود دریافت کنید.</p>
                <form class="widget__newsletter-form" action="/newsletter" method="POST">
                  @csrf
                  <div class="form-group mb-0">
                    <input type="email" name="mail"class="form-control" placeholder="ایمیل شما ...">
                    <button type="submit" class="btn btn__primary btn__hover2">عضویت</button>
                  </div>
                </form>
              </div><!-- /.footer-widget-content -->
              <div class="text-right mt-20">
                <span class="footer__contact-link">سوالی دارید ؟
                  <a href="/contact-us">کلیک کنید</a>
                </span>
              </div>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-top -->
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-9">
              <div class="footer__copyright">
                <nav>
                  <ul class="list-unstyled footer__copyright-links d-flex flex-wrap">
                    <li>
                      <a href="https://instagram.com/ahmadreza.gh">
                        {{$website_info[0]->footer}}
                      </a>
                    </li>
                  </ul>
                </nav>

              </div><!-- /.Footer-copyright -->
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center">
              <div class="social__icons justify-content-end w-100">
                @if($website_info[0]->instagram != '#')
                      <a href="https://instagram.com/{{$website_info[0]->instagram}}"><i class="fa fa-instagram"></i></a>
                    @endif
                    @if($website_info[0]->facebook != '#')
                      <a href="https://instagram.com/{{$website_info[0]->facebook}}"><i class="fa fa-facebook"></i></a>
                    @endif
                    @if($website_info[0]->twitter != '#')
                      <a href="https://instagram.com/{{$website_info[0]->twitter}}"><i class="fa fa-twitter"></i></a>
                    @endif
              </div><!-- /.social-icons -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.Footer-bottom -->
      </div><!-- /.container -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

  </div><!-- /.wrapper -->

  <script src="/assets/js/jquery-3.3.1.min.js"></script>
  <script src="/assets/js/plugins.js"></script>
  <script src="/assets/js/main.js"></script>
</body>


</html>
