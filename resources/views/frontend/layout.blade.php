<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @if(!empty($super_settings['favicon']))

        <link rel="icon" type="image/png" href="{{ url('public') }}/uploads/{{$super_settings['favicon']}}">
    @endif
    <title>
        @yield('title')
    </title>
    <link id="pagestyle" href="{{ url('public/css/app.css') }}?v=19" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('public/assets/css/vendor/lastudioicons.css')}}">
    <link rel="stylesheet" href="{{ url('public/assets/css/vendor/dliconoutline.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ url('public/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ url('public/assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ url('public/assets/css/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{ url('public/assets/css/lightgallery-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ url('public/assets/css/magnific-popup.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('public/assets/css/style.css')}}">
    @yield('head')

</head>

<body class="about-us">

<nav class="navbar shadow-none border-bottom  navbar-expand-lg navbar-light fixed-top bg-white py-3">
    <div class="container">
        <a style="background-color:white;" class="navbar-brand font-weight-bold" href="{{ url('') }}" rel="tooltip"  data-placement="bottom" >
            @if(!empty($super_settings['logo']))
                <img src="{{ url('public') }}/uploads/{{$super_settings['logo']}}" class="navbar-brand-img h-100" style="max-height: {{$super_settings['frontend_logo_max_height'] ?? '50'}}px; width: 150px; " alt="...">
            @else
                <span class=" font-weight-bold">{{config('app.name')}}</span>
            @endif
        </a>

        <a href="{{ url('cart')}}" class=" btn btn-md btn-icon-only btn-info btn-rounded position-relative d-lg-none d-block">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>

            @if(!empty($cart))
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{count($cart)}}
                </span>
            @endif
        </a>


        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon mt-2">
<span class="navbar-toggler-bar bar1"></span>
<span class="navbar-toggler-bar bar2"></span>
<span class="navbar-toggler-bar bar3"></span>
</span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">

            <ul class="navbar-nav bg-transparent shadow-none navbar-nav-hover w-70  mx-auto">

                <li class="nav-item  ms-lg-auto mx-1">
                    <a  href="{{ url('') }}" class="ps-2 d-flex justify-content-between cursor-pointer align-items-center">
                        {{__('Home')}}

                    </a>
                </li>

                <li class="nav-item   ms-lg-auto mx-1">
                    <a class="  ps-2 d-flex justify-content-between cursor-pointer align-items-center me-2" href="{{ url('about') }}" >
                        {{__('About')}}

                    </a>
                </li>
                <li class="nav-item   ms-lg-auto mx-1">
                    <a class="  ps-2 d-flex justify-content-between cursor-pointer align-items-center me-2" href="{{ url('gallery') }}">
                        {{__('Gallery')}}

                    </a>
                </li>
                <li class="nav-item   ms-lg-auto mx-1">
                    <a class="  ps-2 d-flex justify-content-between cursor-pointer align-items-center me-2" href="{{ url('admission') }}">
                        {{__('How to Enrol')}}

                    </a>
                </li>
                <li class="nav-item  ms-lg-auto mx-1">
                    <a class="  ps-2 d-flex justify-content-between cursor-pointer align-items-center" href="{{ url('news') }}">

                        {{__('News')}}

                    </a>
                </li>
                <li class="nav-item  ms-lg-auto mx-1">
                    <a class="  ps-2 d-flex justify-content-between cursor-pointer align-items-center me-5" href="{{ url('contact') }}">

                        {{__('Contact Us')}}

                    </a>
                </li>
                <li class="nav-item ms-lg-auto mx-1">
                    <a href="{{ url('signup')}}" class="btn btn-sm  btn-dark-blue  btn-round mb-0 ms-auto d-lg-none d-block">{{__('Signup')}}</a>
                </li>



            </ul>
            <ul style="background-color:white;" class="navbar-nav  d-lg-block  d-none">

                <li class="nav-item">
                    @if(!empty($student))

                        <a href="{{ url('student/dashboard') }}" class="btn  btn-success text-white">{{__('Welcome')}} {{$student->first_name}}</a>

                    @else

                        <a href="{{ url('signup') }}" class="btn  btn-success text-white">{{__('Login / Sign Up ')}}</a>

                    @endif

                </li>
            </ul>
        </div>
    </div>
</nav>


@yield('content')

<!-- -------- START FOOTER 5 w/ DARK BACKGROUND ------- -->

