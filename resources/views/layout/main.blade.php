<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YHA</title>
    <link rel="icon" href="{{ asset('image/logo/logo.png') }}">
    {{-- css  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- fontawesome cdn js  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- home style css  --}}
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

</head> 
<body>



    {{-- header section start  --}}

    <section class="nav"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-10 col-sm-10 col-10">
                    <div class="img">
                        <img src="{{ asset('image/pic/logo01.png') }}" alt="">
                    </div>
                    <h4>YHA <br> Computer Training Center</h4>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-2 col-sm-2 col-2">
                    <a id="disp" href="{{ route('yha#home') }}" class="active">Home</a>
                    <a class="disp" href="{{ route('yha#course') }}" id="courses">Courses</a>
                    <a id="disp" href="{{ route('yha#project') }}">Projects</a>
                    <a id="disp" href="{{ route('yha#photogallery') }}">Photo-Gallery</a>
                    <a id="disp" href="{{ route('yha#event') }}">Events</a>
                    <a id="disp" href="{{ route('yha#login') }}">
                        <div class="login">
                            <a class="disp" href="login1.php"><i class="fa-solid fa-user"></i></a>
                            <!-- <span>Login <span style="color: orangered;">/</span> Signup</span> -->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- header section end  --}}
    

    @yield('content')
    

   
    
    

    @yield('footer')

</body>

{{-- bootstrap js  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>