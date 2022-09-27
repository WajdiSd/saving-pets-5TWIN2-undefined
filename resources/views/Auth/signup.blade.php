<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SocialV - Responsive Bootstrap 4 Admin Dashboard Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{Vite::asset('resources/assets/images/favicon.ico')}}" />
    <!-- Bootstrap CSS -->
    @vite(['resources/assets/css/bootstrap.min.css'])
    <!-- Typography CSS -->
    @vite(['resources/assets/css/typography.css'])
    <!-- Style CSS -->
    @vite(['resources/assets/css/style.css'])
    <!-- Responsive CSS -->
    @vite(['resources/assets/css/responsive.css'])
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div id="container-inside">
            <div id="circle-small"></div>
            <div id="circle-medium"></div>
            <div id="circle-large"></div>
            <div id="circle-xlarge"></div>
            <div id="circle-xxlarge"></div>
        </div>
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-md-6 text-center pt-5">
                    <div class="sign-in-detail text-white">
                        <a class="sign-in-logo mb-5" href="#"><img src="{{Vite::asset('resources/assets/images/logo-full.png')}}" class="img-fluid" alt="logo"></a>
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                            <div class="item">
                                <img src="{{Vite::asset('resources/assets/images/login/1.png')}}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Find new friends</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                            </div>
                            <div class="item">
                                <img src="{{Vite::asset('resources/assets/images/login/2.png')}}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Connect with the world</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                            </div>
                            <div class="item">
                                <img src="{{Vite::asset('resources/assets/images/login/3.png')}}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Create new events</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 bg-white pt-5">
                    <div class="sign-in-from">
                        <h1 class="mb-0">Sign up</h1>
                        <p>Enter your email address and password to access admin panel.</p>
                        <form class="mt-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Full Name</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Your Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Email address</label>
                                    <input type="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="d-inline-block w-100">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Sign Up</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="#">Log In</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @vite(['resources/assets/js/jquery.min.js'])
    @vite(['resources/assets/js/popper.min.js'])
    @vite(['resources/assets/js/bootstrap.min.js'])
    <!-- Appear JavaScript -->
    @vite(['resources/assets/js/jquery.appear.js'])
    <!-- Countdown JavaScript -->
    @vite(['resources/assets/js/countdown.min.js'])
    <!-- Counterup JavaScript -->
    @vite(['resources/assets/js/waypoints.min.js'])
    @vite(['resources/assets/js/jquery.counterup.min.js'])
    <!-- Wow JavaScript -->
    @vite(['resources/assets/js/wow.min.js'])
    <!-- Apexcharts JavaScript -->
    @vite(['resources/assets/js/apexcharts.js'])
    <!-- lottie JavaScript -->
    @vite(['resources/assets/js/lottie.js'])
    <!-- Slick JavaScript -->
    @vite(['resources/assets/js/slick.min.js'])
    <!-- Select2 JavaScript -->
    @vite(['resources/assets/js/select2.min.js'])
    <!-- Owl Carousel JavaScript -->
    @vite(['resources/assets/js/owl.carousel.min.js'])
    <!-- Magnific Popup JavaScript -->
    @vite(['resources/assets/js/jquery.magnific-popup.min.js'])
    <!-- Smooth Scrollbar JavaScript -->
    @vite(['resources/assets/js/smooth-scrollbar.js'])
    <!-- Chart Custom JavaScript -->
    @vite(['resources/assets/js/chart-custom.js'])
    <!-- Custom JavaScript -->
    @vite(['resources/assets/js/custom.js'])

</body>

</html>