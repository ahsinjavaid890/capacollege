@extends('layouts.admin-portal')
@section('title',__('Landing Page Text Editor'))


@section('content')


    <h5 class="mb-3">{{__('Landing Page Text Editor')}}</h5>

    <div class="btn-group">


        <button type="button" class="btn ms-auto btn-dark btn-icon-only " data-bs-toggle="offcanvas" data-bs-target="#hero" aria-controls="offcanvasRight">
        <span class="btn-inner--icon">
<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" mb-2 feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
        </span>
        </button>
        <a href="{{ url('home')}}" target="_blank" type="button" class="btn btn-success btn-icon-only">
            <span class="btn-inner--icon">
<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
            </span>
        </a>


    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="hero" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">{{__('Hero Section ')}}</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <form action="{{ url('save-hero-section')}}" method="post" enctype="multipart/form-data">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="offcanvas-body">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{__('Title')}}</label>
                    <input type="text" name="hero_title" class="form-control" id="title"  value="{{$landingpage->hero_title ?? old('hero_title') ?? ''}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{__('Subtitle')}}</label>
                    <input type="text" name="hero_subtitle" value="{{$landingpage->hero_subtitle ?? old('hero_subtitle') ?? ''}}" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">{{__('Paragraph')}}</label>
                    <textarea class="form-control" name="hero_paragraph" id="" rows="3">{{$landingpage->hero_paragraph ?? old('hero_paragraph') ?? ''}}</textarea>
                </div>
                <div class="mb-3">
                    <div>
                        <label  for="photo_file" class="form-label mt-4s">{{__('Background Image')}}</label>
                        <input class="form-control" name="background_image" type="file" id="logo_file">
                    </div>
                </div>
                @csrf

                @if (!empty($landingpage))
                    <input type="hidden" name="id" value="{{$landingpage->id}}">
                @endif
                <div class="button-row text-left mt-4">
                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                </div>

            </div>
        </form>
    </div>

    <header class="">

        <div class="page-header bg-white min-vh-70 ">

            <div class="container">
                <div class="row ">

                    <div class="mb-7 col-lg-6 col-md-6 d-flex justify-content-center text-md-start flex-column">
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

                            @if (!empty($landingpage))
                                {!!clean($landingpage->hero_paragraph) !!}
                            @endif

                        </p>
                        <div class=" text-start buttons mb-4">
                            <a href="{{ url('course')}}" type="button" class="btn  btn-dark-blue text-white mt-4">{{__('Buy Courses')}}</a>
                            <a href="{{ url('signup')}}" type="button" class="btn  btn-success text-white mt-4">{{__('Get Started')}}</a>

                        </div>
                        <p>{{__('Newly enrolled students')}}</p>

                        <div class="text-start d-flex avatar-group mt-2">

                            @foreach($students as $student)

                                @if(!empty($student->photo))
                                    <a  class="avatar avatar-sm rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="{{$student->first_name}}">
                                        <img src="{{ url('public') }}/uploads/{{$student->photo}}"
                                             alt="team1">
                                    </a>

                                @else
                                    <div class="avatar avatar-sm rounded-circle bg-purple-light ">
                                        <p class="mt-3 text-info"><span>{{$student->first_name[0]}}{{$student->last_name[0]}}</span>
                                        </p>
                                    </div>


                                @endif


                            @endforeach

                            <span class="fw-bolder"> {{__('+ more')}}</span>


                        </div>


                    </div>

                    <div class="col-lg-6 col-md-6 ps-5 pe-0  d-flex">

                        <div class="row ">

                            <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100">


                                <figure class=" position-absolute bottom-0 start-50 translate-middle-x  mb-0">
                                    <svg  width="650px" height="658px"  id="10015.io" viewBox="0 0 480 480"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#EBF3FF" >
                                        <path fill="fill-primary" d="M452.5,292.5Q440,345,401.5,382Q363,419,314,431.5Q265,444,212,449Q159,454,125,413Q91,372,57.5,332.5Q24,293,38.5,243.5Q53,194,63.5,143.5Q74,93,116.5,59.5Q159,26,212,30.5Q265,35,314,48.5Q363,62,391.5,104Q420,146,442.5,193Q465,240,452.5,292.5Z" />
                                    </svg>

                                </figure>

                                <div class="position-relative">
                                    @if (!empty($landingpage))
                                        <img src="{{ url('public') }}/uploads/{{$landingpage->background_image}}" alt="" class="img-fluid  rounded-3">
                                    @endif
                                </div>

                                <div class=" p-3 bg-success  border-radius-2xl d-inline-block rounded-4 shadow-lg position-absolute top-50 end-0 translate-middle-y mt-n7 z-index-1 d-none d-md-block" >
                                    <p class="text-white">{{__('Secret of my success')}}</p>
                                    <!-- Avatar group -->
                                    <div class="avatar-group d-flex">
                                        @foreach($students as $student)

                                            @if(!empty($student->photo))
                                                <a  class="avatar avatar-sm rounded-circle"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="{{$student->first_name}}">
                                                    <img src="{{ url('public') }}/uploads/{{$student->photo}}"
                                                         alt="team1">
                                                </a>

                                            @else
                                                <div class="avatar avatar-sm rounded-circle bg-purple-light ">
                                                    <p class="mt-3 text-info"><span>{{$student->first_name[0]}}{{$student->last_name[0]}}</span>
                                                    </p>
                                                </div>


                                            @endif


                                        @endforeach
                                    </div>
                                </div>

                                <div class="p-3 bg-info border-radius-2xl border-light shadow rounded-4 position-absolute bottom-0 start-0 z-index-9 d-none d-xl-block mb-5 ms-5">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Icon -->
                                        <span class="avatar  bg-info-light rounded-circle mx-auto">
                                            <i class="fas fa-paint-brush text-info text-center"></i>
                                        </span>
                                        <!-- Info -->
                                        <div class="text-start ms-3">
                                            <h6 class="mb-0 text-white">{{__('Congratulations')}} <span class="ms-4"></span></h6>
                                            <p class="mb-0 small text-white">{{__('You are enrolled')}}</p>

                                        </div>
                                    </div>
                                </div>


                            </div>




                        </div>
                    </div>





                </div>
            </div>
        </div>
    </header>











    <div class="btn-group mt-2">
        <button type="button" class="btn ms-auto btn-dark btn-icon-only " data-bs-toggle="offcanvas" data-bs-target="#feature1" aria-controls="offcanvasRight">
        <span class="btn-inner--icon">
