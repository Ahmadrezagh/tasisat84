@extends('layouts.web')
@section('title')
جستجو
@endsection
@section('content')
<!-- ========================
    page title 
 =========================== -->
 {{-- <section id="page-title" class="page-title page-title-layout4 bg-overlay bg-parallax text-center">
     <div class="bg-img"><img src="assets/images/page-titles/13.jpg" alt="background"></div>
     <div class="container">
       <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
           <h1 class="pagetitle__heading">خدمات ما</h1>
           <nav aria-label="breadcrumb">
             <ol class="breadcrumb justify-content-center">
               <li class="breadcrumb-item"><a href="/">خانه</a></li>
               <li class="breadcrumb-item active" aria-current="page">خدمات</li>
             </ol>
           </nav>
         </div><!-- /.col-lg-8 -->
       </div><!-- /.row -->
     </div><!-- /.container -->
   </section><!-- /.page-title --> --}}


   <!-- =========================== 
     projects Grid 
   ============================= -->
   <section id="projectsGrid" class="projects projects-grid">
     <div class="container">
       <div class="row">
         <div class="col-sm-12 col-md-12 col-lg-12">
           <ul class="projects-filter justify-content-center">
             <li><a class="filter active" href="#" data-filter="all">نتایج جستجو</a></li>
           </ul><!-- /.projects-filter  -->
         </div><!-- /.col-lg-12 -->
       </div><!-- /.row -->
       <div id="filtered-items-wrap" class="row">
        @foreach ($results as $r)
        @php
            $type = $r->type;
        @endphp
         @foreach ($r as $result)
             <!-- result item #1 -->
         <div class="col-sm-6 col-md-6 col-lg-4 mix {{$result->cat_id}}">
             <div class="project-item">
               <div class="project__img">
                 <img src="{{$result->img}}" alt="project img">
               </div><!-- /.project-img -->
               <div class="project__content">
               <h4 class="project__title"><a href="/{{$type}}/{{$result->id}}">{{$result->title}}</a></h4>
                 <div class="project__cat">
                     @foreach ($categories as $category)
                         @if($category->id == $result->cat_id)
                             <a href="/search?search={{$category->name}}">{{$category->name}}</a>
                         @endif
                     @endforeach
                 </div><!-- /.project-cat -->
                 <p class="project__desc">{{$result->desc}}</p>
                 <a href="/{{$type}}/{{$result->id}}" class="btn btn__secondary btn__link">
                   <span>ادامه مطلب</span><i class="icon-arrow-right2"></i>
                 </a>
               </div><!-- /.project-content -->
             </div><!-- /.project-item -->
           </div><!-- /.col-lg-4 -->
         @endforeach
         @endforeach
       </div><!-- /.row -->
       @if($count > 6)
       <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <a class="btn btn__primary btn__hover3 mt-20 loadMoreProjects" href="#">بیشتر</a>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
       @endif
     </div><!-- /.container -->
   </section><!-- /.pr
@endsection