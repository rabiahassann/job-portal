<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Your App')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! asset('assets/images/logo/favicon.png') !!}" type="image/x-icon">

<!-- CSS Files -->
<link rel="stylesheet" href="{!! asset('assets/css/animate-3.7.0.css') !!}">
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome-4.7.0.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/fonts/flat-icon/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-4.1.3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<style>
    ul li.active {
    border-bottom: 3px solid orange;
    margin-top:3px;
}
textarea {
            resize: none;
            overflow: hidden;
        }
</style>
</head>
<body>
      <!-- Header Area Starts -->
	<header class="header-area main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                <div class="logo-area">
    <a href="index.html"><img src="{{asset('assets/images/logo-no-background.png')}}" alt="logo" width="200" height="auto"></a>
</div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class=""><a href="index.html">home</a></li>
                            <li><a href="about.html">about us</a></li>
                            <li><a href="job-category.html">category</a></li>
                            <li><a href="#">blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-home.html">Blog Home</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">contact</a></li>
                            <li><a href="#">pages</a>
                                <ul class="sub-menu">
                                    <li><a href="job-search.html">Job Search</a></li>
                                    <li><a href="job-single.html">Job Single</a></li>
                                    <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                </ul>
                            </li>
                            <li class="menu-btn">
                            <a href="{{ route('showLoginForm') }}" class="login">Log in</a>
                             <a href="#" class="template-btn">sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <div>
        @yield('content')
    </div>

    <footer>
    <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3">
                            <div class="single-widget-home mb-5 mb-lg-0">
                                <h3 class="mb-4">top products</h3>
                                <ul>
                                    <li class="mb-2"><a href="#">managed website</a></li>
                                    <li class="mb-2"><a href="#">managed reputation</a></li>
                                    <li class="mb-2"><a href="#">power tools</a></li>
                                    <li><a href="#">marketing service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6">
                            <div class="single-widget-home mb-5 mb-lg-0">
                                <h3 class="mb-4">newsletter</h3>
                                <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>  
                                <form action="#">
                                    <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                    <button type="submit" class="template-btn">subscribe now</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 offset-xl-1 col-lg-3">
                            <div class="single-widge-home">
                                <h3 class="mb-4">instagram feed</h3>
                                <div class="feed">
                                    <img src="{!! asset('assets/images/feed1.jpg')!!}" alt="feed">
                                    <img src="{!! asset('assets/images/feed2.jpg')!!}" alt="feed">
                                    <img src="{!! asset('assets/images/feed3.jpg')!!}" alt="feed">
                                    <img src="{!! asset('assets/images/feed4.jpg')!!}" alt="feed">
                                    <img src="{!! asset('assets/images/feed5.jpg')!!}" alt="feed">
                                    <img src="{!! asset('assets/images/feed6.jpg')!!}" alt="feed">
                                    <img src="{!! asset('assets/images/feed7.jpg')!!}" alt="feed">
                                    <img src="{!! asset('assets/images/feed8.jpg')!!}" alt="feed">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="social-icons">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="{!! asset('assets/js/vendor/owl-carousel.min.js')!!}"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="{!! asset('vendor/sweetalert2/sweetalert2.all.min.js') !!}"></script>
        <!-- Add any common footer elements here -->
    </footer>
</body>
</html>
