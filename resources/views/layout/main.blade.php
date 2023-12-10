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

    {{-- header start  --}}
    <div class="container-fluid">
        <div class="row px-3">
            <div class="col-7 d-flex align-items-center justify-content-start">
                <a href="{{ route('yha#home') }}" class="d-flex align-items-center">
                    <img src="{{ asset('image/logo/logo.png') }}" alt="YHA Logo" width="150">
                    YHA - Computer Training Center
                </a>
            </div>
            <div class="col-5 d-flex align-items-center justify-content-evenly">
                <a class="text-decoration-none" href="{{ route('yha#home') }}" class="active">Home</a>
                <a class="text-decoration-none" href="{{ route('yha#course') }}">Courses</a>
                <a class="text-decoration-none" href="{{ route('yha#project') }}">Projects</a>
                <a class="text-decoration-none" href="{{ route('yha#photogallery') }}">Photo-Gallery</a>
                <a class="text-decoration-none" href="{{ route('yha#event') }}">Events</a>
                <a class="text-decoration-none" href="{{ route('yha#login') }}">Login</a>
                <a class="text-decoration-none" href="{{ route('yha#signup') }}">SignUp</a>
                    
            </div>
        </div>
    </div> 
    {{-- header end  --}}


    {{-- content section start  --}}
    
    <!-- nav section --> 
    <section class="nav"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-10 col-sm-10 col-10">
                    <div class="img">
                        <img src="img/logo01.png" alt="">
                    </div>
                    <h4>YHA <br> Computer Training Center</h4>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-2 col-sm-2 col-2">
                    <a id="disp" href="#" class="active">Home</a>
                    <a class="disp" href="courses.php" id="courses">Courses</a>
                    <a id="disp" href="stu_projects.php">Projects</a>
                    <a id="disp" href="photo.php">Photo-Gallery</a>
                    <a id="disp" href="event.php">Events</a>
                    <a id="disp" href="#">
                        <div class="login">
                            <a class="disp" href="login1.php"><i class="fa-solid fa-user"></i></a>
                            <!-- <span>Login <span style="color: orangered;">/</span> Signup</span> -->
                        </div>
                    </a>

                  
                </div>
            </div>
        </div>
        
    
    </section>

    
    

   
    
    <section id="home">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <?php
            $con = mysqli_connect("localhost:3306", "root", "", "yhafrontend") or die("error connection");
            $sql = "SELECT * FROM main_slider";
            $res = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($res)){
          ?>
          <div class="carousel-item active">
            <img src="img/<?php echo $row['slider_img1']?>" class="d-block w-100" alt="...">
          </div>
          <?php } ?>
          
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

    <section id="about">
      
      <div class="container">
        <h3 class="text-white" style="font-variant: small-caps; font-size: 25px; letter-spacing: 1px;"> Build Your Future With <br> TECHNOLOGY</h3>
        <div class="row">
        <?php
                $con = mysqli_connect("localhost:3306","root","","yhafrontend") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM about";
                $contact = $con->query($sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?> 
          <div id="ab_left" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
            <img class="ab_img1 hidden1" src="img/<?php echo $row['ab_photo1'] ?>">
            <img class="ab_img2 hidden2" src="img/<?php echo $row['ab_photo2'] ?>">
            <img class="ab_img3 hidden3" src="img/<?php echo $row['ab_photo3'] ?>">
          </div>
          <div id="ab_right" class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="ab_text">
              <h2>About Us</h2>
              <p class="section"> <?php echo $row['about'] ?>  </p>
              <?php } ?>
              <button id="btn1"><a href="">View More</a></button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="stu_number">
      <div class="container">
        <h5 class="hidden">Lorem ipsum dolor, sit amet consectetur adipisicing.</h5>
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 justify-content-end">
            <div class="card hidden1">
              <span>YHA</span>
              <h3 id="number" data-goal="20">0</h3>
              <p>courses</p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 justify-content-center">
            <div class="card hidden2">
              <span>YHA</span>
              <h3 id="number" data-goal="100">0</h3>
              <p>Students</p>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 justify-content-start">
            <div class="card hidden3">
              <span>YHA</span>
              <h3 id="number" data-goal="50">0</h3>
              <p>Batches</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section id="stu_project">
      <div class="container">
        <div class="heading">
          <h2>Students Projects</h2>
          <p>We held project presentations end of the Batches to make sure that our students receive knowledge and truly understand the fields they are taking</p>
        </div>
        <div class="row">
        
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
            <img class="hidden1" src="img/" alt="">
            <div class="text">
            
              <span></span>
              <p></p>
            
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="text">
              <span></span>
              <p></p>
              
            </div>
            <img class="hidden3" src="img/" alt="">
            
          </div>
         
          
          
        </div>
      </div>
    </section>

    <section id="slider">
      <div class="container">
        
      </div>
    </section>

    <section id="teacher">
      <div class="container">
        <div class="header">
          <h2 style="text-align: center;">Teacher section</h2>
        </div>
        <div class="row">
        <?php
                $con = mysqli_connect("localhost:3306","root","","yhafrontend") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM teacher";
                $contact = $con->query($sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="cards hidden1">
              <div class="img">
                <img src="img/<?php echo $row['teacher_photo'] ?>" alt="">
              </div>

              <div class="text">
                  <h4 style="text-align: center;"><?php echo $row['teacher_name'] ?></h4>
                  <span> Age: <span style="color: #ff6f00"> <?php echo $row['teacher_age'] ?> </span> </span>
                  <span>Position: <span style="color: #ff6f00"> <?php echo $row['teacher_position'] ?> </span> </span>
              </div>
            </div>
          </div>
          <?php } ?>
           
        </div>
        <div class="footer">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, cumque expedita? Fugiat perferendis dolore ipsa omnis, magni harum libero fugit ex aperiam, ut vitae.</p>
          <!-- <button id="btn1"><a href="#">About our teachers</a></button> -->
        </div>
      </div>
    </section>

    <section id="contact">  
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 left">
            <!-- <div id="map"></div> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d238.68470692968666!2d96.12988827305935!3d16.828572950010972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1689075973621!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 right">
            <div class="text">

            <?php
                $con = mysqli_connect("localhost:3306","root","","yhafrontend") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM contact";
                $contact = $con->query($sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?>

            <h2>Address And Location</h2>
            <div class="address">
              <p>Address - <?php echo $row['address'] ?></p>
            </div>
            <p><?php echo $row['time'] ?></p> 
            <?php } ?>
          </div>
        </div>
        </div>
    </section>
    {{-- content section end  --}}

    @yield('footer')

</body>

{{-- bootstrap js  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>