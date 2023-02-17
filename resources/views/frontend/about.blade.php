@extends('frontend.layout')
@section('title','About Us')
@section('content')
<style type="text/css">

</style>
    <section class="">
        <div class="bg-dark-alt position-relative">
            <div class="pb-lg-6 pb-5 pt-7 postion-relative z-index-2">
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto text-center mt-4">
                            <h2 class="text-white">
                                About Us
                            </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-padding-03 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="section-title-10 justify-content-start text-start align-items-start">
                        <span class="section-title-10__subtitle">About Capa</span>
                        <h1 class="section-title-10__title">We speak the good food language.</h1>
                        <p class="section-title-10__text text-justify">Welcome to the world of sweetness, where flour, sugar, and creativity come together in harmony! At CAPA - The Cakeuncle Academy of Pastry Arts, we take baking, pastry, and cake-making to new heights From the bustling streets of India to the distant shores of the world, we welcome students from all corners of the globe to experience the sweetest education in the land. Our "Advance Diploma in Patisserie" is not just a piece of paper, it's a passport to a world of Pastry delight, approved by the Government of India and offering a comprehensive education of international standards.</p>
                        <p class="section-title-10__text text-justify">With an experience of 15 years in the field providing international levels skills and knowledge for every part, personal attention and assistance to everyone all this at very economic rates, and accommodation benefits for international students So if looking to turn your passion for baking into a thriving career, look no further than CAPA ! Join us today and let us help you create a sweet future for yourself!</p>
                        <div class="text-start buttons mb-4">
                            <a style="width: 100%;" href="{{ url('signup') }}" type="button" class="btn  btn-success text-white mt-4">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="aboutus-image">
                        <img src="{{ url('public/assets/images/about/about.jpg')}}" alt="About-Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-6"style="background-color: #f3dfe8;">
        <div class="testimonial-active-two my-0 mx-auto" >
            <div class="viewall_btn text-end">
                <a href="{{ url('testimonial') }}" class="btn btn-blue">View All</a>
            </div>
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12 text-center">
                        <h1 class="fw-bolder display-5 text-center mt-2 mb-0">{{__('Testimonials')}}</h1>
                    </div>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach(DB::table('testimonials')->get() as $r)
                        <div class="swiper-slide">
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
                        <!-- Testimonial Item End -->
                        <!-- swiper-slide end-->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
