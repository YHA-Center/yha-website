@extends('template.frontend')

@section('content')

<div class="main w-100">
    <div class="container">
        <h5 style="margin-bottom: 10px;">Courses Section</h5>
        <div class="row w-100">
        
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="img">
                        <img src="{{ as }}" alt="">
                    </div>
                    <div class="text">
                        <h5> 4567890-ert </h5>
                        <span>dfghhtredfvc </span>
                    </div>
                    <div class="btns" style="margin-top: 5px;">
                        <span> <span style="color: orangered;">Ks /-</span> <?php echo $row['price'] ?> </span>
                        <button id="btn1"><a href="">View More</a></button>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="img">
                        <img src="img/" alt="">
                    </div>
                    <div class="text">
                        <h5> 4567890-ert </h5>
                        <span>dfghhtredfvc </span>
                    </div>
                    <div class="btns" style="margin-top: 5px;">
                        <span> <span style="color: orangered;">Ks /-</span> <?php echo $row['price'] ?> </span>
                        <button id="btn1"><a href="">View More</a></button>
                    </div>
                </div>
            </div>

         </div>
      </div>
</div>

@endsection