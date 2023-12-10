<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YHA - Computer Training Center</title>
    <link rel="icon" href="{{ asset('image/logo/logo.png') }}">
    {{-- css  --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- header style css  --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- fontawesome cdn js  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    {{-- header start  --}}
    <div class="container-fluid">
        <div class="row px-3">
            <div class="col-5">
                <a href="" class="d-flex align-items-center">
                    <img src="{{ asset('image/logo/logo.png') }}" alt="YHA Logo" width="100">
                    YHA - Computer Training Center
                </a>
            </div>
            <div class="col-7 d-flex align-items-center justify-content-end">
                <a id="" href="{{  }}" class="active">Home</a>
                    <a class="" href="{{  }}" id="courses">Courses</a>
                    <a id="" href="{{  }}">Projects</a>
                    <a id="" href="{{  }}">Photo-Gallery</a>
                    <a id="" href="{{  }}">Events</a>
                    <a id="" href="{{  }}">
                        <div class="login">
                            <a class="" href="{{  }}"><i class="fa-solid fa-user"></i></a>
                            <!-- <span>Login <span style="color: orangered;">/</span> Signup</span> -->
                        </div>
                    </a>
            </div>
        </div>
    </div>
    {{-- header end  --}}


    {{-- content section start  --}}
    @yield('content')
    {{-- content section end  --}}

    @yield('footer')

</body>

{{-- bootstrap js  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>