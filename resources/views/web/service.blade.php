@extends('layouts.web')
@section('title')
{{$service->title}}
@endsection
@section('services')
active
@endsection
@section('content')
   <!-- ========================
         page title 
      =========================== -->
      <section id="page-title" class="page-title page-title-layout4 bg-overlay bg-parallax text-center">
      <div class="bg-img"><img src="{{$service->img}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
              <h1 class="pagetitle__heading">{{$service->title}}</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="/">خانه</a></li>
                  @foreach ($categories as $category)
                          @if($category->id == $service->cat_id)
                          <li class="breadcrumb-item"><a href="/services/cat/{{$category->id}}" >{{$category->name}}</a></li>
                         @endif
                      @endforeach
                  <li class="breadcrumb-item active" aria-current="page">{{$service->title}}</li>
                </ol>
              </nav>
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
      <!-- ======================
        Text Content Section
      ========================= -->
      <section id="textContentSection" class="text-content-section">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 d-none d-lg-block">
              <aside class="sidebar mb-30">
                <div class="widget widget-categories">
                  <h5 class="widget__title">دسته بندی</h5>
                  <div class="widget-content">
                    <ul class="list-unstyled">
                      @foreach ($categories as $category)
                          @if($category->id == $service->cat_id)
                            <li><a href="/services/cat/{{$category->id}}" class="active">{{$category->name}}</a></li>
                          @else
                          <li><a href="/services/cat/{{$category->id}}" >{{$category->name}}</a></li>
                          @endif
                      @endforeach
                    </ul>
                  </div><!-- /.widget-content -->
                </div><!-- /.widget-categories -->
              </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-8">
                {!! $service->content !!}
              <h5>پرسش های کلیدی</h5>
              <div id="accordion" class="mb-60">
                @foreach ($questions as $question)
                <div class="accordion-item">
                    <div class="accordion__item-header" data-toggle="collapse" data-target="#collapse{{$question->id}}">
                    <a class="accordion__item-title" href="#">{{$question->question}}</a>
                    </div><!-- /.accordion-item-header -->
                <div id="collapse{{$question->id}}" class="collapse" data-parent="#accordion">
                      <div class="accordion__item-body">
                        <p>{{$question->answer}}</p>
                      </div><!-- /.accordion-item-body -->
                    </div>
                  </div><!-- /.accordion-item -->
                @endforeach
              </div><!-- /.accordion -->
              @if(count($similar_services)>0)
              
              <h5>خدمات مشابه</h5>
              <div class="projects-carousel-2 carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="2"
                data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                data-speed="800">
                @foreach ($similar_services as $service)
                <div class="project-item">
                  <div class="project__img">
                    <img src="{{$service->img}}" alt="project img">
                  </div><!-- /.project-img -->
                  <div class="project__content">
                  <h4 class = "project__title"> <a href="/service/{{$service->id}}"> {{$service->title}} </a> </h4>
                    <div class = "project__cat">
                      @foreach ($categories as $category)
                          @if($category->id == $service->cat_id)
                            <a href="/services/cat/{{$service->id}}"> {{$category->name}} </a>
                          @endif
                      @endforeach
                      
                    </div><!-- /.project-cat -->
                  </div><!-- /.project-content -->
                </div><!-- /.project-item -->
                @endforeach
              </div><!-- /.carousel -->
              
              @endif
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Text Content Section -->
  
@endsection