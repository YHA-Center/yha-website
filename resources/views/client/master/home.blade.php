@extends('layout.main')


@section('content')
    {{-- home section  --}}
    <section id="home">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="{{ asset('image/pic/slider/slider1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/pic/slider/slider2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('image/pic/slider/slider3.jpg') }}" class="d-block w-100" alt="...">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    {{-- end of home section  --}}


    {{-- about section  --}}
    <section id="about">

        <div class="container">
            <h3 class="text-white" style="font-variant: small-caps; font-size: 25px; letter-spacing: 1px;"> Build Your
                Future With <br> TECHNOLOGY</h3>
            <div class="row">
                <div id="ab_left" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                    <img class="ab_img1" src="{{ asset('image/pic/about/photo12.jpg') }}">
                    <img class="ab_img2" src="{{ asset('image/pic/about/photo4.jpg') }}">
                    <img class="ab_img3" src="{{ asset('image/pic/about/20.jpg') }}">
                </div>
                <div id="ab_right" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="ab_text">
                        <h2>About Us</h2>
                        <p class="section"> 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, animi modi? Autem ex vero facere quae,
                            accusamus cupiditate nihil laudantium? Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, molestiae.
                        </p>
                        <button id="btn1"><a href="">View More</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- about section end  --}}

    {{-- student number  --}}
    <section id="stu_number">
        <div class="container">
            <h5 class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing.</h5>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 justify-content-end">
                    <div class="card">
                        <span>YHA</span>
                        <h3 id="number" data-goal="20">20</h3>
                        <p>courses</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 justify-content-center">
                    <div class="card">
                        <span>YHA</span>
                        <h3 id="number" data-goal="100">100</h3>
                        <p>Students</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 justify-content-start">
                    <div class="card">
                        <span>YHA</span>
                        <h3 id="number" data-goal="50">50</h3>
                        <p>Batches</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- end of student number section  --}}


    {{-- project section start  --}}
    <section id="stu_project">
        <div class="container">
            <div class="heading">
                <h2>Students Projects</h2>
                <p>We held project presentations end of the Batches to make sure that our students receive knowledge and
                    truly understand the fields they are taking</p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <img class="" src="{{ asset('image/pic/project/photo17.jpg') }}" alt="">
                    <div class="text">
                        <span>Photoshop Beginner Project</span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, nihil.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="text">
                        <span>Ai Advanced Class</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam distinctio eveniet praesentium magni?</p>
                    </div>
                    <img class="" src="{{ asset('image/pic/project/photo16.jpg') }}" alt="">
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <img class="" src="{{ asset('image/pic/project/photo17.jpg') }}" alt="">
                    <div class="text">
                        <span>Photoshop Beginner Project</span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum, nihil.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="text">
                        <span>Ai Advanced Class</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam distinctio eveniet praesentium magni?</p>
                    </div>
                    <img class="" src="{{ asset('image/pic/project/photo16.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- end of project section  --}}

    <section id="slider">
        <div class="container">

        </div>
    </section>

    {{-- teacher section start --}}
    <section id="teacher">
        <div class="container">
            <div class="header">
                <h2 style="text-align: center;">Teacher section</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="cards">
                        <div class="img">
                            <img src="{{ asset('image/pic/teacher/photo14.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h4 style="text-align: center;"></h4>
                            <span> Age: <span style="color: #ff6f00">//</span> </span>
                            <span>Position: <span style="color: #ff6f00"> // </span> </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="cards">
                        <div class="img">
                            <img src="{{ asset('image/pic/teacher/photo14.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h4 style="text-align: center;"></h4>
                            <span> Age: <span style="color: #ff6f00">//</span> </span>
                            <span>Position: <span style="color: #ff6f00"> // </span> </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="cards">
                        <div class="img">
                            <img src="{{ asset('image/pic/teacher/photo14.png') }}" alt="">
                        </div>
                        <div class="text">
                            <h4 style="text-align: center;"></h4>
                            <span> Age: <span style="color: #ff6f00">//</span> </span>
                            <span>Position: <span style="color: #ff6f00"> // </span> </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, cumque expedita? Fugiat perferendis
                    dolore ipsa omnis, magni harum libero fugit ex aperiam, ut vitae.</p>
                <!-- <button id="btn1"><a href="#">About our teachers</a></button> -->
            </div>
        </div>
    </section>
    {{-- teacher section end  --}}


    {{-- contact section start  --}}
    <section id="contact">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 left">
                <!-- <div id="map"></div> -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d238.68470692968666!2d96.12988827305935!3d16.828572950010972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1689075973621!5m2!1sen!2smm"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 right">
                <div class="text">
                    <h2>Address And Location</h2>
                    <div class="address">
                        <p>Address - </p>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    {{-- content section end  --}}
@endsection
