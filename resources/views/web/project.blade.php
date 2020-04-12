@extends('layouts.web')
@section('title')
{{$project->title}}
@endsection
@section('projects')
active
@endsection
@section('content')
   <!-- ========================
         page title 
      =========================== -->
      <section id="page-title" class="page-title page-title-layout4 bg-overlay bg-parallax text-center">
      <div class="bg-img"><img src="{{$project->img}}" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
              <h1 class="pagetitle__heading">{{$project->title}}</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="/">خانه</a></li>
                  @foreach ($categories as $category)
                          @if($category->id == $project->cat_id)
                          <li class="breadcrumb-item"><a href="/projects/cat/{{$category->id}}" >{{$category->name}}</a></li>
                         @endif
                      @endforeach
                  <li class="breadcrumb-item active" aria-current="page">{{$project->title}}</li>
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
                          @if($category->id == $project->cat_id)
                            <li><a href="/projects/cat/{{$category->id}}" class="active">{{$category->name}}</a></li>
                          @else
                          <li><a href="/projects/cat/{{$category->id}}" >{{$category->name}}</a></li>
                          @endif
                      @endforeach
                    </ul>
                  </div><!-- /.widget-content -->
                </div><!-- /.widget-categories -->
              </aside><!-- /.sidebar -->
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-8">
                {!! $project->content !!}
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
              @if(count($similar_projects)>0)
              
              <h5>پروژه های مشابه</h5>
              <div class="projects-carousel-2 carousel owl-carousel carousel-arrows" data-slide="2" data-slide-md="2"
                data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="30" data-loop="true"
                data-speed="800">
                @foreach ($similar_projects as $project)
                <div class="project-item">
                  <div class="project__img">
                    <img src="{{$project->img}}" alt="project img">
                  </div><!-- /.project-img -->
                  <div class="project__content">
                  <h4 class = "project__title"> <a href="/project/{{$project->id}}"> {{$project->title}} </a> </h4>
                    <div class = "project__cat">
                      @foreach ($categories as $category)
                          @if($category->id == $project->cat_id)
                            <a href="/projects/cat/{{$project->id}}"> {{$category->name}} </a>
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