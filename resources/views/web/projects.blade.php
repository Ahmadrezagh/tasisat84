@extends('layouts.web')
@section('title')
پروژه ها
@endsection
@section('projects')
active
@endsection
@section('content')
   <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title page-title-layout4 bg-overlay bg-parallax text-center">
        <div class="bg-img"><img src="assets/images/page-titles/9.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
              <h1 class="pagetitle__heading">پروژه های انجام شده</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="/">خانه</a></li>
                  <li class="breadcrumb-item active" aria-current="page">پروژه ها</li>
                </ol>
              </nav>
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
  
      <!-- =========================== 
        projects Grid 
      ============================= -->
      <section id="projectsGrid" class="projects projects-grid">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <ul class="projects-filter justify-content-center">
                <li><a class="filter active" href="#" data-filter="all">همه</a></li>
                @foreach ($categories as $category)
                    <li><a class="filter" href="#" data-filter=".{{$category->id}}">{{$category->name}}</a></li>
                @endforeach
                {{-- <li><a class="filter" href="#" data-filter=".filter-energy">انرژی</a></li>
                <li><a class="filter" href="#" data-filter=".filter-construction">ساخت و ساز</a></li>
                <li><a class="filter" href="#" data-filter=".filter-oil">نفت و گاز</a></li>
                <li><a class="filter" href="#" data-filter=".filter-chemicals">مواد شیمیایی</a></li>
                <li><a class="filter" href="#" data-filter=".filter-engineering">مهندسی</a></li> --}}
              </ul><!-- /.projects-filter  -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
          <div id="filtered-items-wrap" class="row">
            @foreach ($projects as $project)
                <!-- project item #1 -->
            <div class="col-sm-6 col-md-6 col-lg-4 mix {{$project->cat_id}}">
                <div class="project-item">
                  <div class="project__img">
                    <img src="{{$project->img}}" alt="project img">
                  </div><!-- /.project-img -->
                  <div class="project__content">
                  <h4 class="project__title"><a href="/project/{{$project->id}}">{{$project->title}}</a></h4>
                    <div class="project__cat">
                        @foreach ($categories as $category)
                            @if($category->id == $project->cat_id)
                                <a href="/projects/{{$category->id}}">{{$category->name}}</a>
                            @endif
                        @endforeach
                    </div><!-- /.project-cat -->
                    <p class="project__desc">{{$project->desc}}</p>
                    <a href="/project/{{$project->id}}" class="btn btn__secondary btn__link">
                      <span>ادامه مطلب</span><i class="icon-arrow-right2"></i>
                    </a>
                  </div><!-- /.project-content -->
                </div><!-- /.project-item -->
              </div><!-- /.col-lg-4 -->
            @endforeach
            
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <a class="btn btn__primary btn__hover3 mt-20 loadMoreProjects" href="#">بیشتر</a>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.projects Grid -->
  
@endsection