<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" mb-2 feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
        </span>
        </button>
        <a href="/home" target="_blank" type="button"  class="btn btn-success btn-icon-only">
            <span class="btn-inner--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>
                </svg>
            </span>
        </a>

    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="feature1" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5>{{__('Testimonial section of two students')}}</h5>

            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>


        <div class="offcanvas-body">

            <form action="{{ url('save-testimonial-section') }}" method="post" enctype="multipart/form-data">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Sidecard Title')}}</label>
                        <input type="text" name="testimonial_sidecard" value="{{$landingpage->testimonial_sidecard ?? old('testimonial_sidecard') ?? ''}}" class="form-control" id="title" >
                    </div>

                    <h5 class="mt-4 mb-3">{{__('Student One')}}</h5>

                    <div class="mb-3">
                        <div>
                            <label  for="photo_file" class="form-label ">{{__('Student Image ')}}</label>
                            <input class="form-control" name="testimonial1_image" type="file" id="image1">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Student name')}}</label>
                        <input type="text" name="testimonial1_student_name" value="{{$landingpage->testimonial1_student_name ?? old('testimonial1_student_name') ?? ''}}"  class="form-control" id="title" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Student occupation')}}</label>
                        <input type="text" name="testimonial1_occupation" value="{{$landingpage->testimonial1_occupation ?? old('testimonial1_occupation') ?? ''}}"  class="form-control" id="title" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">{{__('Student Testimonial')}}</label>
                        <textarea class="form-control" name="testimonial1_paragraph" id="paragraph" rows="8">{{$landingpage->testimonial1_paragraph ?? old('testimonial1_paragraph') ?? ''}}</textarea>
                    </div>

                    <h5 class="mt-4 mb-3">{{__('Student Two')}}</h5>

                    <div class="mb-3">
                        <div>
                            <label  for="photo_file" class="form-label ">{{__('Student Image ')}}</label>
                            <input class="form-control" name="testimonial2_image" type="file" id="image1">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Student name')}}</label>
                        <input type="text" name="testimonial2_student_name" value="{{$landingpage->testimonial2_student_name ?? old('testimonial2_student_name') ?? ''}}"  class="form-control" id="title" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">{{__('Student occupation')}}</label>
                        <input type="text" name="testimonial2_occupation" value="{{$landingpage->testimonial2_occupation ?? old('testimonial2_occupation') ?? ''}}"  class="form-control" id="title" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">{{__('Student Testimonial')}}</label>
                        <textarea class="form-control" name="testimonial2_paragraph" id="paragraph" rows="8">{{$landingpage->testimonial2_paragraph ?? old('testimonial2_paragraph') ?? ''}}</textarea>
                    </div>

                    @csrf
                    @if (!empty($landingpage))
                        <input type="hidden" name="id" value="{{$landingpage->id}}">
                    @endif

                    <div class="button-row text-left mt-4">
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                    </div>

                </div>
            </form>

        </div>

    </div>


    <section class="py-7 position-relative">


        <div class=" ">

            <div class="row  ">
                <div class="col-md-4">
                    <div class="card bg-info-light h-100 ">
                        <div class="card-body  text-center mt-8">
                            <h2 class="mb-5">
                                @if (!empty($landingpage))
                                    {{$landingpage->testimonial_sidecard}}
                                @endif
                            </h2>
                        </div>
                    </div>

                </div>
                <div class="col-md-8">


                    <div id="carouselExampleTestimonials-11" class="carousel carousel-fade slide shadow-lg" data-bs-ride="carousel">
                        <ol class="carousel-indicators z-index-2">
                            <li data-bs-target="#carouselExampleTestimonials-11" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleTestimonials-11" data-bs-slide-to="1"></li>

                        </ol>
                        <div class="carousel-inner rounded-3">
                            <div class="carousel-item  h-100 bg-cover active" >
                                <div class="z-index-1 my-md-8 my-6 position-relative z-index-2">
                                    <div class="row h-100">


                                        <div class="col-xl-6 my-auto px-6">
                                            <h5 class="text-white font-weight-normal mb-3">
                                                @if (!empty($landingpage))
                                                    {!!clean($landingpage->testimonial1_paragraph) !!}
                                                @endif
                                            </h5>
                                            <p class="text-white font-weight-bold">
                                                @if (!empty($landingpage))
                                                    {{$landingpage->testimonial1_student_name}}
                                                @endif <span class="text-xs font-weight-normal">
                                                   @if (!empty($landingpage))
                                                        {{$landingpage->testimonial1_occupation}}
                                                    @endif
                                                </span></p>
                                        </div>
                                        <div class="col-xl-6 text-center my-auto px-7 mt-md-auto mt-4">
                                            <div class="avatar rounded-circle avatar-xxl position-relative border-avatar">
                                                @if(empty($landingpage->testimonial1_image))
                                                    <img src="{{ url('public') }}/img/user-avatar-placeholder.png"
                                                         class="w-100 border-radius-sm avatar-xxl shadow-sm">
                                                @else
                                                    <img src="{{ url('public') }}/uploads/{{$landingpage->testimonial1_image}}" class="w-100 border-radius-sm ">
                                                @endif
                                            </div>
                                            <h5 class="text-white"> @if (!empty($landingpage))
                                                    {{$landingpage->testimonial1_student_name}}
                                                @endif</h5>
                                        </div>
                                    </div>
                                </div>
                                <span class="mask bg-info opacity-10 z-index-0 rounded-3"></span>
                            </div>


                            <div class="carousel-item bg-cover  h-100">
                                <div class="z-index-1 my-md-8 my-6 position-relative z-index-2">
                                    <div class="row h-100">
                                        <div class="col-xl-6 my-auto px-6">
                                            <h5 class="text-white font-weight-normal mb-3">
                                                @if (!empty($landingpage))
                                                    {!! clean($landingpage->testimonial2_paragraph) !!}
                                                @endif
                                            </h5>
                                            <p class="text-white font-weight-bold">@if (!empty($landingpage))
                                                    {{$landingpage->testimonial2_student_name}}
                                                @endif <span class="text-xs font-weight-normal">
                                                    @if (!empty($landingpage))
                                                        {{$landingpage->testimonial2_occupation}}
                                                    @endif</span>
                                            </p>
                                        </div>

                                        <div class="col-xl-6 text-center my-auto px-7 mt-md-auto mt-4">
                                            <div class=" avatar rounded-circle avatar-xxl position-relative border-avatar ">
                                                @if(empty($landingpage->testimonial2_image))
                                                    <img src="{{ url('public') }}/img/user-avatar-placeholder.png"
                                                         class="avatar mb-3 avatar-xxl rounded-circle bg-purple-light  border-radius-md ">
                                                @else
                                                    <img src="{{ url('public') }}/uploads/{{$landingpage->testimonial2_image}}" class=" w-100 border-radius-sm rounder-circle ">
                                                @endif
                                            </div>
                                            <h5 class="text-white"> @if (!empty($landingpage))
                                                    {{$landingpage->testimonial2_student_name}}
                                                @endif</h5>
                                        </div>
                                    </div>
                                </div>
                                <span class="mask bg-indigo opacity-10 z-index-0 rounded-3"></span>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="position-absolute w-100 z-inde-1 ">

    </div>

    <div class="btn-group mt-2">
        <button type="button" class="btn ms-auto btn-dark btn-icon-only " data-bs-toggle="offcanvas" data-bs-target="#story2" aria-controls="offcanvasRight">
        <span class="btn-inner--icon">
