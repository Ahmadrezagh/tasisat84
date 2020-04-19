@extends('layouts.web')
@section('title')
درباره ما
@endsection
@section('aboutus')
active
@endsection
@section('content')
    <!-- ========================
       page title 
    =========================== -->
    <section id="pageTitle" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="assets/images/page-titles/1.jpg" alt="background"></div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
              <h1 class="pagetitle__heading">درباره ما بیشتر بدانید...</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">خانه</a></li>
                  <li class="breadcrumb-item active" aria-current="page">درباره ما</li>
                </ol>
              </nav>
            </div><!-- /.col-xl-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.page-title -->
  
      <!-- ========================
        About 
      =========================== -->
      {!! $website_info[0]->aboutus_content !!}
  
@endsection