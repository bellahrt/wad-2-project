<?php
ini_set( 'session.cookie_httponly', 1 );
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');

session_start();
$username = $_SESSION["username"];
if (!isset ($_SESSION["username"])){
  header("Location: login/loginpage.php");
  return;
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HealthYou</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- <link href="c.css" rel="stylesheet"> -->

  <!-- VueJs -->
  <script src="https://unpkg.com/vue@next"></script>
  <!-- anime script -->
  <script src = 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.2/gsap.min.js'></script>
    <!-- <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/DrawSVGPlugin3.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CustomEase3.min.js'></script> -->
    <script src='https://unpkg.com/gsap@3/dist/MotionPathPlugin.min.js'></script>
    <script src="https://unpkg.com/vue@next"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script> 

  <!-- =======================================================
  * Template Name: Green - v4.6.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

<!----------------------------------------------------Loading PAGE ------------------------------>
<style>
  body{
    background: url(assets/img/wallpaper.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; 
  color: white;
  }
  #services{
  	background: url(assets/img/section.gif)no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; 
  }
  #team{
    background: url(assets/img/team.jpg)no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; 
  }

.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(assets/img/orderloading.gif) center no-repeat #fff;
}
  </style>
<div class="se-pre-con"><div class="loader-wrapper">
  <div class="loader-box">
    <div class="icon">
      <i class="fas fa-utensils"></i>
    </div>
  </div>
</div></div>


<script>
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	}); 
</script>
<!----------------------------------------------------Loading PAGE ------------------------------>

<input type="hidden" id="username" value = "<?=$username?>">
        <script>
            var username = document.getElementById("username").value
            localStorage.setItem("username", username);

        </script>

<script>
 // localStorage.setItem("username", "yk");
  var username = localStorage.getItem("username");
    if (username === null){
      window.location.href = "login/loginpage.php";
    }
   

function logout() {
  localStorage.removeItem('username')  
  
  window.location.href = "login/logout.php";
}
</script>


  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:elmer.yeo.2020@smu.edu.sg">healthyou@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +65 6828 0100
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://twitter.com/sporeMOH?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/sghealthministry" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/moh_singapore/?hl=en" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/ministry-of-health-sg/?originalSubdomain=sg" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">HealthYou</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <!-- <li><a class="nav-link scrollto" href="#services">Calories Tracker</a> -->
          <li class="dropdown"><a class="nav-link scrollto"  href="#services"><span>Calories Tracker</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="foodCalorieTrackerPage.html">Food Calorie Tracker</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="anotherplace.html">Exercise Tracker</a></li>
              </ul>
          </li>
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a> -->
            <!-- <ul>
              <li><a href="#">Drop Down 1</a></li> -->
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <!-- <li><a href="home.html">Food Calorie Tracker</a></li>
              <li><a href="profile.html">Calendar</a></li>
              <li><a href="anotherplace.html">Walking Distance Tracker</a></li>
            </ul> -->
          <!-- </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="scrollto" onclick="logout()" href="login/logout.php">Logout</a></li>
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <section id="hero">
  
    
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <!-- <div id="carousel-inner" role="listbox"> -->
        <div id="mainCarousel" role="listbox">
        

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/bg.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">{{messages[Math.floor(Math.random()*messages.length)]}}</h2>
              <p class="animate__animated animate__fadeInUp">Welcome to HealthYou
                <br>With us, we make your dreams into reality by keeping you in check to strive towards your goals.
              </p>
              
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/bg.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">{{messages[Math.floor(Math.random()*messages.length)]}}</h2>
              <p class="animate__animated animate__fadeInUp"></p>
              <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto">Check Out Our Services</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/bg.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">{{messages[Math.floor(Math.random()*messages.length)]}}</h2>
              <p class="animate__animated animate__fadeInUp"></p>
              <a href="#services" class="btn-get-started animate__animated animate__fadeInUp scrollto">Check Out Our Services</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->












  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <!-- <section id="featured-services" class="featured-services section-bg">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-laptop"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trade stravi</p>
            </div>
          </div>
        </div>

      </div> -->
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
      <section id="about" class="about animate__animated animate__fadeInDown" style="justify-content: center; ">
        <div class="container" >
  



       





          <div class="section-title" >
          <!-- <div class='h-auto d-inline-block' style="z-index: -1; position: absolute; height: 100vh;  width: 300px; margin:auto; opacity:0.8;">

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:serif="http://www.serif.com/" width="100%" height="100%" viewBox="-50 0 600 525" version="1.1" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-miterlimit:10;" opacity=0>