<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" mb-2 feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
        </span>
        </button>
        <a href="/home" target="_blank" type="button" class="btn btn-success btn-icon-only">
            <span class="btn-inner--icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle>
                </svg>
            </span>
        </a>

    </div>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="story2" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">{{__('Story Section  ')}}</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <form action="{{ url('save-story2-section') }}" method="post" enctype="multipart/form-data">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <div>
                        <label  for="photo_file" class="form-label mt-4s">{{__('Image')}}</label>
                        <input class="form-control" name="story2_image" type="file" id="logo_file">
                    </div>
                </div>

                <div class="mb-3">
                    <label  class="form-label">{{__('Title')}}</label>
                    <input type="text" class="form-control" name="story2_title" value="{{$landingpage->story2_title ?? old('story2_title') ?? ''}}" id="storytitle">
                </div>
                <div class="mb-3">
                    <label  class="form-label">{{__('Paragraph')}}</label>
                    <textarea class="form-control" name="story2_paragrapgh" id="paragraph" rows="3">{{$landingpage->story2_paragrapgh ?? old('story2_paragrapgh') ?? ''}}</textarea>
                </div>

                @csrf
                @if (!empty($landingpage))
                    <input type="hidden" name="id" value="{{$landingpage->id}}">
                @endif

                <div class="button-row text-left mt-4">
                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                </div>

            </form>

        </div>
    </div>


    <section class="py-7 bg-gray-100 mt-5 overflow-hidden">

        <div class="container ">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class=" p-0 mx-3 mt-3 position-relative z-index-1">


                        <div class="d-block ">
                            @if (!empty($landingpage))
                                <img src="{{ url('public') }}/uploads/{{$landingpage->story2_image}}" alt="" class="img-fluid  rounded-3">
                            @endif

                        </div>
                        <div class="" style="background-image: url('{{ url('public') }}/img/feature.jpg');"></div>
                    </div>

                </div>

                <div class="col-md-5 m-auto">
                    <h3 class="text-dark fw-bolder">
                        @if (!empty($landingpage))
                            {{$landingpage->story2_title}}
                        @endif
                    </h3>
                    <p class="col-md-10 fw-light mt-4">
                        @if (!empty($landingpage))
                            {!! clean($landingpage->story2_paragrapgh) !!}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </section>


    <div class="btn-group mt-2">
        <button type="button" class="btn ms-auto btn-dark btn-icon-only " data-bs-toggle="offcanvas" data-bs-target="#calltoaction" aria-controls="offcanvasRight">
        <span class="btn-inner--icon">
