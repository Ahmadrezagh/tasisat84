@extends('layouts.web')
@section('title')
خانه
@endsection
@section('home')
active
@endsection
@section('content')
    <!-- ============================
        Slider
    ============================== -->
    <section id="slider2" class="slider slider-2 text-center">
      <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1"
        data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true"
        data-speed="3000" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="assets/images/sliders/2.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1">
                <div class="slide__content">
                  <span class="slide__subtitle">تولید انواع محصولات با کیفیت</span>
                  <h2 class="slide__title">مشاور برای تمام نیازهای صنعتی شما!</h2>
                  <p class="slide__desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                  <a href="#" class="btn btn__primary btn__hover2 mr-30">اطالاعات بیشتر</a>
                  <a href="#" class="btn btn__white">خدمات ما</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-10 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="assets/images/sliders/5.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1">
                <div class="slide__content">
                  <span class="slide__subtitle">پروژه های تجاری و صنعتی!</span>
                  <h2 class="slide__title">کادر متخصص و مشاوران باتجربه </h2>
                  <p class="slide__desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                  <a href="#" class="btn btn__white mr-30">خدمات ما</a>
                  <a href="#" class="btn btn__primary">اطالاعات بیشتر</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-10 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="assets/images/sliders/4.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1">
                <div class="slide__content">
                  <span class="slide__subtitle">مشاور برای تمام نیازهای صنعتی شما!</span>
                  <h2 class="slide__title">مشاور برای تمام نیازهای صنعتی شما! </h2>
                  <p class="slide__desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                  <a href="#" class="btn btn__primary btn__hover2 mr-30">اطالاعات بیشتر</a>
                  <a href="#" class="btn btn__white">خدمات ما</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-10 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ========================
        Services carousel
    =========================== -->
    <section id="servicesCarousel" class="services services-carousel pt-120 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
            <div class="heading heading-3 text-center mb-40">
              <span class="heading__subtitle"> بهترین خدمات صنعتی</span>
              <h2 class="heading__title">ارائه خدمات با کارایی بالا برای صنایع و فناوری های مختلف!</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1"
              data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="700">
              <div class="service-item">
                <div class="service__img">
                  <img src="assets/images/services/1.jpg" alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__content">
                  <div class="service__icon"><i class="icon-tank-1"></i></div>
                  <h4 class="service__title">انرژی نفت و گاز</h4>
                  <p class="service__desc">نفت و گاز طبیعی منابع غیرقابل تجدید انرژی هستند ، مایعی که در زیر زمین یافت می شود و می تواند برای ساخت بنزین از آن استفاده کند.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right2"></i>
                    <span>ادامه مطلب</span>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
              <div class="service-item">
                <div class="service__img">
                  <img src="assets/images/services/2.jpg" alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__content">
                  <div class="service__icon"><i class="icon-factory-1"></i></div>
                  <h4 class="service__title">ساخت و ساز و مهندسی</h4>
                  <p class="service__desc">رشته حرفه ای با طراحی ، برنامه ریزی ، ساخت و مدیریت و مدیریت زیرساخت ها مانند جاده ها ، تونل ها ، پل ها سرو کار دارد.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right2"></i>
                    <span>ادامه مطلب</span>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
              <div class="service-item">
                <div class="service__img">
                  <img src="assets/images/services/3.jpg" alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__content">
                  <div class="service__icon"><i class="icon-gears"></i></div>
                  <h4 class="service__title">مهندسی مکانیک</h4>
                  <p class="service__desc">اصول علم مواد برای طراحی ، تجزیه و تحلیل ، ساخت و نگهداری سیستم های مکانیکی. این یکی از قدیمی ترین روش ها است.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right2"></i>
                    <span>ادامه مطلب</span>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
              <div class="service-item">
                <div class="service__img">
                  <img src="assets/images/services/4.jpg" alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__content">
                  <div class="service__icon"><i class="icon-eco"></i></div>
                  <h4 class="service__title">مواد شیمیایی صنعتی</h4>
                  <p class="service__desc">مواد شیمیایی در مقادیر عظیمی و مهیم برای محصولات مختلف مورد استفاده توسط صنعت و مصرف کننده عمومی تولید می شود.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right2"></i>
                    <span>ادامه مطلب</span>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
              <div class="service-item">
                <div class="service__img">
                  <img src="assets/images/services/5.jpg" alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__content">
                  <div class="service__icon"><i class="icon-industrial-robot"></i></div>
                  <h4 class="service__title">انرژی نفت و گاز</h4>
                  <p class="service__desc">نفت و گاز طبیعی منابع غیرقابل تجدید انرژی هستند ، مایعی که در زیر زمین یافت می شود و می تواند برای ساخت بنزین از آن استفاده کند.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right2"></i>
                    <span>ادامه مطلب</span>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
              <div class="service-item">
                <div class="service__img">
                  <img src="assets/images/services/6.jpg" alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__content">
                  <div class="service__icon"><i class="icon-cart"></i></div>
                  <h4 class="service__title">ساخت و ساز و مهندسی</h4>
                  <p class="service__desc">رشته حرفه ای با طراحی ، برنامه ریزی ، ساخت و مدیریت و مدیریت زیرساخت ها مانند جاده ها ، تونل ها ، پل ها سرو کار دارد.</p>
                  <a href="#" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right2"></i>
                    <span>ادامه مطلب</span>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services carousel -->

    <!-- =========================
         Banner 3
    =========================  -->
    <section id="Banner3" class="banner banner-3 p-0">
      <div class="container-fluid col-padding-0">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 bg-theme">
            <div class="inner-padding">
              <div class="heading heading-2 heading-white mb-30">
                <h2 class="heading__title">ارائه کننده راه حل های نوآورانه</h2>
                <p class="heading__desc">به عنوان یک شرکت متنوع مدیریت ساخت و ساز ، طراحی و ساخت و پیمانکاری عمومی ، گروه صنایع به عنوان یکی از شرکتهای برجسته صنعت و تولید جهان شناخته می شود! گروه صنایع در حال ایجاد روابط و پروژه هایی است که دوام دارد. ارائه لیست چشمگیر از مشتریان بلند مدت با تجربه و تخصص در صنایع مختلف..</p>
              </div><!-- /.heading -->
              <ul class="list-unstyled list-items list-items-white mb-40">
                <li> سیستم کنترل کیفیت </li>
                <li> طرز کار بی نظیر </li>
                <li> اهداف عملکردی </li>
                <li> 100٪ ضمانت رضایت </li>
                <li> حرفه ای و واجد شرایط </li>
                <li> کارمندان بسیار حرفه ای </li>
                <li> حساسیت محیطی </li>
                <li> فرآیندهای تست دقیق </li>
                <li> راه حل های شخصی شده </li>
              </ul>
              <a href="#" class="btn btn__white btn__bordered btn__hover2 btn__lg">درخواست مشاوره</a>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6 bg-overlay bg-overlay-4 pt-100 pb-100">
            <div class="bg-img"><img src="assets/images/video/1.jpg" alt=""></div>
            <div class="vertical-align-center text-center">
              <div class="video__btn">
                <a class="popup-video" href="https://www.youtube.com/watch?4=&amp;v=TKnufs85hXk">
                  <span class="video__player-animation"></span>
                  <span class="video__player-animation video__player-animation-2"></span>
                  <span class="video__player-animation video__player-animation-3"></span>
                  <div class="video__player">
                    <i class="fa fa-play"></i>
                  </div>
                </a>
              </div><!-- /.video -->
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner 3 -->

    <!-- ========================
      About 2
    =========================== -->
    <section id="about2" class="about about-2 pt-120 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9 offset-xl-1 ">
            <div class="heading heading-3 mb-50">
              <span class="heading__subtitle">تولید انواع محصولات با بالاترین کیفیت</span>
              <h2 class="heading__title"> پیشرو در صنعت و تولید ، از سال 1997 فعالیت خود را آغاز کرد.</h2>
            </div><!-- /heading -->
          </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="about__text mt-30">
              <p>گروه صنایع یک نماینده ساخت و ساز صنعتی است که ارائه دهنده خدمات گسترده ای در حوزه مهندسی مکانیک در سراسر جهان است.</p>
              <p>دنیا سریعتر از گذشته تغییر می کند ، تجارت نیز از این قاعده مستثنا نیست. صنایع مختص صنایع با تهدید تکنولوژی و نابودی نرم افزار جهان ، تهدید می شوند. با این حال ، آنهایی که تغییر را در آغوش می گیرند پر رونق هستند ، محصولات بزرگتر ، بهتر ، سریعتر و قوی تری از گذشته تولید می کنند. شما در حال هدایت اتهام هستید. ما می توانیم به شما کمک کنیم تا موفقیتهای گذشته خود را بسازید و برای آینده آماده شوید.</p>
            </div>
            <div class="signature mb-30">
              <img src="assets/images/about/singnture.png" alt="singnture" class="signature">

            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-8 col-lg-5">
            <div class="about__img">
              <img src="assets/images/about/3.jpg" alt="about" class="img-fluid">
              <a href="https://www.youtube.com/watch?4=&amp;v=TKnufs85hXk" class="btn btn__primary popup-video">
                <i class="fa fa-play"></i><span class="mr-1">نمایش ویدئو</span>
              </a>
            </div><!-- /.about-img -->
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-3">
            <div class="features-list features-list-layout1 mt-30">
              <div class="feature-item feature-list-item">
                <div class="feature__content">
                  <h4 class="feature__title">کیفیت</h4>
                  <p class="feature__desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است.</p>
                </div><!-- /.feature-content -->
              </div><!-- /.feature-item -->
              <div class="feature-item feature-list-item">
                <div class="feature__content">
                  <h4 class="feature__title">قابل اطمینان</h4>
                  <p class="feature__desc">چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                </div><!-- /.feature-content -->
              </div><!-- /.feature-item -->
              <div class="feature-item feature-list-item">
                <div class="feature__content">
                  <h4 class="feature__title">نوآوری</h4>
                  <p class="feature__desc">رای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                  </p>
                </div><!-- /.feature-content -->
              </div><!-- /.feature-item -->
            </div>
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About 2 -->

    <!-- ============================
        Slider
    ============================== -->
    <section id="projects-slider" class="projects-slider p-0">
      <div class="owl-carousel thumbs-carousel" data-slider-id="projectsSlider" data-dots="false" data-autoplay="true"
        data-nav="false" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        <div class="slide-item bg-overlay bg-overlay-4">
          <img src="assets/images/case-studies/slider/1.jpg" alt="slide img">
        </div><!-- /.slide-item -->
        <div class="slide-item bg-overlay bg-overlay-4">
          <img src="assets/images/case-studies/slider/2.jpg" alt="slide img">
        </div><!-- /.slide-item -->
        <div class="slide-item bg-overlay bg-overlay-4">
          <img src="assets/images/case-studies/slider/3.jpg" alt="slide img">
        </div><!-- /.slide-item -->
        <div class="slide-item bg-overlay bg-overlay-4">
          <img src="assets/images/case-studies/slider/4.jpg" alt="slide img">
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
      <div class="owl-thumbs thumbs-dots" data-slider-id="projectsSlider">
        <button class="owl-thumb-item">
          <span class="thumb-item-wrap">
            <span class="thumb-item-wrap-content">
              <span class="thumb__num">01</span>
              <span class="thumb__title">کارخانه مواد شیمیایی</span>
            </span>
            <span class="thumb-item-wrap-hover">
              <span class="thumb__num">01</span>
              <span class="thumb__title">کارخانه مواد شیمیایی</span>
              <span class="thumb__desc">شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان.</span>
              <i class="fa fa-long-arrow-left"></i>
            </span>
          </span>
        </button>
        <button class="owl-thumb-item">
          <span class="thumb-item-wrap">
            <span class="thumb-item-wrap-content">
              <span class="thumb__num">02</span>
              <span class="thumb__title">کارخانه مواد شیمیایی</span>
            </span>
            <span class="thumb-item-wrap-hover">
              <span class="thumb__num">02</span>
              <span class="thumb__title">کارخانه مواد شیمیایی</span>
              <span class="thumb__desc">شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان.</span>
              <i class="fa fa-long-arrow-left"></i>
            </span>
          </span>
        </button>
        <button class="owl-thumb-item">
          <span class="thumb-item-wrap">
            <span class="thumb-item-wrap-content">
              <span class="thumb__num">03</span>
              <span class="thumb__title">کارخانه مواد شیمیایی</span>
            </span>
            <span class="thumb-item-wrap-hover">
              <span class="thumb__num">03</span>
              <span class="thumb__title">کارخانه مواد شیمیایی</span>
              <span class="thumb__desc">شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان.</span>
              <i class="fa fa-long-arrow-left"></i>
            </span>
          </span>
        </button>
        <button class="owl-thumb-item">
          <span class="thumb-item-wrap">
            <span class="thumb-item-wrap-content">
              <span class="thumb__num">04</span>
              <span class="thumb__title">کارخانه مواد شیمیایی</span>
            </span>
            <span class="thumb-item-wrap-hover">
              <span class="thumb__num">04</span>
              <span class="thumb__title">کارخانه مواد شیمیایی</span>
              <span class="thumb__desc">شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان.</span>
              <i class="fa fa-long-arrow-left"></i>
            </span>
          </span>
        </button>
      </div><!-- /.owl-thumbs -->
    </section><!-- /.slider -->

    <!-- ========================
      About 1
    =========================== -->
    <section id="about1" class="about about-1 pt-120 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="carousel-wrap">
              <div class="carousel owl-carousel carousel-arrows" data-slide="1" data-slide-md="1" data-slide-sm="1"
                data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="700">
                <img src="assets/images/about/1.jpg" alt="about img" class="img-fluid">
                <img src="assets/images/about/2.jpg" alt="about img" class="img-fluid">
              </div><!-- /.carousel -->
              <div class="counter-item counters-white">
                <div class="counter__icon"><i class="icon-worker-1"></i></div>
                <h4 class="counter">2,512</h4>
                <p class="counter__subtitle">کارمند</p>
              </div><!-- /.counter-item -->
            </div>
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading heading-2 mt-50">
              <span class="heading__subtitle">شرکت صنعتی پیشرو در جهان!</span>
              <h2 class="heading__title">محصولات کارآمد و امکانات فنی پیشرفته!</h2>
              <p class="heading__desc">مهندسی صنایع براساس تعالی مهندسی ساخته شده است كه از طریق فداكاری بی حد و حصر به كیفیت ، نوآوری و یك هدف ثابت برای خدمت به بازارهای جهانی و دهه های تخصصی صنعت جوان ساخته شده است.</p>
            </div><!-- /heading -->
            <img src="assets/images/about/singnture.png" alt="singnture" class="signature ml-30">
            <a href="#" class="btn btn__default btn__bordered">اطالاعات بیشتر</a>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About 1 -->

    <!-- =====================
         Clients 1
      ======================== -->
    <section id="clients" class="clients clients-1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true"
              data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
              <div class="client">
                <a href="#"><img src="assets/images/clients/9.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/10.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/11.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/12.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/13.png" alt="client"></a>
              </div><!-- /.client -->
              <div class="client">
                <a href="#"><img src="assets/images/clients/11.png" alt="client"></a>
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients 1 -->

    <!-- =========================
       Banner 1
      =========================== -->
    <section id="banner1" class="banner banner-1 fancybox-white bg-overlay bg-overlay-theme bg-parallax pt-110 pb-110">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="request__form mr-50">
              <div class="request__form-body">
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <h4 class="request__form-title">درخواست مشاوره</h4>
                    <p class="request__form-desc">کنترل کامل بر روی محصولات به ما امکان می دهد اطمینان حاصل کنیم که مشتریان ما از بهترین کیفیت و خدمات با بهترین کیفیت برخوردار می شوند. ما به هر کاری که انجام می دهیم افتخار می کنیم .
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="نام">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="ایمیل">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="شماره تماس">
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group form-group-select">
                      <select class="form-control">
                        <option>زمینه فعالیت</option>
                        <option>صنعت 1</option>
                        <option>صنعت 2</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="پیام شما ..."></textarea>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button class="btn btn__secondary">ارسال درخواست</button>
                  </div><!-- /.col-lg-12 -->
                </div>
              </div><!-- /.request-form-body -->
            </div><!-- /.request-form -->
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="video__btn video__btn-white mb-40">
              <a class="popup-video" href="https://www.youtube.com/watch?4=&amp;v=TKnufs85hXk">
                <span class="video__player-animation"></span>
                <span class="video__player-animation video__player-animation-2"></span>
                <span class="video__player-animation video__player-animation-3"></span>
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
              </a>
            </div><!-- /.video -->
            <div class="heading heading-2 mb-50">
              <h3 class="heading__title color-white">هر طرح را بطور جداگانه ارزیابی کنید و راه حل های بهینه ارائه دهید!</h3>
              <p class="heading__desc color-white">ارائه لیست چشمگیر از مشتریان بلند مدت با تجربه و تخصص در صنایع مختلف.</p>
            </div><!-- /.heading -->
            <div class="row">
              <!-- fancybox item #1 -->
              <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox__icon">
                    <i class="icon-waste"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox__content">
                    <h4 class="fancybox__title">محیط های <br> حساس</h4>
                    <div class="divider__line divider__sm divider__white"></div>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-3 -->
              <!-- fancybox item #2 -->
              <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox__icon">
                    <i class="icon-gears-1"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox__content">
                    <h4 class="fancybox__title">راه حل های <br> شخصی</h4>
                    <div class="divider__line divider__sm divider__white"></div>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-3 -->
              <!-- fancybox item #3 -->
              <div class="col-4 col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox__icon">
                    <i class="icon-management"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox__content">
                    <h4 class="fancybox__title">معیار <br> کارایی</h4>
                    <div class="divider__line divider__sm divider__white"></div>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /. Banner 1 -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section id="blogGrid" class="blog blog-grid pt-120 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">بینش و روند</span>
              <h2 class="heading__title">آخرین مقالات</h2>
              <div class="divider__line divider__theme divider__center mb-0"></div>
              <p class="heading__desc">آخرین اخبار و افکار ما را دنبال کنید که فقط روی بینش ، روند صنعت ، عناوین برتر اخبار متمرکز شده است.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row-->
        <div class="row">
          <!-- Blog Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="#">
                  <img src="assets/images/blog/grid/1.jpg" alt="blog image">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <div class="blog__meta-cat">
                    <a href="#">نفت و گاز</a><a href="#">بینش</a>
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="#">واردکنندگان از طریق قانون فروش اول به پس انداز هزینه می رسند!</a></h4>
                <span class="blog__meta-date">02 فروردین 1399</span>
                <p class="blog__desc">جنگ تجاری که در حال حاضر بین ایالات متحده و چندین کشور در سراسر جهان آغاز شده است ، و بیشترین خشونت را با چین نشان می دهد كه هیچ مجموعه ای از تعرفه های تعیین شده علیه خورشیدی نشان نمی دهد ...
                </p>
                <a href="#" class="btn btn__secondary btn__link">
                  <span>ادامه مطلب</span>
                  <i class="icon-arrow-right2"></i>
                </a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="#">
                  <img src="assets/images/blog/grid/2.jpg" alt="blog image">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <div class="blog__meta-cat">
                    <a href="#">صنعت</a><a href="#">ساخت و ساز</a>
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="#">کنترل محموله از طریق دید بهتر زنجیره تأمین و کنترل</a></h4>
                <span class="blog__meta-date">25 اسفند 1398</span>
                <p class="blog__desc">ارائه دهنده خدمات جهانی متصل به مصرف کنندگان و شرکتهای مختلف در سراسر جهان ، کنترل زنجیره تأمین همه چیز است ...</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <span>ادامه مطلب</span>
                  <i class="icon-arrow-right2"></i>
                </a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Blog Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="#">
                  <img src="assets/images/blog/grid/3.jpg" alt="blog image">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <div class="blog__meta-cat">
                    <a href="#">مهندسی</a><a href="#">توزیع</a>
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="#">اهمیت تمرکز تخصصی در پروژه هاس نفت و گاز</a></h4>
                <span class="blog__meta-date">18 بهمن 1398</span>
                <p class="blog__desc">یم ما مدیران پروژه ماهر و باتجربه ای را ارائه می دهد که از پیچیدگی های این عمودی اطلاع دارند و بر ارائه راه حل های نوآورانه در بخش نفت و گاز تمرکز می کنند ...</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <span>ادامه مطلب</span>
                  <i class="icon-arrow-right2"></i>
                </a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row-->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->
@endsection
