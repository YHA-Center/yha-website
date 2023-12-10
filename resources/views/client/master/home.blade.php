@extends('layout.main')


@section('content')

    <h2>This is home page</h2>

    <section id="about">
      
        <div class="container">
          <h3 class="text-primary" style="font-variant: small-caps; font-size: 25px; letter-spacing: 1px;"> Build Your Future With <br> TECHNOLOGY</h3>
          <div class="row">
            <div id="" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <img class="" src="{{ asset('image/pic/photo6.jpg') }}" width="200">
              <img class="" src="{{ asset('image/pic/photo4.jpg') }}" width="200">
              <img class="" src="{{ asset('image/pic/20.jpg') }}" width="200">
            </div>
            <div id="ab_right" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <div class="ab_text">
                <h2>About Us</h2>
                <p class="section"> 
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, ea.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, perspiciatis sapiente. 
                    Quam nisi veritatis laborum dolor velit reiciendis blanditiis doloribus!
                </p>
                <button id="btn1"><a href="">View More</a></button>
              </div>
            </div>
          </div>
        </div>
      </section>
    
@endsection