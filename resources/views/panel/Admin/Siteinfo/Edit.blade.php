@extends('layouts.panel')

@section('panel-content')
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                تنظیمات وبسایت
              </button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <form action="/admin/settings" method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleFormControlTextarea1">نام سایت</label>
              <input type="text" class="form-control" value="{{$info->name}}" name="name" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">ایمیل</label>
              <input type="email" class="form-control" value="{{$info->mail}}" name="mail" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">آدرس</label>
              <input type="text" class="form-control" value="{{$info->address}}" name="address" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">شماره تماس</label>
              <input type="text" class="form-control" value="{{$info->phone}}" name="phone" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">زمان کاری</label>
              <input type="text" class="form-control" value="{{$info->time_to_work}}" name="time_to_work" required>
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">instagram</div>
                </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" value="{{$info->instagram}}" name="instagram" required>
              </div>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">facebook</div>
                </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" value="{{$info->facebook}}" name="facebook" required>
              </div>
              
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">twitter</div>
                </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" value="{{$info->twitter}}" name="twitter" required>
              </div>
              <div class="input-group">
                <span class="input-group-btn">
                  <a id="lfm2" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                    <i class="fa fa-picture-o"></i> انتخاب تصویر لوگو
                  </a>
                </span>
              <input id="thumbnail" class="form-control" type="text" name="logo_nav" value="{{$info->logo_nav}}" required>
              </div>
              <script>
                {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
              </script>
              <script>
                $('#lfm2').filemanager('image');
              </script>
              <br>
              <div class="input-group">
                <span class="input-group-btn">
                  <a id="lfm1" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                    <i class="fa fa-picture-o"></i> انتخاب تصویر فوتر
                  </a>
                </span>
              <input id="thumbnail" class="form-control" type="text" name="logo_footer" value="{{$info->logo_footer}}" required>
              </div>
              <script>
                {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
              </script>
              <script>
                $('#lfm1').filemanager('image');
              </script> 
              <br>
              <button type="submit" class="btn btn-primary">ویرایش</button>
                </form>  
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                صفحه درباره ما
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <form action="/admin/settings" method="POST">
                @csrf
              <div class="form-group">
                <label for="exampleFormControlTextarea1">متن صفحه درباره ما</label>
              <textarea class="form-control text-right" id="editor" name="aboutus_content" rows="3" required>{{$info->aboutus_content}}</textarea>
              </div>
              <script>
                var options = {
                  filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                  filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                  filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                  filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                };
              </script>
              <script>
                CKEDITOR.replace('editor', options);
                </script>
                <button type="submit" class="btn btn-primary">ویرایش</button>
              </form>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                اسلایدر های صفحه اصلی
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              <form action="/admin/settings" method="POST">
                @csrf
              @foreach ($sliders as $slider)
                  @if($slider->type == '1')
                    @if($slider->id == '1')
                      <div class="text-center">
                        <h5>اسلایدر اول</h5>
                      </div>
                      <hr>
                    @endif
                  <div class="row">
                    <div class="input-group">
                      <span class="input-group-btn">
                      <a id="lfmm{{$slider->id}}" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                          <i class="fa fa-picture-o"></i> اسلاید{{$slider->id}}
                        </a>
                      </span>
                    <input id="thumbnail" class="form-control" type="text" name="filepath{{$slider->id}}" value="{{$slider->img}}" required>
                    </div>
                    <div class="col-md-6">
                      <label >دکمه سفید</label>
                      <input type="text" class="form-control" value="{{$slider->btn_white}}" name="btn_white{{$slider->id}}">
                    </div>
                    <div class="col-md-6">
                    <label >لینک دکمه سفید</label>
                    <input type="text" class="form-control" value="{{$slider->btn_white_link}}" name="btn_white_link{{$slider->id}}">
                    </div>
                    <div class="col-md-6">
                      <label >دکمه نارنجی</label> 
                    <input type="text" class="form-control" value="{{$slider->btn_orange}}" name="btn_orange{{$slider->id}}">
                    </div>
                    <div class="col-md-6">
                      <label >لینک دکمه نارنجی</label>
                      <input type="text" class="form-control" value="{{$slider->btn_orange_link}}" name="btn_orange_link{{$slider->id}}">
                    </div>
                    <br>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label >متن وسط</label>
                    <input type="text" class="form-control" value="{{$slider->title}}" name="title{{$slider->id}}">
                    </div>
                    <div class="col">
                      
                    <label >متن پایین</label>
                      <input type="text" class="form-control" value="{{$slider->desc}}" name="desc{{$slider->id}}">
                    </div>
                    <div class="col">
                      <label >متن بالا</label>
                      <input type="text" class="form-control" value="{{$slider->subtitle}}" name="subtitle{{$slider->id}}">
                    </div>
                  </div>
                  <br>
                  <script>
                    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
                  </script>
                  <script>
                    $('#lfmm{{$slider->id}}').filemanager('image');
                  </script>
                  @else
                  @if($slider->id == '4')
                      <div class="text-center">
                        <h5>اسلایدر دوم</h5>
                      </div>
                      <hr>
                    @endif
                  <div class="input-group">
                    <span class="input-group-btn">
                    <a id="lfmm{{$slider->id}}" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
                        <i class="fa fa-picture-o"></i> اسلایدر{{$slider->id}}
                      </a>
                    </span>
                  <input id="thumbnail" class="form-control" type="text" name="filepath{{$slider->id}}" value="{{$slider->img}}" required>
                  </div>
                  <div class="row">
                    <div class="col">
                      <label >متن وسط</label>
                    <input type="text" class="form-control" value="{{$slider->title}}" name="title{{$slider->id}}">
                    </div>
                    <div class="col">
                      
                    <label >متن پایین</label>
                      <input type="text" class="form-control" value="{{$slider->desc}}" name="desc{{$slider->id}}">
                    </div>
                  </div>
                  <br>
                  <script>
                    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
                  </script>
                  <script>
                    $('#lfmm{{$slider->id}}').filemanager('image');
                  </script>
                  @endif
                  <hr>
              @endforeach
              <button type="submit" class="btn btn-primary">ویرایش</button>
              </form>
            </div>
          </div>
        </div>
      </div>

@endsection