<clipPath id="blob-background">
<path d="M523.09,222.414C526.454,290.653 501.841,410.353 457.124,459.539C412.1,509.061 331.187,516.536 247.974,513.636C203.43,512.083 163.795,507.734 120.455,506.261C20.074,502.848 -40.817,380.328 -33.85,258.681C-21.29,39.385 98.092,2.868 263.066,7.667C394.288,11.484 515.889,76.35 523.09,222.414Z" style="fill:#FFDDD8;fill-rule:nonzero;" />
</clipPath>
<g id="background" clip-path="url(#blob-background)">
<path id="blob" d="M523.09,222.414C526.454,290.653 501.841,410.353 457.124,459.539C412.1,509.061 331.187,516.536 247.974,513.636C203.43,512.083 163.795,507.734 120.455,506.261C20.074,502.848 -40.817,380.328 -33.85,258.681C-21.29,39.385 98.092,2.868 263.066,7.667C394.288,11.484 515.889,76.35 523.09,222.414Z" style="fill:#FFEFEC;fill-rule:nonzero;" />
<g id="pink-background-circle">
  <path xmlns="http://www.w3.org/2000/svg" d="M448.486,232.777C465.578,326.362 393.19,414.415 286.804,429.449C180.418,444.486 80.319,380.809 63.227,287.224C46.136,193.639 118.523,105.586 224.909,90.551C331.295,75.516 431.394,139.192 448.486,232.777" style="fill:#FFDDD8;fill-rule:nonzero;" />
</g>
</g>
<circle id="brain-circle" opacity="0" cx="257" cy="510" r="10" style="fill:rgb(255,137,118)" />
<g id="head" clip-path="url(#blob-background)">
<path id="head-outline" d="M181.48,613.144L192.714,571.514C193.601,557.857 183.25,546.067 169.593,545.18L145.057,543.585C131.092,542.678 120.506,530.621 121.413,516.655L115.442,477.291C115.961,469.301 109.905,462.402 101.914,461.883L89.418,461.071C81.356,460.547 76.601,451.789 80.553,444.743L110.854,390.712C115.195,382.973 117.317,374.211 117.024,365.343C115.933,332.301 125.687,244.541 259.624,241.842C259.624,241.842 402.389,237.412 392.135,393.408C392.135,393.408 393.618,435.143 362.371,463.91C362.371,463.91 325.054,513.173 343.043,586.344L351.458,617.262" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:4px;" />
<g id="brain" opacity= 0>
  <path d="M297.397,399.036C297.397,399.036 310.769,402.214 313.26,392.482" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:2.12px;stroke-linecap:round;" />
  <path d="M295.252,298.041C295.252,298.041 305.343,291.497 310.546,299.248" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:2.12px;stroke-linecap:round;" />
  <path d="M218.747,281.424C218.747,277.043 223.123,273.492 228.521,273.492C241.567,273.492 252.143,282.074 252.143,292.661L252.143,301.255" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M208.158,317.781C208.158,317.781 172.993,308.053 201.642,284.73C206.779,280.547 218.747,281.424 229.336,292.001" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M179.344,331.91C179.344,331.91 164.809,311.583 190.403,305.634" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M209.87,339.099C209.87,339.099 185.759,318.772 175.234,335.876C165.6,351.532 180.872,360.169 180.872,360.169" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M190.958,383.222C190.958,383.222 166.249,372.858 186.37,354.715" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M209.87,371.572C209.87,371.572 180.261,378.265 195.533,399.831C199.267,405.103 212.027,409.746 225.467,401.07" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M217.061,404.895C217.061,404.895 222.718,420.654 237.074,417.183C251.43,413.713 252.143,404.895 252.143,404.895L252.143,390.659" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M293.863,281.424C293.863,277.043 289.487,273.492 284.089,273.492C271.043,273.492 260.467,282.074 260.467,292.661L260.467,301.255" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M304.452,317.781C304.452,317.781 339.617,308.053 310.968,284.73C305.831,280.547 293.863,281.424 283.274,292.001" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M333.266,331.91C333.266,331.91 347.801,311.583 322.207,305.634" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M302.74,339.099C302.74,339.099 326.851,318.772 337.376,335.876C347.01,351.532 331.738,360.169 331.738,360.169" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M321.652,383.222C321.652,383.222 346.36,372.858 326.24,354.715" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M302.74,371.572C302.74,371.572 332.349,378.265 317.077,399.831C313.343,405.103 300.583,409.746 287.143,401.07" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M295.549,404.895C295.549,404.895 289.892,420.654 275.536,417.183C261.18,413.713 260.467,404.895 260.467,404.895L260.467,390.659" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:3px;stroke-linecap:round;" />
  <path d="M200.693,298.51C200.693,298.51 197.242,308.94 210.871,309.97" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:2.12px;stroke-linecap:round;" />
  <path d="M197.982,391.749C197.982,391.749 201.601,406.467 218.05,398.984" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:2.12px;stroke-linecap:round;" />
  <path d="M314.877,347.274C314.877,347.274 304.672,354.645 314.586,364.197" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:2.12px;stroke-linecap:round;" />
  <path d="M198.217,343.458C198.217,343.458 206.386,351.495 200.693,360.997" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:2.12px;stroke-linecap:round;" />
  <path d="M227.11,378.53C227.11,378.53 240.591,378.977 238.872,391.364" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:2.12px;stroke-linecap:round;" />
  <path d="M226.17,326.342C226.17,326.342 238.186,316.914 230.468,305.707" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:2.12px;stroke-linecap:round;" />
  <path d="M285.918,308.064C285.918,308.064 278.021,326.198 292.487,331.099" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:2.12px;stroke-linecap:round;" />
  <path d="M275.113,389.79C275.113,389.79 272.41,373 287.205,373" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:2.12px;stroke-linecap:round;" />