<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class=" mb-2 feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
        </span>
        </button>
        <a href="/home" target="_blank" type="button" class="btn btn-success btn-icon-only">
            <span class="btn-inner--icon">

<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>

</span>
        </a>

    </div>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="calltoaction" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">{{__('Call to Action Section ')}}</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <form action="{{ url('save-calltoaction-section') }}" method="post" enctype="multipart/form-data">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="offcanvas-body">


                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{__('Subtitle')}}</label>
                    <input type="text" name="calltoaction_subtitle" value="{{$landingpage->calltoaction_subtitle ?? old('calltoaction_subtitle') ?? ''}}" class="form-control" id="title">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">{{__('Title')}}</label>
                    <input type="text" name="calltoaction_title" class="form-control" id="title"  value="{{$landingpage->calltoaction_title ?? old('calltoaction_title') ?? ''}}">
                </div>


                @csrf

                @if (!empty($landingpage))
                    <input type="hidden" name="id" value="{{$landingpage->id}}">
                @endif
                <div class="button-row text-left mt-4">
                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="submit" title="Next">{{__('Save')}}</button>
                </div>

            </div>
        </form>
    </div>

    <section class=" mb-1 mb-md-3 mb-lg-4 mt-5">
        <div class="bg-info-light rounded-3 overflow-hidden">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-5 offset-lg-1">
                    <div class="pt-5 pb-3 pb-md-5 px-4 px-lg-0  text-md-start">
                        <p class="lead mb-3">
                            @if (!empty($landingpage))
                                {{$landingpage->calltoaction_subtitle}}
                            @endif
                        </p>
                        <h3 class=" pb-3 pb-sm-4">@if (!empty($landingpage))
                                {{$landingpage->calltoaction_title}}
                            @endif
                        </h3>
                        <a href="/signup" class="btn btn-info">{{__('Get Started')}}</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 offset-xl-1">
                    <div class="position-relative d-flex flex-column align-items-center justify-content-center ">

                        <svg class="d-none d-md-block position-absolute top-50 start-0 translate-middle-y " width="868" height="868" style="min-width: 868px;" viewBox="0 0 868 868" fill="none" xmlns="http://www.w3.org/2000/svg"><circle opacity="0.15" cx="434" cy="434" r="434" fill="#6366F1"/></svg>

                    </div>
                </div>
            </div>
        </div>
    </section
@endsection

