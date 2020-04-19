@extends('layouts.web')
@section('title')
خانه
@endsection
@section('home')
active
@endsection
@section('content')
@if (count($sliders) > 0 )
    <!-- ============================
        Slider  || Done
    ============================== -->
    <section id="slider2" class="slider slider-2 text-center">
      <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1"
        data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true"
        data-speed="3000" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        @foreach($sliders as $slider)
        @if($slider->type == '1')
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="{{$slider->img}}" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-10 offset-xl-1">
                <div class="slide__content">
                  <span class="slide__subtitle">{{$slider->subtitle}}</span>
                  <h2 class="slide__title">{{$slider->title}}</h2>
                  <p class="slide__desc">{{$slider->desc}}</p>
                  @if ($slider->btn_orange != null && $slider->btn_orange != '')
                  <a href="{{$slider->btn_orange_link}}" class="btn btn__primary btn__hover2 mr-30">{{$slider->btn_orange}}</a>
                  @endif
                  @if($slider->btn_white != null && $slider->btn_white != '')
                  <a href="{{$slider->btn_white_link}}" class="btn btn__white">{{$slider->btn_white}}</a>
                  @endif
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-10 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        @endif
        @endforeach
      </div><!-- /.carousel -->
    </section><!-- /.slider -->
@endif
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
              @foreach ($services as $service)
              <div class="service-item">
                <div class="service__img">
                  <img src={{$service->img}} alt="service" class="img-fluid">
                </div><!-- /.service-img -->
                <div class="service__content">
                  {{-- Random icon --}}
                  {{-- <div class="service__icon"><i class="icon-tank-1"></i></div> --}}
                <h4 class="service__title">{{$service->title}}</h4>
                <p class="service__desc">{{$service->desc}}</p>
                <a href="/service/{{$service->id}}" class="btn btn__secondary btn__link">
                    <i class="icon-arrow-right2"></i>
                    <span>ادامه مطلب</span>
                  </a>
                </div><!-- /.service-content -->
              </div><!-- /.service-item -->
              @endforeach
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services carousel -->
    <!-- =========================
         About us 
    =========================  -->
    {!! $website_info[0]->aboutus_content !!}
    <!-- ============================
        Slider
    ============================== -->
    <section id="projects-slider" class="projects-slider p-0">
      <div class="owl-carousel thumbs-carousel" data-slider-id="projectsSlider" data-dots="false" data-autoplay="true"
        data-nav="false" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
        @foreach ($sliders as $slider)
        @if($slider->type == '2')
        <div class="slide-item bg-overlay bg-overlay-4">
          <img src={{$slider->img}} alt="slide img">
        </div><!-- /.slide-item -->
        @endif
        @endforeach
      </div><!-- /.carousel -->
      <div class="owl-thumbs thumbs-dots" data-slider-id="projectsSlider">
        @php
          $sc = 1;  
        @endphp
        @foreach ($sliders as $slider)
        @if($slider->type == '2')
        <button class="owl-thumb-item">
          <span class="thumb-item-wrap">
            <span class="thumb-item-wrap-content">
            <span class="thumb__num">0{{$sc}}</span>
              <span class="thumb__title">{{$slider->title}}</span>
            </span>
            <span class="thumb-item-wrap-hover">
            <span class="thumb__num">0{{$sc}}</span>
              <span class="thumb__title">{{$slider->title}}</span>
              <span class="thumb__desc">{{$slider->desc}}</span>
              <i class="fa fa-long-arrow-left"></i>
            </span>
          </span>
        </button>
        @php
           $sc +=1; 
        @endphp
        @endif
        @endforeach
      </div><!-- /.owl-thumbs -->
    </section><!-- /.slider -->
    <!-- ======================
      Projects Grid
    ========================= -->
    <section id="blogGrid" class="blog blog-grid pt-120 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <span class="heading__subtitle">بینش و روند</span>
              <h2 class="heading__title">آخرین پروژه ها</h2>
              <div class="divider__line divider__theme divider__center mb-0"></div>
              <p class="heading__desc">آخرین پروژه های انجام شده توسط تیم ما.</p>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row-->
        <div class="row">
          <!-- Blog Item #1 -->
          @foreach ($projects as $project)
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
              <div class="blog__img">
                <a href="#">
                  <img src={{$project->img}} alt="blog image">
                </a>
              </div><!-- /.entry-img -->
              <div class="blog__content">
                <div class="blog__meta">
                  <div class="blog__meta-cat">
                    @foreach($website_info->categories as $category)
                      @if($category->id == $project->cat_id)
                  <a href="/search?search={{$category->name}}">{{$category->name}}</a>
                      @endif
                    @endforeach
                  </div><!-- /.blog-meta-cat -->
                </div><!-- /.blog-meta -->
              <h4 class="blog__title"><a href="/project/{{$project->id}}">{{$project->title}}</a></h4>
                <p class="blog__desc">{{$project->desc}}
                </p>
                <a href="/project/{{$project->id}}" class="btn btn__secondary btn__link">
                  <span>ادامه مطلب</span>
                  <i class="icon-arrow-right2"></i>
                </a>
              </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
          </div><!-- /.col-lg-4 -->
          
          @endforeach
        </div><!-- /.row-->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->
@endsection
