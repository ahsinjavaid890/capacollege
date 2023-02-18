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
    <section class="py-6 bg-gray-100 team_member">
        <div class="testimonial-active-two my-0 mx-auto" >
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12 text-center">
                        <h1 class="fw-bolder display-5 text-center mt-2 mb-0">{{__('Team Member')}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="member-image cell-left">
                                    <img src="{{ url('public/img/niharika.jpeg') }}" class="img-fluid border-radius-lg">
                                </div>
                                <div class="member-name">
                                    <div class="testimonial-name"><span class="text-gradient text-warning text-uppercase text-xs font-weight-bold my-2">Co Founder</span>
                                        <p href="javascript:void(0)" class="text-darker card-title h5 d-block">
                                            Niharika Rajput
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="member-image cell-left">
                                    <img src="{{ url('public/img/chitaniya.jpeg') }}" class="img-fluid border-radius-lg">
                                </div>
                                <div class="member-name">
                                    <div class="testimonial-name"><span class="text-gradient text-warning text-uppercase text-xs font-weight-bold my-2">Co Founder</span>
                                        <p href="javascript:void(0)" class="text-darker card-title h5 d-block">
                                            Chaitanya Rajput
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="member-image cell-left">
                                    <img src="{{ url('public/img/jaspreet.jpeg') }}" class="img-fluid border-radius-lg">
                                </div>
                                <div class="member-name">
                                    <div class="testimonial-name"><span class="text-gradient text-warning text-uppercase text-xs font-weight-bold my-2">Executive Chef</span>
                                        <p href="javascript:void(0)" class="text-darker card-title h5 d-block">
                                            Ms. Jaspreet Kaur
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
