@extends('frontend.layout')
@section('title','Capa College')
@section('content') 
    <header class="py-5">
        <div class="page-header bg-white min-vh-70 ">
            <div class="container">
                <div class="row">
                    <div class="mb-7 col-lg-6 col-md-6 d-flex text-md-start flex-column">
                        <h4 class="fw-bolder text-start text-purple  mt-8 mb-0">
                            @if (!empty($landingpage))
                                {{$landingpage->hero_subtitle}}
                            @endif
                        </h4>
                        <h1 class="fw-bolder display-5  text-start mt-4 mb-0">
                            @if (!empty($landingpage))
                                {{$landingpage->hero_title}}
                            @endif
                        </h1>
                        <p class="text-start lead  mt-3 mb-4">
                            <div class="article">
                                <p>Welcome to the world of sweetness, where flour, sugar, and creativity come together in harmony! At CAPA - The Cakeuncle Academy of Pastry Arts, we take baking, pastry, and cake-making to new heights From the bustling streets of India to the distant shores of the world, we welcome students from all corners of the globe to experience the sweetest education in the land. Our "Advance Diploma in Patisserie" is not just a piece of paper, it's a passport to a world of Pastry delight, approved by the Government of India and offering a comprehensive education of international standards. 
                                </p>
                                <p class="moretext">
                                   With an experience of 15 years in the field providing international levels skills and knowledge for every part, personal attention and assistance to everyone all this at very economic rates, and accommodation benefits for international students So if looking to turn your passion for baking into a thriving career, look no further than CAPA ! Join us today and let us help you create a sweet future for yourself! 
                                </p>
                                <a class="moreless-button" href="javascript:void(0)">Read more</a>
                            </div>
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <a style="width:100%;" href="{{ url('login')}}" type="button" class="mt-2 btn btn-success text-white">{{__('Indian Students')}}</a>
                            </div>
                            <div class="col-md-6">
                                <a style="width:100%;" href="{{ url('signup')}}" type="button" class="mt-2 btn btn-success text-white">{{__('International Students')}}</a>
                            </div>
                        </div>                       
                    </div>
                    <div class="col-lg-6 col-md-6 ps-10 pe-0  d-flex">
                        <div class="row ">
                            <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100 ">
                                <div class="position-relative">
                                    @if (!empty($landingpage))
                                        <img src="{{ url('public') }}/uploads/{{$landingpage->background_image}}" alt="" class="img-fluid  rounded-3">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <section style="background-color: white; ">
        <div class="course-slider my-0 mx-auto" >
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12 text-center">
                        <h1 class="fw-bolder display-5 text-center mt-2 mb-0">{{__('Check our new courses')}}</h1>
                    </div>
                </div>
                <div id="course-slider" class="owl-carousel">
                    @foreach($courses as $course)
                    @if($course->status !='Draft')
                    <div class="testimonial-item equal-height style-6" style="height: 254px;">
                        <div class="card card-plain card-blog">
                            <div class="card-image border-radius-lg position-relative zoom-effect-container"> 
                                <a href="javascript:;" class="image-card">
                                    @if(empty($course->image))
                                        <img src="{{ url('public') }}/img/placeholder.jpeg"
                                             class="w-100 border-radius-lg move-on-hover shadow ">
                                    @else
                                        <img src="{{ url('public') }}/uploads/{{$course->image}}" class="w-100 border-radius-lg move-on-hover shadow ">
                                    @endif

                                </a>
                            </div>
                            <div class="card-body px-2">
                                <h5>
                                    <a href="{{ url('course')}}/{{$course->slug}}" class="text-dark font-weight-bold">{{$course->name}}</a>
                                </h5>
                                <div class=" pb-0">
                                    <!-- Badge and favorite -->
                                    <div class="d-flex justify-content-between mb-2">
                                        @if(!empty($categories[$course->category_id]))
                                            <span class="badge bg-purple-light">
                                         @if(isset($categories[$course->category_id]))
                                                    {{$categories[$course->category_id]->name}}
                                                @endif
                                            </span>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4 background-img why_choose" style=" background-image: url('{{ url('public/images/franchise.png')  }}');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h3 style="text-align: center;color: white; font-size: 33px;">Why Choose Us ? </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="custom-list">
                              <li>Career Consultancy Free</li>
                              <li>Business Guidance</li>
                              <li>Hands on practice for each student</li>
                              <li>Tools kit provided free to every student</li>
                              <li>Dress provided free to every student</li>
                              <li>Extra classes to students if required</li>
                              <li>Emi options to all the students</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="custom-list">
                              
                              <li>Cakeuncle Franchise free to our student for first year to help getting business online</li>
                              <li>Digital Marketing Classes provided to students for thier startups</li>
                              <li>One year membership free to all our students for doubts or query related to the course.</li>
                              <li>Check your certificate online here anytime</li>
                              <li>We give you access to all our recipes online</li>
                              <li>That's it buddy what all you need 👍😊</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-6"style="background-color: #f3dfe8;">
        <div class="testimonial-active-two my-0 mx-auto" >
            <div class="container">
                <div class="viewall_btn text-end">
                    <a href="{{ url('testimonial') }}" class="btn btn-blue">View All</a>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-12 text-center">
                        <h1 class="fw-bolder display-5 text-center mt-2 mb-0">{{__('Testimonials')}}</h1>
                    </div>
                </div>
                <div id="testimonial-slider" class="owl-carousel">
                @foreach(DB::table('testimonials')->get() as $r)
                    <div class="testimonial-item equal-height style-6" style="height: 254px;">
                        <div class="testimonial-two text-center">
                            <div class="testimonial-two_quote">
                                <svg width="30" height="30" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.203 16c2.034 0 3.594-1.7 3.594-3.752 0-2.124-1.356-3.61-3.255-3.61-.339 0-.813.07-.881.07C3.864 6.442 5.831 3.611 8 2.124L5.492 0C2.372 2.336 0 6.3 0 10.62 0 14.087 1.966 16 4.203 16zm11 0c2.034 0 3.661-1.7 3.661-3.752 0-2.124-1.423-3.61-3.322-3.61-.339 0-.813.07-.881.07.271-2.266 2.17-5.097 4.339-6.584L16.492 0C13.372 2.336 11 6.3 11 10.62c0 3.468 1.966 5.38 4.203 5.38z" fill="currentColor" fill-rule="nonzero"></path>
                                </svg>
                            </div>
                            <p class="testimonial-two_text">
                                {{ Str::limit($r->testimonial , 150); }}
                            </p>
                            <div class="testimonial-two_image">
                                <img width="56" height="56" src="{{ url('public/images') }}/{{ $r->image }}" alt="Author">
                            </div>
                            <span class="testimonial-two_name">
                                {{ $r->name }}
                            </span>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="py-6 bg-gray-100 studentprenuer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-bolder display-5 text-center mt-2 mb-0">{{__('Student Prenuer')}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="student-slider" class="owl-carousel">

                            @foreach($studentprenuer as $studentprenuers)
                        <div class="testimonial-item equal-height style-6" style="height: 254px;">
                            <div class="testimonial-image cell-left">
                                @if(empty($studentprenuers->image))
                                    <img src="{{ url('public') }}/img/placeholder.jpeg"
                                         class="w-100 border-radius-lg move-on-hover shadow mt-3">
                                @else
                                    <img src="{{ url('public/images') }}/{{ $studentprenuers->image }}" class="img-fluid border-radius-lg">
                                @endif
                            </div>
                            <div class="cell-right">
                                    <div class="testimonial-name"><span class="text-gradient text-warning text-uppercase text-xs font-weight-bold my-2">{{$studentprenuers->bakery_name}}</span>
                                        <p href="javascript:void(0)" class="text-darker card-title h5 d-block">
                                            {{$studentprenuers->name}}
                                        </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="testimonial-item equal-height style-6" style="height: 254px;">
                            <div class="testimonial-image cell-left">
                                <img src="{{ url('public') }}/img/placeholder.jpeg" class="w-100 border-radius-lg move-on-hover shadow mt-3">
                                
                            </div>
                            <div class="cell-right">
                                    <!-- <div class="testimonial-name"><span class="text-gradient text-warning text-uppercase text-xs font-weight-bold my-2">{{$studentprenuers->bakery_name}}</span> -->
                                        <p href="javascript:void(0)" class="text-darker card-title h5 d-block">
                                            Next is You 
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        if (document.getElementById('typed')) {
            var typed = new Typed("#typed", {
                stringsElement: '#typed-strings',
                typeSpeed: 70,
                backSpeed: 50,
                backDelay: 200,
                startDelay: 500,
                loop: true
            });
        }
    </script>

    <script>

        $(function () {
            "use strict";

            flatpickr("#start_date", {

                dateFormat: "Y-m-d",
            });

            flatpickr("#end_date", {

                dateFormat: "Y-m-d",
            });

            tinymce.init({
                selector: '#description',

                plugins: 'table,code',

            });

        });

    </script>
    <script type="text/javascript">
        const settings = {
          loop: true,

          speed: 700,

          pagination: {
            el: ".swiper-pagination",
            type: "bullets"
          },

          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
          }
        };

        const swiper = new Swiper(".mySwiper", settings);

    </script>
    <script type="text/javascript">
            $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,6],
        itemsDesktopSmall:[980,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:true,
        navigationText:["<",">"],
        autoPlay:true
    });
});
    </script>
    <script type="text/javascript">
            $(document).ready(function(){
    $("#student-slider").owlCarousel({
        items:6,
        itemsDesktop:[1000,6],
        itemsDesktopSmall:[980,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:true,
        navigationText:["<",">"],
        autoPlay:true
    });
});
    </script>
    <script type="text/javascript">
            $(document).ready(function(){
    $("#course-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,6],
        itemsDesktopSmall:[980,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:true,
        navigationText:["<",">"],
        autoPlay:true
    });
});
    </script>
@endsection
