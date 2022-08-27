<!DOCTYPE html>
<html lang="en" class="max-width-d">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Genc Gruda - Portfolio</title>
    <meta name="description" content="Diese Seite stellt den (Lead) Software-Entwickler Genc Gruda und seine Arbeiten/Fähigkeiten vor." />
    <meta name="keywords" content="Software-Developer, Software-Entwickler, PHP, Laravel, Projekt manager, Jira" />
    <meta name="author" content="Genc Gruda" />
    <!--  FavIcon  -->
    <link rel="shortcut icon" href="https://via.placeholder.com/32x32">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    <!-- Malihu Jquery Custom ScrollBar Css -->
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Magnific Popup Css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--  Custom Style Css  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--  Color Css  -->
    <link rel="stylesheet" href="assets/colors/blue.css">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="max-width-d">

<!-- Preloader -->
<div id="line-loader">
    <div class="middle-line"></div>
</div>

<!--   Menu Overlay Mobile -->
<div class="menu-overlay d-none"></div>

@include('layouts._partials.right_site')

@include('layouts._partials.left_site')

<!--  Main Start  -->
<main id="main" class="main-2">

    @include('content._partials.home')

    @include('content._partials.about')

    @include('content._partials.resume')

    @include('content._partials.portfolio')

    <!--  Blog Start  -->
{{--    <section id="blog" class="section blog">--}}
{{--        <div class="container">--}}
{{--            <h3 class="subtitle">Latest News</h3>--}}
{{--            <div class="boxes">--}}
{{--                <div class="row vertical-line">--}}
{{--                    <!-- Item 01 -->--}}
{{--                    <div class="col-md-6">--}}
{{--                        <a href="blog-single.html" class="blog-box">--}}
{{--                            <div class="blog-image">--}}
{{--                                <img src="https://via.placeholder.com/510x340" alt="/">--}}
{{--                                <div class="blog-icon">--}}
{{--                                    <i class="bi bi-journal-text"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="blog-post-content">--}}
{{--                                <div class="blog-dates">--}}
{{--                                    <span>20 June 2021</span>--}}
{{--                                </div>--}}
{{--                                <h6 class="blog-header">Stay informed about the latest cameras and money of that</h6>--}}
{{--                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- Item 02 -->--}}
{{--                    <div class="col-md-6">--}}
{{--                        <a href="blog-single.html" class="blog-box">--}}
{{--                            <div class="blog-image">--}}
{{--                                <img src="https://via.placeholder.com/510x340" alt="/">--}}
{{--                                <div class="blog-icon">--}}
{{--                                    <i class="bi bi-journal-text"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="blog-post-content">--}}
{{--                                <div class="blog-dates">--}}
{{--                                    <span>20 June 2021</span>--}}
{{--                                </div>--}}
{{--                                <h6 class="blog-header">What Resources help you with your photography</h6>--}}
{{--                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- Item 03 -->--}}
{{--                    <div class="col-md-6">--}}
{{--                        <a href="blog-single.html" class="blog-box">--}}
{{--                            <div class="blog-image">--}}
{{--                                <img src="https://via.placeholder.com/510x340" alt="/">--}}
{{--                                <div class="blog-icon">--}}
{{--                                    <i class="bi bi-journal-text"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="blog-post-content">--}}
{{--                                <div class="blog-dates">--}}
{{--                                    <span>20 June 2021</span>--}}
{{--                                </div>--}}
{{--                                <h6 class="blog-header">Improve your Skills with blog posts on photography</h6>--}}
{{--                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <!-- Item 04 -->--}}
{{--                    <div class="col-md-6">--}}
{{--                        <a href="blog-single.html" class="blog-box">--}}
{{--                            <div class="blog-image">--}}
{{--                                <img src="https://via.placeholder.com/510x340" alt="/">--}}
{{--                                <div class="blog-icon">--}}
{{--                                    <i class="bi bi-journal-text"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="blog-post-content">--}}
{{--                                <div class="blog-dates">--}}
{{--                                    <span>20 June 2021</span>--}}
{{--                                </div>--}}
{{--                                <h6 class="blog-header">Get Inspiration from photo stories, interviews, and resource</h6>--}}
{{--                                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--  Blog End  -->

    @include('content._partials.contact')

</main>
<!--  Main End  -->

<!--  Mobile Next and Prev Button Start -->
<div class="next-prev-page d-block d-lg-none">
    <button type="button" class="prev-page bg-base-color hstack">
        <i class="bi bi-chevron-compact-left mx-auto"></i>
    </button>
    <button type="button" class="next-page bg-base-color mt-1 mt-lg-3 hstack">
        <i class="bi bi-chevron-compact-right mx-auto"></i>
    </button>
</div>
<!--  Mobile Next and Prev Button End -->

<!--  Navbar Button Mobile Start -->
<div class="menu-toggle">
    <span></span>
    <span></span>
    <span></span>
</div>
<!--  Navbar Button Mobile End -->

<!--  Background Shapes Start  -->
<div class="area">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<!--  Background Shapes End  -->

<!-- Mouase Magic Cursor Start -->
<div class="m-magic-cursor mmc-outer"></div>
<div class="m-magic-cursor mmc-inner"></div>
<!-- Mouase Magic Cursor End -->

<!--  JavaScripts  -->
<!--  Jquery 3.4.1  -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<!--  Bootstrap Js  -->
<script src="assets/js/bootstrap.js"></script>
<!--  Malihu ScrollBar Js  -->
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!--  CountTo Js  -->
<script src="assets/js/jquery.countTo.js"></script>
<!--  Swiper Js  -->
<script src="assets/js/owl.carousel.min.js"></script>
<!--  Isotope Js  -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!--  Magnific Popup Js  -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Map Js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRemITiP7JRWpZwLhVt-T2x5MeUFE2KWs"></script>
<!--  Arshia Js  -->
<script src="assets/js/arshia.js"></script>
</body>
</html>