</g>
</g>
<g id="solid-line-accents" opacity=0>
<path d="M113.69,194.653L44.724,194.653" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;" />
<path d="M116.211,194.653L120.277,194.653" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;" />
<path d="M414.563,224.659L459.416,224.659" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;" />
<path d="M412.042,224.659L407.976,224.659" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;" />
<path d="M331.306,98.334L354.947,98.334" style="fill:none;fill-rule:nonzero;stroke:rgb(0,210,223);stroke-width:0.75px;stroke-linecap:round;stroke-linejoin:round;" />
<path d="M329.976,98.334L327.833,98.334" style="fill:none;fill-rule:nonzero;stroke:rgb(0,210,223);stroke-width:0.75px;stroke-linecap:round;stroke-linejoin:round;" />
<path d="M146.037,110.645L169.677,110.645" style="fill:none;fill-rule:nonzero;stroke:rgb(255,197,0);stroke-width:0.75px;stroke-linecap:round;stroke-linejoin:round;" />
<path d="M54.102,271.318L77.743,271.318" style="fill:none;fill-rule:nonzero;stroke:rgb(169,185,0);stroke-width:0.75px;stroke-linecap:round;stroke-linejoin:round;" />
<path d="M52.773,271.318L50.63,271.318" style="fill:none;fill-rule:nonzero;stroke:rgb(169,185,0);stroke-width:0.75px;stroke-linecap:round;stroke-linejoin:round;" />
<path d="M401.957,158.074L425.598,158.074" style="fill:none;fill-rule:nonzero;stroke:rgb(255,54,18);stroke-width:0.75px;stroke-linecap:round;stroke-linejoin:round;" />
<path d="M400.628,158.074L398.485,158.074" style="fill:none;fill-rule:nonzero;stroke:rgb(255,54,18);stroke-width:0.75px;stroke-linecap:round;stroke-linejoin:round;" />
</g>
<g class="plus-sign-accent">
<path d="M168.266,156.696L158.395,156.696" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
<path d="M163.331,161.632L163.331,151.761" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
</g>
<g class="plus-sign-accent">
<path d="M46.99,312.618L37.119,312.618" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
<path d="M42.054,317.554L42.054,307.683" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
</g>
<g class="plus-sign-accent">
<path d="M439.868,284.001L429.997,284.001" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
<path d="M434.932,288.936L434.932,279.065" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
</g>
<g class="plus-sign-accent">
<path d="M428.91,89.329L419.039,89.329" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
<path d="M423.974,94.265L423.974,84.394" style="fill:none;fill-rule:nonzero;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
</g>
<g id="accent-circles" opacity=0>
<path d="M112.993,242.657C112.993,240.489 111.232,238.728 109.064,238.728C106.895,238.728 105.134,240.489 105.134,242.657C105.134,244.826 106.895,246.586 109.064,246.586C111.232,246.586 112.993,244.826 112.993,242.657Z" style="fill:none;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
<path d="M62.99,92.647C62.99,90.478 61.229,88.718 59.06,88.718C56.892,88.718 55.131,90.478 55.131,92.647C55.131,94.815 56.892,96.576 59.06,96.576C61.229,96.576 62.99,94.815 62.99,92.647Z" style="fill:none;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
<path d="M349.597,144.814C349.597,142.645 347.836,140.885 345.668,140.885C343.499,140.885 341.738,142.645 341.738,144.814C341.738,146.982 343.499,148.743 345.668,148.743C347.836,148.743 349.597,146.982 349.597,144.814Z" style="fill:none;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
<path d="M435.647,444.648C435.647,442.479 433.886,440.719 431.717,440.719C429.549,440.719 427.788,442.479 427.788,444.648C427.788,446.816 429.549,448.577 431.717,448.577C433.886,448.577 435.647,446.816 435.647,444.648Z" style="fill:none;stroke:rgb(48,48,48);stroke-width:1.5px;stroke-linecap:round;" />
</g>
<g id="circles">
<path class="color-circle" id="yellow-circle" d="M379.651,203.326C379.651,205.496 377.892,207.255 375.722,207.255C373.552,207.255 371.792,205.496 371.792,203.326C371.792,201.156 373.552,199.397 375.722,199.397C377.892,199.397 379.651,201.156 379.651,203.326" style="fill:rgb(255,197,0);fill-rule:nonzero;" />
<path class="color-circle" id="blue-circle" d="M90.844,139.351C90.844,141.521 89.085,143.28 86.915,143.28C84.745,143.28 82.985,141.521 82.985,139.351C82.985,137.181 84.745,135.422 86.915,135.422C89.085,135.422 90.844,137.181 90.844,139.351" style="fill:rgb(0,210,223);fill-rule:nonzero;" />
<path class="color-circle" id="green-circle" d="M456.778,353.321C456.778,355.491 455.019,357.25 452.849,357.25C450.679,357.25 448.919,355.491 448.919,353.321C448.919,351.151 450.679,349.392 452.849,349.392C455.019,349.392 456.778,351.151 456.778,353.321" style="fill:rgb(169,185,0);fill-rule:nonzero;" />
<path class="color-circle" id="red-circle" d="M80.905,367.936C80.905,373.178 76.656,377.427 71.414,377.427C66.172,377.427 61.922,373.178 61.922,367.936C61.922,362.694 66.172,358.445 71.414,358.445C76.656,358.445 80.905,362.694 80.905,367.936" style="fill:rgb(255,54,18);fill-rule:nonzero;" />
</g>
<g id="dashed-paths" opacity=0>
<path d="M126.268,189.708L81.415,189.708" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
<path d="M381.689,229.605L446.838,229.605" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
<path d="M369.208,203.326C369.208,199.728 372.124,196.812 375.722,196.812" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
<path d="M71.414,381.867C63.72,381.867 57.483,375.63 57.483,367.936" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
<path d="M94.224,443.296L125.273,392.883C130.425,384.519 132.683,374.709 131.8,364.925C130.544,350.999 130.155,330.666 137.017,321.258" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
<path d="M330.321,245.996C330.321,245.996 366.35,254.651 383.63,288.625" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
<path d="M343.327,474.013L355.665,456.558C355.665,456.558 377.046,438.413 382.023,418.457" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
<path d="M220.467,325.137C220.467,325.137 232.483,315.709 224.765,304.502" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
<path d="M279.913,393.677C279.913,393.677 277.21,376.887 292.005,376.887" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
<path d="M263.588,156.497C263.588,156.497 275.643,142.011 292.572,144.506" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
<path d="M194.876,185.686C194.876,185.686 213.444,184.353 228.889,198.343" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
<path d="M239.573,87.722L239.427,94.156L247.711,94.156" style="fill:none;fill-rule:nonzero;stroke:black;stroke-width:1.06px;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0.43,3.18;" />
</g>
<g id="cogs" opacity=0 clip-path="url(#blob-background)">
<path id="red-cog" d="M385.558,385.386C383.802,382.033 385.098,377.892 388.45,376.136C391.804,374.38 395.945,375.676 397.7,379.029C399.457,382.381 398.161,386.523 394.808,388.279C391.454,390.034 387.313,388.739 385.558,385.386M371.156,395.043L379.541,392.605C380.509,393.731 381.609,394.705 382.813,395.504L381.891,404.397L386.229,405.753L390.437,398.099C391.88,398.209 393.344,398.128 394.793,397.832L400.433,404.781L404.459,402.674L402.024,394.291C403.149,393.324 404.125,392.225 404.922,391.02L413.816,391.945L415.172,387.607L407.518,383.399C407.628,381.955 407.542,380.495 407.248,379.044L414.194,373.406L412.086,369.38L403.706,371.814C402.739,370.688 401.642,369.712 400.437,368.914L401.361,360.018L397.024,358.662L392.817,366.316C391.373,366.206 389.912,366.287 388.46,366.581L382.821,359.632L378.795,361.74L381.23,370.123C380.105,371.09 379.129,372.189 378.332,373.394L369.438,372.469L368.082,376.807L375.736,381.015C375.626,382.458 375.704,383.922 375.998,385.373L369.046,391.015L371.156,395.043Z" style="fill:rgb(255,54,18);fill-rule:nonzero;" />
<path id="blue-cog" d="M381.76,323.411C380.616,321.228 381.46,318.531 383.644,317.387C385.827,316.244 388.524,317.087 389.667,319.271C390.811,321.454 389.967,324.151 387.783,325.295C385.599,326.437 382.902,325.594 381.76,323.411M372.381,329.699L377.842,328.112C378.472,328.845 379.188,329.479 379.973,329.999L379.372,335.789L382.197,336.674L384.937,331.688C385.877,331.761 386.83,331.708 387.774,331.515L391.446,336.041L394.068,334.668L392.482,329.21C393.215,328.58 393.85,327.865 394.369,327.079L400.161,327.682L401.044,324.857L396.06,322.117C396.131,321.176 396.076,320.226 395.884,319.281L400.407,315.61L399.035,312.988L393.578,314.573C392.948,313.84 392.234,313.204 391.449,312.684L392.051,306.892L389.226,306.009L386.487,310.993C385.547,310.921 384.595,310.974 383.65,311.166L379.978,306.64L377.356,308.013L378.942,313.472C378.209,314.102 377.573,314.817 377.054,315.602L371.263,315L370.38,317.824L375.364,320.563C375.293,321.504 375.343,322.458 375.535,323.402L371.008,327.075L372.381,329.699Z" style="fill:rgb(0,210,223);fill-rule:nonzero;" />
<path id="yellow-cog" d="M144.814,278.563C143.986,276.233 145.205,273.672 147.535,272.844C149.866,272.016 152.426,273.235 153.254,275.565C154.083,277.896 152.864,280.456 150.533,281.284C148.202,282.112 145.641,280.894 144.814,278.563M134.609,283.488L140.258,282.681C140.781,283.498 141.403,284.23 142.11,284.857L140.695,290.526L143.377,291.802L146.803,287.236C147.727,287.44 148.681,287.522 149.646,287.464L152.657,292.478L155.455,291.484L154.649,285.837C155.466,285.315 156.199,284.694 156.825,283.987L162.494,285.402L163.77,282.72L159.205,279.295C159.408,278.371 159.487,277.418 159.43,276.452L164.442,273.443L163.448,270.644L157.803,271.449C157.28,270.632 156.66,269.899 155.954,269.272L157.369,263.602L154.687,262.326L151.263,266.892C150.339,266.688 149.385,266.606 148.419,266.663L145.409,261.649L142.61,262.643L143.416,268.29C142.599,268.813 141.867,269.434 141.24,270.14L135.571,268.725L134.295,271.407L138.861,274.833C138.657,275.756 138.573,276.711 138.63,277.677L133.614,280.688L134.609,283.488Z" style="fill:rgb(255,197,0);fill-rule:nonzero;" />
</g>
<g id="small-leaf-left">
<path d="M247.461,110.38C253.394,116.313 256.337,124.101 256.299,131.876C248.523,131.915 240.735,128.972 234.802,123.039C228.869,117.106 225.926,109.318 225.964,101.542C233.74,101.504 241.528,104.447 247.461,110.38" style="fill:rgb(169,185,0);fill-rule:nonzero;" />
<path d="M234.915,110.276L256.075,132.963" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
<path d="M243.884,113.142L244.895,120.977" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
</g>
<g id="small-leaf-right">
<path d="M264.318,110.38C258.385,116.313 255.44,124.101 255.48,131.876C263.256,131.915 271.044,128.972 276.977,123.039C282.91,117.106 285.853,109.318 285.815,101.542C278.039,101.504 270.251,104.447 264.318,110.38" style="fill:rgb(169,185,0);fill-rule:nonzero;" />
<path d="M277.074,110.276L255.914,132.963" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
<path d="M268.105,113.142L267.095,120.977" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
</g>
<g id="big-leaf-right">
<path d="M274.32,212.284C261.463,225.141 255.084,242.017 255.169,258.867C272.019,258.952 288.896,252.572 301.752,239.716C314.609,226.859 320.988,209.983 320.903,193.133C304.053,193.048 287.177,199.427 274.32,212.284" style="fill:rgb(169,185,0);fill-rule:nonzero;" />
<path d="M307.393,205.67L255.609,259.709" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
<path d="M277.45,214.315L281.251,232.746" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
<path d="M272.508,242.073L290.848,239.839" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
</g>
<g id="med-leaf-right">
<path d="M267.913,161.487C259.718,169.682 255.651,180.44 255.705,191.181C266.446,191.235 277.204,187.169 285.399,178.973C293.595,170.778 297.661,160.02 297.607,149.279C286.866,149.225 276.108,153.292 267.913,161.487" style="fill:rgb(169,185,0);fill-rule:nonzero;" />
<path d="M287.074,159.423L255.311,192.08" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
<path d="M274.657,162.256L271.486,175.751" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
<path d="M267.6,179.453L274.657,179.453" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
</g>
<g id="med-leaf-left">
<path d="M243.866,161.487C252.061,169.682 256.128,180.44 256.074,191.181C245.333,191.235 234.575,187.169 226.38,178.973C218.184,170.778 214.118,160.02 214.171,149.279C224.913,149.225 235.671,153.292 243.866,161.487" style="fill:rgb(169,185,0);fill-rule:nonzero;" />
<path d="M224.311,159.423L256.074,192.08" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
<path d="M236.729,162.256L239.899,175.751" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
<path d="M244.895,180.487L235.445,179.256" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
</g>
<g id="big-leaf-left" opacity=0>
<path d="M237.458,212.284C250.314,225.141 256.694,242.017 256.61,258.867C239.759,258.952 222.883,252.572 210.026,239.716C197.169,226.859 190.79,209.983 190.874,193.133C207.725,193.048 224.601,199.427 237.458,212.284" style="fill:rgb(169,185,0);fill-rule:nonzero;" />
<path d="M204.29,205.67L256.074,259.709" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
<path d="M226.132,214.315L230.432,232.746" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
<path d="M239.663,243.031L222.195,241.124" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" />
</g>
<path id="tree-base-right" d="M270.153,347.043L270.153,355.261C270.153,359.122 267.023,362.252 263.162,362.252C259.301,362.252 256.171,359.122 256.171,355.261L256.171,129.997" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" opacity=0 />
<path id="tree-base-left" d="M241.626,347.043L241.626,355.261C241.626,359.122 244.756,362.252 248.617,362.252C252.478,362.252 255.608,359.122 255.608,355.261L255.608,129.04" style="fill:none;fill-rule:nonzero;stroke:rgb(43,48,48);stroke-width:2px;" opacity=0 />
<path id="tree-circle-left" d="M244.356,348.043C244.356,349.551 243.134,350.773 241.626,350.773C240.119,350.773 238.896,349.551 238.896,348.043C238.896,346.535 240.119,345.313 241.626,345.313C243.134,345.313 244.356,346.535 244.356,348.043" style="fill-rule:nonzero;" opacity=0 />
<path id="tree-circle-right" d="M272.883,348.043C272.883,349.551 271.661,350.773 270.153,350.773C268.646,350.773 267.423,349.551 267.423,348.043C267.423,346.535 268.646,345.313 270.153,345.313C271.661,345.313 272.883,346.535 272.883,348.043" style="fill-rule:nonzero;" opacity=0 />

