@extends('layout.frontend')

@section('content')
    <section class="main">
        <div class="container">

            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="text">
                        <h1>Lorem ipsum dolor sit amet.</h1>
                        <span>Lorem ipsum dolor sit amet.</span>
                        <p>Lorem ipsum dolor sit amet.</p>

                        <a href="#">
                            <Button id="btn1">Enroll Now</Button>
                        </a>


                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="img">
                        <img src="{{ asset('image/pic/java.png') }}" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div style="overflow: hidden;">
        <svg preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg"
            style="fill: #eeeeee; width: 176%; height: 162px;">
            <path
                d="M321.39 56.44c58-10.79 114.16-30.13 172-41.86 82.39-16.72 168.19-17.73 250.45-.39C823.78 31 906.67 72 985.66 92.83c70.05 18.48 146.53 26.09 214.34 3V0H0v27.35a600.21 600.21 0 00321.39 29.09z" />
        </svg>
    </div>

    <section id="what">
        <div class="container">
            <div class="row what">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <h3>What is <span> Lorem, ipsum. </span>?</h3>
                    <p>
                        <span>⊳ </span>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. A quasi perferendis odit officiis
                        blanditiis incidunt eum amet, ut in at sed voluptatibus excepturi? Aliquam officiis placeat
                        inventore, fuga consequuntur dignissimos.
                    </p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="img">
                        <img src="img/js_svg.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row why">
                <h3>Why should you learn?</h3>
                <p>
                    <span>⊳ </span>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur praesentium cupiditate debitis
                    corporis officia vitae aut incidunt? Ipsa distinctio, quia veniam labore quibusdam, incidunt eligendi,
                    nesciunt unde aut repellat similique!
                </p>
            </div>
        </div>

    </section>

    <section id="about">
        <div class="container w-100 h-100">
            <div class="row w-100">
                <div class="col-12">
                    <div class="outline w-100">
                        <h3>Course Outline</h3>
                        <div class="uls w-100 h-100 d-flex">
                            <ul>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At saepe laboriosam nisi neque quia quo ipsa distinctio nam nostrum cumque.</li>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At saepe laboriosam nisi neque quia quo ipsa distinctio nam nostrum cumque.</li>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At saepe laboriosam nisi neque quia quo ipsa distinctio nam nostrum cumque.</li>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At saepe laboriosam nisi neque quia quo ipsa distinctio nam nostrum cumque.</li>
                            </ul>
                        </div>

                    </div>

                </div>
                <div class="col-12 content w-100">
                    <h3>Course Content</h3> <br>
                    <span class="text-secondary"> .4 sections .2 projects .total 12 hours (2 Hours a Day) <i
                            class="fa-solid fa-paperclip"></i> Assigiments</span>
                    <ul>
                        <li>Day 1 - JavaScript Introduction</li>
                        <li>Day 2 - Operators</li>
                        <li>Day 3 - Object datatype and Array datatype</li>
                        <li>Day 4 - Statements in JavaScript</li>
                        <li>Day 5 - Document Object Model (DOM)</li>
                        <li>Day 6 - Projects</li>
                    </ul>
                </div>
                <div class="col-12 w-100">
                    <div class="times">
                        <h3><i class="fa-solid fa-calendar-days"></i> TimeTable</h3> <br>
                        <span>Mon to Thu - 12:00 PM to 2:00 PM</span> <br>
                        <span>Sat and Sun - 8:00 AM to 11:00 AM</span>
                        <p class="text-secondary mt-3">On Weekend (Sat and Sun) is 3 Hours
                            a day</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- coures menu section  --}}
    <section id="courses_menu">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="courses programming w-100 h-50">
                        <h6>Programming Classes</h6>

                        <a href="course.php?id="> kdlfja </a>
                        <a href="course.php?id="> kdlfja </a>
                        <a href="course.php?id="> kdlfja </a>
                        <a href="course.php?id="> kdlfja </a>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="courses  webd w-100">

                        <h6>Basic Classes</h6>

                        <a href="course.php?id=">dljfdjfd</a>
                        <a href="course.php?id=">dljfdjfd</a>
                        <a href="course.php?id=">dljfdjfd</a>
                        <a href="course.php?id=">dljfdjfd</a>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="courses ict w-100 h-50">
                        <h6>Graphic design Classes</h6>

                        <a href="course.php?id=">dlfjldjf</a>
                        <a href="course.php?id=">dlfjldjf</a>
                        <a href="course.php?id=">dlfjldjf</a>
                        <a href="course.php?id=">dlfjldjf</a>

                    </div>

                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="courses advanceexcel w-100 h-50">
                        <a href="#">Advance Excel</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
