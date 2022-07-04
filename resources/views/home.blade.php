<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Healdi - Medical & Health Template">

    <!-- ========== Page Title ========== -->
    <title>Healdi - Medical & Health Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('homepage/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/assets/css/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{ asset('homepage/style.css')}}" rel="stylesheet">
    <link href="{{ asset('homepage/assets/css/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5/html5shiv.min.js"></script>
    <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    {{-- <div class="top-bar-area inc-pad inc-border">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 info">
                    <p>
                        !Global update on Coronavirus disease <a href="#">(COVID-19)</a> Pandemic
                    </p>
                </div>
                <div class="col-lg-6 text-right item-flex">
                    <div class="info">
                        <ul>
                            <li>
                                <a href="#">Online Appoinment</a>
                            </li>
                            <li>
                                <a href="#">WebMail</a>
                            </li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="container">
                <!-- Start Atribute Navigation -->
                {{-- <div class="attr-nav extra-color">
                    <ul>
                        <li class="contact">
                            <i class="fas fa-stethoscope"></i> 
                            <p>Login<strong>+123 456 7890</strong></p>
                        </li>
                    </ul>
                </div>         --}}
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="homepage/assets/img/logosaras1.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version One</a></li>
                                <li><a href="index-2.html">Home Version Two</a></li>
                                <li><a href="index-3.html">Home Version Three</a></li>
                                <li><a href="index-4.html">Home Version Four</a></li>
                                <li><a href="index-5.html">Home Version Five <span class="badge">New</span></a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Get in Touch</a></li>
                                <li><a href="404.html">Error Page</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Departments</a>
                            <ul class="dropdown-menu">
                                <li><a href="departments.html">Department Version One</a></li>
                                <li><a href="departments-2.html">Department Version Two</a></li>
                                <li><a href="departments-3.html">Department Version Three</a></li>
                                <li><a href="departments-4.html">Department Version Four</a></li>
                                <li><a href="department-single.html">Department Single</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Doctors</a>
                            <ul class="dropdown-menu">
                                <li><a href="doctors.html">Doctors Version One</a></li>
                                <li><a href="doctors-2.html">Doctors Version Two</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                <li><a href="blog-2-colum.html">Blog Grid Two Colum</a></li>
                                <li><a href="blog-3-colum.html">Blog Grid Three Colum</a></li>
                                <li><a href="blog-single.html">Blog Single</a></li>
                                <li><a href="blog-single-with-sidebar.html">Blog Single With Sidebar</a></li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="/dashboard">Dashboard</a>
                        </li>
                        @auth
                        <li>
                            <a href="/logout">Logout</a>
                        </li>
                        @else
                        
                        <li>
                            <a href="/login">Login</a>
                        </li>
                        @endauth
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

   <!-- Start Banner 
    ============================================= -->
    <div class="banner-area inc-shape content-less">
        <div id="bootcarousel" class="carousel text-light text-large slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                <div class="carousel-item active">
                    <div class="slider-thumb bg-cover" style="background-image: url(homepage/assets/img/sarasmedika.png);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            {{-- <h4 data-animation="animated slideInDown">Klinik Umum</h4> --}}
                                            <h2 data-animation="animated slideInRight">Klinik <strong>Saras Medika</strong></h2>
                                            {{-- <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> Discover More</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-thumb bg-cover" style="background-image: url(homepage/assets/img/lobby.jpg);"></div>
                    <div class="box-table">
                        <div class="box-cell shadow dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="content">
                                            <h4 data-animation="animated slideInDown">Tempat Nyaman, Pelayanan Baik</h4>
                                            <h2 data-animation="animated slideInRight">Hanya di <strong>Saras Medika</strong></h2>
                                            {{-- <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> Discover More</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control light" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control light" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Top Entry
    ============================================= -->
    {{-- <div class="top-entry-area relative default-padding text-center">
        <div class="container">
            <div class="item-box">
                <div class="row align-center">
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <i class="fas fa-ambulance"></i>
                            <h4>Emergency Case</h4>
                            <p>
                                Few preferred continual sir led incommode neglected. Discovered too old insensible collecting unpleasant. 
                            </p>
                            <ul>
                                <li>
                                    <span>Phone</span>
                                    <p>0822-2626-2323</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="thumb">
                            <img src="homepage/assets/img/thumb/1.png" alt="Thumb">
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-lg-4 single-item">
                        <div class="item">
                            <i class="fas fa-ribbon"></i>
                            <h4>Cancer Care</h4>
                            <p>
                                Few preferred continual sir led incommode neglected. Discovered too old insensible collecting unpleasant. 
                            </p>
                            <ul>
                                <li>
                                    <span>Phone</span>
                                    <p>(+987)98765432</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Top Entry -->

    <!-- Start About
    ============================================= -->
    <div class="about-area default-padding bg-gray relative">

         <!-- Shape -->
        <div class="shape-left-top shape">
            <img src="homepage/assets/img/shape/1.png" alt="Shape">
        </div>
        <!-- End Shape -->

        <div class="container">
            <div class="row">

                <div class="col-lg-6 thumb">
                    <div class="thumb-box">
                        <img src="homepage/assets/img/800x800.png" alt="Thumb">
                        <div class="intro-video">
                            <div class="video">
                                <a href="https://www.youtube.com/watch?v=5vY-D42NFP4" class="popup-youtube relative theme video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                            <div class="content">
                                <h5>Let’s see our intro video</h5>
                                <p>
                                    If your smile is not becoming to you, then you should be coming.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 info">
                    <h5>Has been working since 2000</h5>
                    <h2>A Great Place to Work. A Great Place to <strong>Receive Care</strong>. Leading Medicine.</h2>
                    <p>
                        Pursuit chamber as elderly amongst on. Distant however warrant farther to of. My justice wishing prudent waiting in be. Who decisively attachment has dispatched. Fruit defer in party me built under first. Forbade him but savings sending ham general.
                    </p>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Online Appoinment</a></h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="flaticon-drugs"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Health Queries</a></h5>
                            </div>
                        </li>
                    </ul>
                    <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> Make Appoinment</a>
                </div>

            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Services 
    ============================================= -->
    <div class="department-area carousel-shadow default-padding-bottom bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Layanan</h4>
                        <h2>Our Department</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-items department-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="homepage/assets/img/rawatinap.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Rawat Inap</a></h4>
                                <p>
                                    Sudden up my excuse to suffer ladies though or. Bachelor possible marianne one directly confined the mention process.  
                                </p>
                                <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Jonathom Doe
                                    </p>
                                </div>
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="homepage/assets/img/rawatjalan.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Rawat Jalan</a></h4>
                                <p>
                                    Sudden up my excuse to suffer ladies though or. Bachelor possible marianne one directly confined the mention process.  
                                </p>
                                <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Jaknil Akia
                                    </p>
                                </div>
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="homepage/assets/img/poligigi.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Poli Gigi</a></h4>
                                <p>
                                    Sudden up my excuse to suffer ladies though or. Bachelor possible marianne one directly confined the mention process.  
                                </p>
                               <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Shikla Brotha
                                    </p>
                               </div>
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        {{-- <div class="item">
                            <div class="thumb">
                                <img src="homepage/assets/img/800x600.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4><a href="#">Orthopaedics</a></h4>
                                <p>
                                    Sudden up my excuse to suffer ladies though or. Bachelor possible marianne one directly confined the mention process.  
                                </p>
                                <div class="head-of">
                                    <p>
                                        <strong>Department head: </strong> Prof. Jaknil Akia
                                    </p>
                                </div>
                                <div class="bottom">
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape-bottom shape">
            <img src="homepage/assets/img/shape/8.png" alt="Shape">
        </div>
        <!-- End Shape -->
    </div>
    <!-- End Services -->

    <!-- Start Consultation 
    ============================================= -->
    {{-- <div class="consultation-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7 process">
                    <h2>
                        How to get a <br> consultation from us?
                    </h2>
                    <p>
                        Badies she basket season age her uneasy saw. Discourse unwilling am no described dejection incommode no listening of. Before nature his parish boy.
                    </p>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-calendar-1"></i>
                                <h5>Make Appointment</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-doctor"></i> 
                                <h5>Select A Doctor</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 single-item">
                            <div class="item">
                                <i class="flaticon-heartbeat-1"></i>
                                <h5>Confirm Consultation</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 form">
                    <div class="appoinment-box text-center wow fadeInRight">
                        <div class="heading">
                            <h4>Make an Appointment</h4>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="f_name" name="name" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="f_phone" name="phone" placeholder="Phone" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Child</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Department</option>
                                            <option value="2">Medecine</option>
                                            <option value="4">Dental Care</option>
                                            <option value="5">Traumatology</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="f_date" name="date" placeholder="Date" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="f_time" name="time" placeholder="Time" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" id="f_submit">
                                        Book Appoinment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Consultation -->

    <!-- Start Choose Us 
    ============================================= -->
    {{-- <div class="choose-us-area">
        <div class="row">
            <div class="col-lg-6 thumb bg-cover" style="background-image: url(assets/img/2440x1578.png);"></div>
            <div class="col-lg-6 info">
                <div class="info-box">
                    <h5>At Our Clinic</h5>
                    <h2>Our Doctors <br> Specialize in you.</h2>
                    <p>
                        Respect forming clothes do in he. Course so piqued no an by appear. Themselves reasonable pianoforte so motionless he as difficulty be. Abode way begin ham there power whole. Suppose neither evident welcome
                    </p>
                    <p>
                        Do unpleasing indulgence impossible to conviction. Suppose neither evident welcome it at do civilly uncivil. Sing tall much you get nor.
                    </p>
                    <a class="btn btn-md btn-gradient" href="#"><i class="fas fa-angle-right"></i> Doctor Lists</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Choose Us -->

    <!-- Start Doctos Area 
    ============================================= -->
    {{-- <div class="doctors-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Doctors</h4>
                        <h2>Meet our Experts</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="doctor-items">
                <div class="row">

                    <div class="col-lg-4">
                        <ul id="tabs" class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="" data-target="#tab1" data-toggle="tab" class="active nav-link">
                                    <i class="flaticon-cardiologist"></i>
                                    <span>Cardiologists</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab2" data-toggle="tab" class="nav-link">
                                    <i class="flaticon-dermatologist"></i>
                                    <span>Dermatologists</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab3" data-toggle="tab" class="nav-link">
                                    <i class="flaticon-paramedic"></i>
                                    <span>Medicine Specialists</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" data-target="#tab4" data-toggle="tab" class="nav-link">
                                    <i class="flaticon-therapist"></i>
                                    <span>Family Physicians</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-8">
                        <div id="tabsContent" class="tab-content wow fadeInUp" data-wow-delay="0.5s">
                            
                            <div id="tab1" class="tab-pane fade active show">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="homepage/assets/img/800x800.png" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Dr. Jonathom Doe</h4>
                                                <span>MBBS, BMBS, MBChB, MBBCh</span>
                                                <p>
                                                    Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. 
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="homepage/assets/img/800x800.png" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Prof. Hones Park </h4>
                                                <span>MBBS, BMBS, MBChB, MBBCh</span>
                                                <p>
                                                    Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. 
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab2" class="tab-pane fade">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="homepage/assets/img/800x800.png" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Professor. Sakaoat Amir</h4>
                                                <span>MBBS, BMBS, MBChB, MBBCh</span>
                                                <p>
                                                    Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate.  
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab3" class="tab-pane fade">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="homepage/assets/img/800x800.png" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Dr. Andro kuria</h4>
                                                <span>MBBS, BMBS, MBChB, MBBCh</span>
                                                <p>
                                                    Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate.  
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab4" class="tab-pane fade">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 thumb">
                                            <img src="homepage/assets/img/800x800.png" alt="Thumb">
                                        </div>
                                        <div class="col-lg-6 info-box">
                                            <div class="info">
                                                <h4>Professor. Matori Pulas</h4>
                                                <span>MBBS, BMBS, MBChB, MBBCh</span>
                                                <p>
                                                    Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate.  
                                                </p>
                                                <a class="btn btn-sm btn-gradient cirlce" href="#"><i class="fas fa-angle-right"></i> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Doctos Area -->

    <!-- Start Testomonials 
    ============================================= -->
    {{-- <div class="testimonials-area overflow-hidden carousel-shadow default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-4 text-light">
                    <div class="heading">
                        <h5>Testimonials</h5>
                        <h2>Whay people says <br> about our services</h2>
                        <a class="btn btn-sm btn-light effect" href="#"><i class="fas fa-angle-right"></i>Viewl All</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testimonials-carousel text-center owl-carousel owl-theme">

                        <div class="item">
                            <div class="provider">
                                <div class="thumb">
                                    <img src="homepage/assets/img/100x100.png" alt="Thumb">
                                </div>
                                <div class="bio">
                                    <h5>Jonathom Doe</h5>
                                    <span>patient of <strong>surgery</strong></span>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me. Unpleasing.
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="provider">
                                <div class="thumb">
                                    <img src="homepage/assets/img/100x100.png" alt="Thumb">
                                </div>
                                <div class="bio">
                                    <h5>Jonathom Doe</h5>
                                    <span>patient of <strong>surgery</strong></span>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me. Unpleasing.
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="provider">
                                <div class="thumb">
                                    <img src="homepage/assets/img/100x100.png" alt="Thumb">
                                </div>
                                <div class="bio">
                                    <h5>Jonathom Doe</h5>
                                    <span>patient of <strong>surgery</strong></span>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    Totally dearest expense on demesne ye he. Curiosity excellent commanded in me. Unpleasing.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Testomonials Area -->

    <!-- Start Blog 
    ============================================= -->
    {{-- <div class="blog-area bottom-less bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>News</h4>
                        <h2>Latest Blog</h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="homepage/assets/img/800x600.png" alt="Thumb"></a>
                                <div class="post-date">
                                    12 Jul
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Health</a>
                                        </li>
                                        <li>
                                            <a href="#">Patient</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Enjoyed me settled mr respect no spirits civilly. </a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="homepage/assets/img/100x100.png" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="homepage/assets/img/800x600.png" alt="Thumb"></a>
                                <div class="post-date">
                                    05 Aug
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Test</a>
                                        </li>
                                        <li>
                                            <a href="#">Doctor</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Suitable settling attended no doubtful feelings.</a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="homepage/assets/img/100x100.png" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 24 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                    <!-- Single Itme -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="homepage/assets/img/800x600.png" alt="Thumb"></a>
                                <div class="post-date">
                                    27 Dec
                                </div>
                            </div>
                            <div class="info">
                                <div class="tags">
                                    <ul>
                                        <li>
                                            <a href="#">Patient</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Unwilling sportsmen he in questions september. </a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="homepage/assets/img/100x100.png" alt="Author">
                                                <span>Author</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 07 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Itme -->
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Blog Area -->

    <!-- Start Contact Area  
    ============================================= -->
    {{-- <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="contact-items">
                <div class="row">

                    <div class="col-lg-7 wow address-box fadeInUp bg-cover" style="background-image: url(homepage/assets/img/2440x1578.png);">
                        <div class="address-info">
                            <ul>
                                <li>
                                    <h5><i class="flaticon-call"></i> Phone</h5>
                                    <span>+44-20-7328-4499</span>
                                </li>
                                <li>
                                    <h5><i class="flaticon-email"></i> Email</h5>
                                    <span>info@healdi.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 wow fadeInLeft contact-form-box">
                        <h2>Need help? <strong>Let's ask your questions</strong></h2>
                        <form action="homepage/assets/mail/contact.php" method="POST" class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message
                                    </button>
                                </div>
                                <!-- Alert Message -->
                                <div class="col-lg-12 alert-notification">
                                    <div id="message" class="alert-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Contact -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="assets/img/logo-light.png" alt="Logo">
                            <p>
                                Required honoured trifling eat pleasure man relation. Assurance yet bed was improving furniture man. Distrusts delighted 
                            </p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>support@validtemplates.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span>+44-20-7328-4499</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="single-item col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Department</h4>
                            <ul>
                                <li>
                                    <a href="#">Medecine & Health</a>
                                </li>
                                <li>
                                    <a href="#">Dental Care</a>
                                </li>
                                <li>
                                    <a href="#">Eye Treatment</a>
                                </li>
                                <li>
                                    <a href="#">Children Chare</a>
                                </li>
                                <li>
                                    <a href="#">Traumatology</a>
                                </li>
                                <li>
                                    <a href="#">X-ray</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="single-item col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Usefull Links</h4>
                            <ul>
                                <li>
                                    <a href="#">Ambulance</a>
                                </li>
                                <li>
                                    <a href="#">Emergency</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="#">Project</a>
                                </li>
                                <li>
                                    <a href="#">About Us</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="single-item col-lg-4 col-md-6 item">
                        <div class="f-item branches">
                            <div class="branches">
                                <ul>
                                    <li>
                                        <strong>USA Branches:</strong> 
                                        <span>4992 Bryan Avenue, Prior Lake, Minnesota <br> Phone: 651-379-4698</span>
                                    </li>
                                    <li>
                                        <strong>Central Branches:</strong> 
                                        <span>2001 Kia Magentis, Prior Lake, Minnesota <br> Phone: 651-379-4698</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <p>Copyright &copy;  2020. Designed by <a href="#">validtemplatess</a></p>
                    </div>
                    <div class="col-lg-6 text-right social">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube"></i> Youtube</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="homepage/assets/js/jquery-1.12.4.min.js"></script>
    <script src="homepage/assets/js/popper.min.js"></script>
    <script src="homepage/assets/js/bootstrap.min.js"></script>
    <script src="homepage/assets/js/jquery.appear.js"></script>
    <script src="homepage/assets/js/jquery.easing.min.js"></script>
    <script src="homepage/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="homepage/assets/js/modernizr.custom.13711.js"></script>
    <script src="homepage/assets/js/owl.carousel.min.js"></script>
    <script src="homepage/assets/js/wow.min.js"></script>
    <script src="homepage/assets/js/isotope.pkgd.min.js"></script>
    <script src="homepage/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="homepage/assets/js/count-to.js"></script>
    <script src="homepage/assets/js/jquery.nice-select.min.js"></script>
    <script src="homepage/assets/js/bootsnav.js"></script>
    <script src="homepage/assets/js/main.js"></script>

</body>
</html>