<path id="plus-symbol" opacity=0 d="M269.266,83.213L259.867,83.213L259.867,73.814L252.475,73.814L252.475,83.213L243.076,83.213L243.076,90.606L252.475,90.606L252.475,100.004L259.867,100.004L259.867,90.606L269.266,90.606L269.266,83.213Z" style="fill:rgb(255,54,18);fill-rule:nonzero;" />
</svg>
</div> -->

            <h2>About Us</h2>
            <p class="text-white"><b>Health advice you can trust</b></p>
          </div>
  
          <div class="row">
            <!-- <div class="col-lg-6 order-1 order-lg-2">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div> -->
            <div class="bg-dark bg-opacity-90 col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>What we’re about</h3>
              <p class="fst-italic">
                The key to good health is good nutrition. HealthYou enables you to keep track of your food calories count and work on achieving a more active and healthier lifestyle!
              </p>
              <ul>
                <li><i class="bi bi-check-circled"></i> Food Calorie Tracker keeps track of food calories!</li>
                <li><i class="bi bi-check-circled"></i> Keep track of your routine with by customising it with our calendar!</li>
                <li><i class="bi bi-check-circled"></i> Use our google map to visit monuments in your vicinity. It has an auto location tracker to spot your current location!</li>
              </ul>
              <p>
                With a consistent routine, positive mindset, you will be sure to achieve your target goal and desired lifestyle! Stay happy, SMILE! &#x263A 
              </p>
            </div>
          </div>
  
        </div>
      </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- <section id="why-us" class="why-us">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item">
            <span>01</span>
            <h4>Lorem Ipsum</h4>
            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>02</span>
            <h4>Repellat Nihil</h4>
            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>03</span>
            <h4> Ad ad velit qui</h4>
            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>04</span>
            <h4>Repellendus molestiae</h4>
            <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider lando casa</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>05</span>
            <h4>Sapiente Magnam</h4>
            <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est quibusdam</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>06</span>
            <h4>Facilis Impedit</h4>
            <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p>
          </div>

        </div>

      </div>
    </section>End Why Us Section -->

    <!-- ======= Our Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container">

        <div class="section-title">
          <h2>Our Clients</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>End Our Clients Section -->

    <!-- ======= Services Section VueJs Component ======= -->
 <section id="services" class="services">
  <div class="container" style="text-align: center;">

    <div class="section-title bg-secondary bg-opacity-50">
      <h2>Calories Trackers</h2>
      <p class="text-white"><b>Lead a healthy lifestyle. Start by making little changes, track your intake calories, gradually increase exercise routine to live a healthier and happier life!</b></p>
    </div>

    <div id='content' class="row">

          <trackers-content iconcolour="icon-box iconbox-blue" style="color:black;" context="Don't give in to food temptations! Track food calories with this function!" title='Food Calorie Tracker' 
          delayvalue="100" iclass="bx bxl-dribbble" link="foodCalorieTrackerPage.html"
          dvalue="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></trackers-content>
      

          <trackers-content iconcolour="icon-box iconbox-orange"  style="color:black;" context='Schedule . Plan your schedule today! What do you have in mind?' title='Calendar' 
          delayvalue="200" iclass="bx bx-file" link="profile.html"
          dvalue="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></trackers-content>
      

          <trackers-content iconcolour="icon-box iconbox-pink" style="color:black;" context='Track how much calories you have burned from walking from distance A to B!' title='Walking Distance Tracker' 
          delayvalue="300" iclass="bx bx-tachometer" link="anotherplace.html"
          dvalue="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></trackers-content>
      

          <!-- <trackers-content iconcolour="icon-box iconbox-yellow" context='What do you feel like eating? Tell us a food you like to have now!' title='Search Engine' 
          delayvalue="100" iclass="bx bx-layer" link="home.html"
          dvalue="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></trackers-content>
      
  
          <trackers-content iconcolour="icon-box iconbox-red" context='Track your progress! Have you been disipline with your progress to achieve your desire goals?' title='Data Visualisation' 
          delayvalue="200" iclass="bx bx-slideshow" link="profiling.html"
          dvalue="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></trackers-content>
      
  
          <trackers-content iconcolour="icon-box iconbox-teal" context='Schedule . Plan your schedule today! What do you have in mind?' title='Calendar' 
          delayvalue="300" iclass='bx bx-arch' link=""
          dvalue="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></trackers-content> -->

    </div>

  </div>


 
