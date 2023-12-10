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

<!-- top section start -->
    <section class="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-evenly align-items-center">
                    <span><i style="color: orangered; margin-right: 5px;" class="fa-solid fa-phone"></i>Ph - 0956789876</span>
                    <span><i style="color: orangered; margin-right: 5px;" class="fa-solid fa-envelope"></i>Email - yhacomputer@gamil.com</span>
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
<!-- top section end -->

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

                    
<style>
    .dropdown-content{
        box-shadow: 1px 1px 10px 1px #bababa;
    }
</style>

<div class="rightmenu">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
        <i class="fa-solid fa-bars"></i>
    </button>
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <img src="img/logo01.png" width="20%" alt="">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body"> 
            <div class="home_menu1 items">
                <i class="fa-solid fa-house"></i> 
                <a href="index.php">Home</a>
            </div>
            <div class="courses_menu items">
            <i class="fas fa-book"></i>
            <button id="dropbtn">Courses</button>
            <div class="dropdown-content">
                <div class="listes d-flex flex-column">
                    <a href="courses.php" style="color: orangered;">View All Courses</a>

                    <?php
                        $con = mysqli_connect("localhost:3306","root","","yhafrontend") or die ("Error connection"); //step 1 database connection
                        $sql = "SELECT * FROM course_detail";
                        $contact = $con->query($sql);
                        while($row = mysqli_fetch_assoc($contact)){
                    ?> 
                    
                    <a href="course.php?id=<?php echo $row['course_id'];?>"><?php echo $row['course_title'] ?></a>
                    
                    <?php } ?>
                
                </div>
            </div>
            </div>
            <div class="project_menu items">
                <i class="fa-solid fa-folder"></i>
                <a href="stu_projects.php">Projects</a>
                </div>
                <div class="photo_gallery_menu items">
                <i class="fa-solid fa-image"></i>
                <a href="photo.php">Photo-Gallery</a>
                </div>
                <div class="Events_menu items">
                <i class="fa-solid fa-calendar"></i>
                <a href="event.php">Events</a>
                </div>
                <div class="login_menu items">
                <i class="fa-solid fa-user"></i>
                <a href="login1.php">
                <span>Login <span style="color: orangered;">/</span> Signup</span></a>
        </div>
        </div>
    </div>
</div> 
                </div>
            </div>
        </div>
    </section>

    {{-- header section end  --}}
    
    <section id="courses_menu">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
          <div class="courses programming w-100 h-50">
              <h6>Programming Classes</h6>
              <?php
                $con = mysqli_connect("localhost:3306","root","","yhafrontend") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM course_detail where couh_id = 1";
                $contact = mysqli_query($con,$sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?> 
            
              <a href="course.php?id=<?php echo $row['course_id'];?>"> <?php echo $row['course_title'] ?> </a>
              
              <?php } ?>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
            <div class="courses  webd w-100">
            
              <h6>Basic Classes</h6>
              <?php
              $con = mysqli_connect("localhost:3306","root","","yhafrontend") or die ("Error connection"); //step 1 database connection
              $sql = "SELECT * FROM course_detail  where couh_id = 2";
              $contact = $con->query($sql);
              while($row = mysqli_fetch_assoc($contact)){
            ?> 
              <a href="course.php?id=<?php echo $row['course_id'];?>"><?php echo $row['course_title'] ?></a>
              
              <?php } ?>
            </div>
          </div> 
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
            <div class="courses ict w-100 h-50">
              <h6>Graphic design Classes</h6>
              <?php
                $con = mysqli_connect("localhost:3306","root","","yhafrontend") or die ("Error connection"); //step 1 database connection
                $sql = "SELECT * FROM course_detail where couh_id = 3";
                $contact = $con->query($sql);
                while($row = mysqli_fetch_assoc($contact)){
              ?> 
            
              <a href="course.php?id=<?php echo $row['course_id'];?>"><?php echo $row['course_title'] ?></a>
              
              <?php } ?>
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


    @yield('content')
    

   
    
    

    @yield('footer')

</body>

{{-- bootstrap js  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{ asset('js/js.js') }}"></script>
</html>