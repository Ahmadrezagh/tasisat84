<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Industic - Factory and Manufacturing Html Template">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>@yield('title') | {{$website_info[0]->name}}</title>
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/libraries-rtl.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-white header-full header-full-layout2">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index-2.html">
            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
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
                    <span>ساعات کاری:</span><strong>{{$website_info[0]->work_time}}</strong>
                  </div>
                </li>
              </ul>
              <a href="request-quote.html" class="btn btn__secondary module__btn-request">
                <span>درخواست مشاوره</span><i class="icon-arrow-right2"></i>
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
                <li class="nav__item with-dropdown">
                  <a href="index-2.html" class="dropdown-toggle nav__item-link @yield('home')">خانه</a>
                  <i class="fa fa-angle-left" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li class="nav__item"><a href="index-2.html" class="nav__item-link">اصلی</a></li>
                    <!-- /.nav-item -->
                    <li class="nav__item"><a href="home-modern.html" class="nav__item-link">مدرن</a></li>
                    <!-- /.nav-item -->
                    <li class="nav__item"><a href="home-classic.html" class="nav__item-link">کلاسیک</a></li>
                    <!-- /.nav-item -->
                  </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item with-dropdown">
                  <a href="about-us.html" class="dropdown-toggle nav__item-link">صفحات</a>
                  <i class="fa fa-angle-left" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li class="nav__item"><a href="about-us.html" class="nav__item-link">درباره ما</a></li>
                    <!-- /.nav-item -->
                    <li class="nav__item"><a href="why-us.html" class="nav__item-link">چرا ما؟</a></li>
                    <!-- /.nav-item -->
                    <li class="nav__item"><a href="leadership-team.html" class="nav__item-link">تیم ما</a></li>
                    <!-- /.nav-item -->
                    <li class="nav__item"><a href="awards.html" class="nav__item-link">جوایز</a>
                    </li>
                    <!-- /.nav-item -->
                    <li class="nav__item"><a href="pricing.html" class="nav__item-link">تعرفه ها</a></li>
                    <!-- /.nav-item -->
                    <li class="nav__item"><a href="faqs.html" class="nav__item-link">پرسش و پاسخ</a></li>
                    <!-- /.nav-item -->
                    <li class="nav__item"><a href="careers.html" class="nav__item-link">فرصت های شغلی</a></li>
                    <!-- /.nav-item -->
                  </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item with-dropdown">
                  <a href="Industries-industry-served.html" class="dropdown-toggle nav__item-link">صنایع</a>
                  <i class="fa fa-angle-left" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu wide-dropdown-menu">
                    <li class="nav__item">
                      <div class="row mx-0">
                        <div class="col-sm-6 dropdown-menu-col">
                          <h6>خدماتی</h6>
                          <ul class="nav flex-column">
                            <li class="nav__item"><a class="nav__item-link"
                                                     href="industries-single-industry.html">نفت و گاز</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link"
                                                     href="industries-single-industry.html">ساخت و ساز و مهندسی</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link"
                                                     href="industries-single-industry.html">مهندسی مکانیک</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link"
                                                     href="industries-single-industry.html">صنعت شیمی</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link"
                                                     href="industries-single-industry.html">ساخت خودرو</a>
                            </li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">ساخت پل</a></li>
                            <!-- /.nav-item -->
                          </ul>
                        </div><!-- /.col-sm-6 -->
                        <div class="col-sm-6 dropdown-menu-col">
                          <h6>بخش های صنعت</h6>
                          <ul class="nav flex-column">
                            <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">ماشین آلات صنعتی</a></li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">علوم و بهداشت</a></li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">صنعتی و شیمیایی</a></li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">تولید برق</a></li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">غذا و نوشیدنی</a></li> <!-- /.nav-item -->
                            <li class="nav__item"><a class="nav__item-link" href="industries-single-industry.html">نفت و گاز</a></li>
                            <!-- /.nav-item -->
                          </ul>
                        </div><!-- /.col-sm-6 -->
                      </div><!-- /.row -->
                    </li><!-- /.nav-item -->
                  </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item with-dropdown">
                  <a href="blog.html" class="dropdown-toggle nav__item-link">اخبار و مدیا</a>
                  <i class="fa fa-angle-left" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <li class="nav__item"><a href="blog.html" class="nav__item-link">بلاگ</a></li>
                    <!-- /.nav-item -->
                    <li class="nav__item"><a href="blog-single-post.html" class="nav__item-link">مطلب بلاگ</a></li>
                    <!-- /.nav-item -->
                    <li class="nav__item"><a href="case-studies-grid.html" class="nav__item-link">پروژه تحقیقاتی شبکه ای</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item"><a href="case-studies-carousel.html" class="nav__item-link">پروژه تحقیقاتی اسلایدر</a></li><!-- /.nav-item -->
                    <li class="nav__item"><a href="case-studies-single.html" class="nav__item-link">مطلب پروژه تحقیقاتی</a>
                    </li><!-- /.nav-item -->
                  </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <li class="nav__item">
                  <a href="contacs.html" class="nav__item-link">تماس با ما</a>
                </li><!-- /.nav-item -->
              </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            <div class="navbar-modules d-none d-lg-block">
              <ul class="list-unstyled d-flex align-items-center modules__btns-list">
                <li>
                  <div class="social__icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </li>
                <li>
                  <form class="module__search-form">
                    <input type="text" class="search__input" placeholder="جستجو...">
                    <button class="module__btn module__btn-search"><i class="fa fa-search"></i></button>
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
                <img src="assets/images/logo/logo-footer.png" alt="logo">
                <p>{{$website_info[0]->address}}</p>
                <p>ایمیل: <a href="mailto:{{$website_info[0]->mail}}">{{$website_info[0]->mail}}</a></p>
                <p><a href="tel:{{$website_info[0]->phone}}" class="font-weight-bold color-white" dir="ltr">{{$website_info[0]->phone}}</a></p>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">صفحات</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">تیم ما</a></li>
                    <li><a href="#">اخبار و مدیا</a></li>
                    <li><a href="#">پروژه تحقیقاتی</a></li>
                    <li><a href="#">تماس با ما</a></li>
                    <li><a href="#">موقعیت شغلی</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
              <h6 class="footer__widget-title">صنایع</h6>
              <div class="footer__widget-content">
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="#">ماشین آلات صنعتی</a></li>
                    <li><a href="#">علوم و بهداشت</a></li>
                    <li><a href="#">صنعتی و شیمیایی</a></li>
                    <li><a href="#">تولید برق</a></li>
                    <li><a href="#">غذا و نوشیدنی</a></li>
                    <li><a href="#">نفت و گاز</a></li>
                  </ul>
                </nav>
              </div><!-- /.footer-widget-content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 footer__widget footer__widget-newsletter">
              <div class="footer__widget-content">
                <h6 class="footer__widget-title">خبرنامه</h6>
                <p>درخبرنامه ما عضو شوید و جدیدترین اخبار را در ایمیل خود دریافت کنید.</p>
                <form class="widget__newsletter-form">
                  <div class="form-group mb-0">
                    <input type="text" class="form-control" placeholder="ایمیل شما ...">
                    <button type="submit" class="btn btn__primary btn__hover2">عضویت</button>
                  </div>
                </form>
              </div><!-- /.footer-widget-content -->
              <div class="text-right mt-20">
                <span class="footer__contact-link">سوالی دارید ؟
                  <a href="contacs.html">کلیک کنید</a>
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
                    <li><a href="#">قوانین و مقررات </a></li>
                    <li><a href="#">حریم شخصی</a></li>
                    <li><a href="#">نقشه سایت</a></li>
                  </ul>
                </nav>

              </div><!-- /.Footer-copyright -->
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center">
              <div class="social__icons justify-content-end w-100">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div><!-- /.social-icons -->
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.Footer-bottom -->
      </div><!-- /.container -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>


</html>
