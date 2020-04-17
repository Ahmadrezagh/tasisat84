@extends('layouts.web')
@section('title')
تماس با ما
@endsection
@section('contact')
active
@endsection
@section('content')

    <!-- ========================= 
            Google Map
    =========================  -->
    <section id="googleMap" class="google-map p-0">
        <div id="map"></div>
        <script src="assets/js/google-map.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&amp;callback=initMap" async defer></script>
        <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
      </section><!-- /.GoogleMap -->
  
      <!-- ==========================
          contact 1
      =========================== -->
      <section id="contact1" class="contact pt-120 pb-110">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-md-6 col-lg-4">
              <div class="contact-panel mb-40">
                <h6 class="contact__panel-title">اطلاعات تماس</h6>
                <ul class="contact__panel-list list-unstyled">
                <li><i class="fa fa-map-marker"></i><span>{{$website_info[0]->address}}</span></li>
                  <li><i class="fa fa-envelope"></i><span>ایمیل: {{$website_info[0]->mail}}</span></li>
                  <li><i class="fa fa-phone" ></i><span dir="ltr">{{$website_info[0]->phone}}</span></li>
                </ul>
              </div>
              <div class="contact-panel mb-40">
                <h6 class="contact__panel-title">ساعات کاری</h6>
                <ul class="contact__panel-list contact__panel-list-2 list-unstyled">
                  <li><span>{{$website_info[0]->time_to_work}}</span></li>
                </ul>
              </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-sm-12 col-md-12 col-lg-8">
              <form action="/contact-us" method="POST">
                 @csrf 
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group"><input name="name" type="text" class="form-control" placeholder="نام" required></div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group"><input name="mail" type="email" class="form-control" placeholder="ایمیل" required></div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group"><input name="website" type="text" class="form-control" placeholder="وبسایت"></div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" name="msg" placeholder="پیام شما..." required></textarea>
                    </div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__secondary btn__hover3 btn__block">ارسال</button>
                  </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
              </form>
            </div><!-- /.col-lg-8 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact 1 -->
  
@endsection