</section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section>End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p style='color: white;'><b>Our Fabulous Team</b></p>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/yk.png" alt=""  style="height:120px">
              <h4 class="text-dark">Lim Yi Kiat</h4>
              <span style="color:#aaaaaa">Chief Executive Officer</span>
              <p>
                Graduated from Harvard-MIT Program in Health Sciences and Technology.
              </p>
              <div class="social">
                <a href="https://twitter.com/yikiatsmile?lang=en"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/kiat.yi.56"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/symmetrikiat/"><i class="bi bi-instagram"></i></a>
                <a href="https://sg.linkedin.com/in/lim-yi-kiat-726a03121"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/elmer.png" alt=""  style="height:120px">
              <h4 class="text-dark">Elmer Yeo</h4>
              <span  style="color:#aaaaaa">Product Manager</span>
              <p>
                Graduated from Massachusetts Institute of Technology (MIT) Engineering.
              </p>
              <div class="social">
                <a href="https://twitter.com/cowpluspow"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/elmer.yeo"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/definitelynotelmer/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/elmeryeo/"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member pt-5">
              <img src="assets/img/glenna.png" alt=""  style="height:100px">
              <h4 class="text-dark">Glenna Ong</h4>
              <span style="color:#aaaaaa">CTO</span>
              <p>
                Graduated from University of Cambridge. Major in Computer Science.
              </p>
              <div class="social">
                <a href="https://twitter.com/xtggglenna"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/xtggglenna"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/xtggglenna/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/glenna-ong-873887202 "><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member pt-5">
              <img src="assets/img/bella.png" alt="" style="height:100px">
              <h4 class="text-dark">Bella Tan</h4>
              <span style="color:#aaaaaa">Big Boss</span>
              <p>
                Graduated from University of Cambridge. Major in Computer Science.
              </p>
              <div class="social">
                <a href="https://twitter.com/bellatan"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/bellatan"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/bella_eh_ella/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/huirutan-bella"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p class="text-white"><b>Feel free to contact us! Feedbacks are welcome too!</b></p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>81 Victoria St, Singapore 188065</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>healthyou@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+65 6828 0100</p>
              </div>
              <iframe src="https://maps.google.com/maps?q=smu&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" style="color:black;">
            <form action="./forms/emailing.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
          

        </div>

      </div>
      
    </section>
    
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>HealthYou</h3>
      <p>Eat Healthy. Live Healthy. Be Happy.</p>
      <div class="social-links">
        <a href="https://twitter.com/sporeMOH?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/sghealthministry" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/moh_singapore/?hl=en" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/ministry-of-health-sg/?originalSubdomain=sg" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>HealthYou</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script>
  //   localStorage.setItem("username", "yk");
  //   var username = localStorage.getItem("username");
  //   if (username === null){
  //     window.location.href = "login/loginpage.php";
  //   }
  //   alert(username)

  //   function logout() {
  // localStorage.removeItem('username')  
  
  // window.location.href = "login/loginpage.php";

    

  
  </script>

<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/618c85f46885f60a50bb4533/1fk6emh5m';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src='style.js'></script>

  <script src="assets/js/main.js"></script>
  <script src='assets/js/c.js'></script>

</body>

</html>