<footer class="footer pt-5">
    <div class="container-homepage">
        <div class=" row">
            <div class="col-md-3 mb-4 ms-auto">
                <div>
                    <div class="footer-logo" >
                        <img src="{{ url('public/uploads/footerlogo.png') }}" style="max-height: {{$super_settings['frontend_logo_max_height'] ?? '50'}}px; width: 150px; ">
                    </div>
                    <div class="footer-description">
                        <p class="text-white">CAPA was born as a small enterprise with big dreams in Chandigarh in 2017. We aimed to introduce the bakery as a career choice for entrepreneur.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3 mb-4 me-auto ">
                <div class="footer-list">
                    <h3 style="border-bottom:4px solid #ffffff;width: 160px;" class="text-white">UseFull Links</h3>
                    <ul class="flex-column  nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="/home" target="_blank">
                                {{__('Home Page')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog" target="_blank">
                                {{__('Blog')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/course" target="_blank">
                                {{__('Courses')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/shop" target="_blank">
                                {{__('shop')}}
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-md-3 mb-4 me-auto">
                <div class="footer-list">
                    <h3 style="border-bottom:4px solid #ffffff;width: 160px;" class="text-white">Company Links</h3>
                    <ul class="flex-column  nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('privacy')}}" target="_blank">
                                {{__(' Privacy Policy')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('termsandconditions')}}" target="_blank">
                                {{__(' Terms of Service')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('cookie-policy')}}" target="_blank">
                                {{__(' Cookie Policy')}}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#myModal">
                                {{__(' Verify Certificate')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 mb-4 me-auto">
                <div class="footer-list">
                    <h3 style="border-bottom:4px solid #ffffff;width: 160px;" class="text-white">Contact Us</h3>
                    <ul class="flex-column  nav contact-list">
                        <li class="nav-item">
                            <i class="fa fa-location-arrow"></i>
                            <p class="pl-3">CAPA Chandigarh - Quite Office No. 1, First Floor, ( Flower Market, Opposite Khukhrain Bhawan) Sector 35-A Chandigarh!</p>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tel:+18555008999" target="_blank">
                                <i class="fa fa-phone"></i>
                                <p class="pl-3"><span>Phone: </span>+91 79732-45822</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <i class="fa fa-envelope"></i>
                                <p class="pl-3"><span>Email: </span> cakeuncle.com@gmail.com</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style=" border-top: 1px solid white;">
        <div class="container-homepage">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-icon">
                        <ul class="d-flex my-4 " style="color: #06346e">
                            <li class="mx-2"><a href="https://www.facebook.com/cakeuncleindia"><i class="fa fa-facebook mr-2 favicon"></i></a></li>
                            <li class="mx-2"><a href="https://www.instagram.com/cakeuncle/"><i class="fa fa-instagram mr-2 favicon"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-end ">
                        <p class="my-4 ms-3 text-sm text-white">
                            All rights reserved. Copyright © <script>
                                document.write(new Date().getFullYear())
                            </script>  by Capa College
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
 
 <!-- -----------  Verify Certificate modal -------------- -->

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Verify Certificate</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form action="{{ url('verifycertificate') }}" method="POST">
      <!-- Modal body -->
      @csrf
      <div class="modal-body">
        <div class="form-group">
            <label>Certificate Number</label>
            <input type="text" name="id" class="form-control border-0" required>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn  btn-success text-white">Verify</button>
      </div>
      </form>

    </div>
  </div>
</div>

    <!-- ------------- End Modal ------------- -->


<script src="{{ url('public') }}/js/app.js?v=94"></script>
 <!-- Vendors JS -->
    <script src="{{ url('public/assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
    <script src="{{ url('public/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ url('public/assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{ url('public/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('public/assets/js/countdown.min.js') }}"></script>
    <script src="{{ url('public/assets/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ url('public/assets/js/lightgallery.min.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('public/assets/js/ajax.js') }}"></script>
    <script src="{{ url('public/assets/js/jquery.validate.min.js') }}"></script>

    <!-- Activation JS -->
    <script src="{{ url('public/assets/js/main.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
@yield('script')
<script type="text/javascript">
     $('.moreless-button').click(function() {
      $('.moretext').slideToggle();
      if ($('.moreless-button').text() == "Read more") {
        $(this).text("Read less")
      } else {
        $(this).text("Read more")
      }
    });
</script>
</body>

</html>
