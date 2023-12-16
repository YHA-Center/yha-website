{{-- header section start  --}}

<section class="top">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-evenly align-items-center">
                <span><i style="color: orangered; margin-right: 5px;" class="fa-solid fa-phone"></i>Ph -
                    0000089345768</span>
                <span><i style="color: orangered; margin-right: 5px;" class="fa-solid fa-envelope"></i>Email -
                    98765456789</span>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-end align-items-center">
                <!-- <div class="search">
                      <input type="search" id="searchInput" class="search-input" placeholder="Search">
                      <button><i style="color: orangered; margin-right: 5px;" class="fa-solid fa-magnifying-glass"></i></button>
                    </div> -->
            </div>
        </div>
    </div>
</section>

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
                <a id="disp" href="{{ route('YhaHome') }}" class="active">Home</a>
                <a class="disp" href="{{ route('YhaCourse') }}" id="courses">Courses</a>
                <a id="disp" href="{{ route('YhaProject') }}">Projects</a>
                <a id="disp" href="{{ route('YhaPhotoGallery') }}">Photo-Gallery</a>
                <a id="disp" href="{{ route('YhaEvent') }}">Events</a>
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <div class="d-flex">
                            <h3>{{ Auth::user()->name }}</h3>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <div class="rightmenu">
                    <button class="btn" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <div class="offcanvas-header">
                            <img src="img/logo01.png" width="20%" alt="">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="home_menu1 items">
                                <i class="fa-solid fa-house"></i>
                                <a href="{{ route('YhaHome') }}">Home</a>
                            </div>
                            <div class="courses_menu items">
                                <i class="fas fa-book"></i>
                                <button id="dropbtn">Courses</button>
                                <div class="dropdown-content">
                                    <div class="listes d-flex flex-column">
                                        <a href="{{ route('YhaCourse') }}" style="color: orangered;">View All Courses</a>
                                        <a href="{{ route('YhaCourse') }}">34356</a>
                                        <a href="{{ route('YhaCourse') }}">34356</a>
                                        <a href="{{ route('YhaCourse') }}">34356</a>
                                        <a href="{{ route('YhaCourse') }}">34356</a>

                                    </div>
                                </div>
                            </div>
                            <div class="project_menu items">
                                <i class="fa-solid fa-folder"></i>
                                <a href="{{ route('YhaProject') }}">Projects</a>
                            </div>
                            <div class="photo_gallery_menu items">
                                <i class="fa-solid fa-image"></i>
                                <a href="{{ route('YhaPhotoGallery') }}">Photo-Gallery</a>
                            </div>
                            <div class="Events_menu items">
                                <i class="fa-solid fa-calendar"></i>
                                <a href="{{ route('YhaEvent') }}">Events</a>
                            </div>
                            <div class="login_menu items">
                                <i class="fa-solid fa-user"></i>
                                <a href="../login1.php">
                                    <span>Login <span style="color: orangered;">/</span> Signup</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- header section end  --}}
