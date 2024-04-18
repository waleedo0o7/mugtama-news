<html dir="<?php if (isset($_GET['dir']))   echo $_GET['dir']; ?>">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <!-- datatables -->
    <link href="assets/vendors/datatables/datatables.min.css" rel="stylesheet" />

    <!-- select2 -->
    <link href="assets/vendors/select2/select2.min.css" rel="stylesheet" />

    <!-- Swiper Slider -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />

    <link href="https://fonts.cdnfonts.com/css/tajawal" rel="stylesheet">

    <!-- Custom -->
    <link href="assets/css/style.css" rel="stylesheet">

    <title> Home page </title>

</head>


<body>

    <div class="top-bar mb-3">

        <div class="container">

            <div class="row d-flex justify-content-center align-items-center">

                <div class="col-md-6 d-flex justify-content-start align-items-center">
                    <div class="d-flex today-date">
                        <p class="m-0"> 6 ابريل 2024 </p>
                        <span class="mx-2"> | </span>
                        <p class="m-0"> 27 رمضان 1445 </p>
                    </div> <!-- d-flex -->
                </div> <!-- col-md-6 -->

                <div class="col-md-6 d-flex justify-content-end align-items-center">

                    <div class="form-group co-input-with-btn mb-0">
                        <input type="text" class="form-control search" placeholder="بحث">
                        <button class="btn btn-action button"> <i class="fa fa-search"></i></button>
                    </div><!-- form-group -->

                    <a href="#" class="btn btn-primary mx-2 py-2 border-radius-0"> <i class="fa fa-envelope me-1"></i> ارسل مقالا </a>

                    <ul class="reset-list social-media-icons d-flex">
                        <li><a href="#" class="color-black me-2"> <i class="fab fa-facebook-f"></i> </a></li>
                        <li><a href="#" class="color-black me-2"> <i class="fab fa-x-twitter"></i> </a></li>
                        <li><a href="#" class="color-black me-2"> <i class="fab fa-youtube"></i> </a></li>
                        <li><a href="#" class="color-black me-2"> <i class="fab fa-instagram"></i> </a></li>
                        <li><a href="#" class="color-black me-2"> <i class="fab fa-linkedin"></i> </a></li>
                    </ul>

                </div>

            </div>

        </div>

    </div> <!-- top-bar -->

    <div class="logo-and-banner-wrapper mb-3">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="co-logo me-3">
                        <img src="assets/images/logo.png" class="img-fluid logo">
                    </div> <!-- co-logo -->
                </div> <!-- col-md-4 -->

                <div class="col-md-9">
                    <img src="assets/images/banner-1.png" class="img-fluid banner">
                </div> <!-- col-md-8 -->

            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- logo-and-banner-wrapper -->

    <div class="top-nav-wrapper mb-3">
        <div class="container">
            <nav class="top-nav navbar navbar-expand-lg p-0">
                <div class="navbar-collapse">
                    <ul class="navbar-nav p-0">

                        <li class="home-item">
                            <a class="home-link" href="homepage.php?dir=rtl">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog-list.php?dir=rtl">الكويت</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-list.php?dir=rtl">الأسرة</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-list.php?dir=rtl"> قضايا المجتمع </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-list.php?dir=rtl"> الإسلام والحياة </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-list.php?dir=rtl"> مسلمون حول العالم </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-list.php?dir=rtl"> تقارير وحوارات </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-list.php?dir=rtl"> القضية الفلسطينية </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-list.php?dir=rtl"> مرئيات </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog-list.php?dir=rtl"> استشارات </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="blog-list.php?dir=rtl" role="button" data-toggle="dropdown">
                                المزيد
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="blog-list.php?dir=rtl"> رابط </a>
                                <a class="dropdown-item" href="blog-list.php?dir=rtl"> رابط </a>
                                <a class="dropdown-item" href="blog-list.php?dir=rtl"> رابط </a>
                                <a class="dropdown-item" href="blog-list.php?dir=rtl"> رابط </a>
                            </div>
                        </li>
                    </ul> <!-- navbar-nav -->
                </div>
            </nav>

        </div>
    </div>


    <div class="mobile-menu mb-3">


        <div class="row  m-0 mb-2">
            <div class="col-4 d-inline-flex justify-content-center align-items-center">
                <div class="menu-btn open-mobile-menu">
                    <i class="fa fa-bars mobile-bar-icon"></i>
                </div><!-- menu-btn -->
            </div>
            <div class="col-4 d-inline-flex justify-content-center align-items-center flex-column">
                <div class="logo mb-3">
                    <img src="assets/images/logo-sm--light.png" class="img-fluid">
                </div> <!-- logo -->
            </div>
            <div class="col-4 d-inline-flex justify-content-center align-items-center">
                <div class="search">
                    <i class="fa fa-search mobile-bar-icon"></i>
                </div> <!-- search -->
            </div>
        </div>



        <div class="row m-0">

            <div class="col-4 d-inline-flex justify-content-center align-items-center">
                <a href="#" class="btn btn-primary mx-2 py-2 border-radius-0"> <i class="fa fa-envelope me-1"></i> ارسل مقالا </a>
            </div>

            <div class="col-4 d-inline-flex justify-content-center align-items-center flex-column">
                <ul class="reset-list social-media-icons d-flex">
                    <li><a href="#" class="color-black me-2"> <i class="fab fa-facebook-f"></i> </a></li>
                    <li><a href="#" class="color-black me-2"> <i class="fab fa-x-twitter"></i> </a></li>
                    <li><a href="#" class="color-black me-2"> <i class="fab fa-youtube"></i> </a></li>
                    <li><a href="#" class="color-black me-2"> <i class="fab fa-instagram"></i> </a></li>
                    <li><a href="#" class="color-black me-2"> <i class="fab fa-linkedin"></i> </a></li>
                </ul>
            </div>

            <div class="col-4 d-inline-flex justify-content-center align-items-center">
                <a href="#">
                    <img src="assets/images/en.jpg" class="img-fluid banner">
                </a>
            </div>
        </div>








    </div><!-- mobile-menu -->