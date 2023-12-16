@extends('template.frontend')

@section('content')
    <section class="home p-2 p-md-5">
        <div class="bg-text">
            <h2>Event Heading</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ipsa, cupiditate minima esse facilis quo
                ut maiores saepe commodi rem unde quod libero tenetur laudantium deleniti modi sit a! Culpa.</p>
        </div>
    </section>

    <section class="main">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 left">
                    <div class="heading">
                        <h5>Lorem, ipsum.</h5>
                        <p>Lorem, ipsum dolor.</p>
                    </div>
                    <div class="img img1">
                        <img src="{{ asset('image/pic/02.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 right">
                    <div class="content-container">
                        <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, facilis!</p>
                        <button id="btn" class="read-more-btn">Read More...</button>
                        <!-- <button id="btn2" style="display: none;">Read Less...</button> -->
                    </div>
                </div>



                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 left">
                    <div class="content-container">
                        <p class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem, dolor.</p>
                        <button id="btn" class="read-more-btn">Read More...</button>
                        <!-- <button id="btn2" style="display: none;">Read Less...</button> -->
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 right">
                    <div class="heading">
                        <h5>Lorem, ipsum dolor.</h5>
                        <p>Lorem. lorem</p>
                    </div>
                    <div class="img img2">
                        <img src="{{ asset('image/pic/01.jpg') }}" alt="">
                    </div>
                </div>

            </div>

        </div>

    </section>
@endsection
