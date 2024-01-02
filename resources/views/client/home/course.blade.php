@extends('template.frontend')

@section('content')
 
<div class="main w-100">
    <div class="container">
        <h5 style="margin-bottom: 10px;">Courses Section</h5>
        <div class="row w-100">
        
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="img">
                        <img src="{{ asset('image/pic/03.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h5> 4567890-ert </h5>
                        <span>dfghhtredfvc </span>
                    </div>
                    <div class="btns" style="margin-top: 5px;">
                        <span> <span style="color: orangered;">Ks /-</span> 300$ </span>
                        <button id="btn1"><a href="{{route('frontend.course_detail')}}">View More</a></button>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="img">
                        <img src="{{ asset('image/pic/js.png') }}" alt="">
                    </div>
                    <div class="text">
                        <h5> 4567890-ert </h5>
                        <span>dfghhtredfvc </span>
                    </div>
                    <div class="btns" style="margin-top: 5px;">
                        <span> <span style="color: orangered;">Ks /-</span> 1000$ </span>
                        <button id="btn1"><a href="{{route('frontend.course_detail')}}">View More</a></button>
                    </div>
                </div>
            </div>

         </div>
      </div>
</div>

@endsection