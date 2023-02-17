@extends('frontend.layout')
@section('title','For Home Bakers')
@section('content')

    <section class="">
        <div class="bg-dark-alt position-relative">
            <div class="pb-lg-6 pb-5 pt-7 postion-relative z-index-2">
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto text-center mt-4">
                            <h2 class="text-white">
                                For Home Bakers
                            </h2>
                        <p class="text-muted">
                           For Home Bakers
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section class="py-3 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="fw-bolder display-5 text-center mt-2 mb-0">{{__('Check our new courses')}}</h1>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($courses as $course)
                    @if($course->status !='Draft')
                        <div class="col-lg-4 col-sm-6">
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

                                        <!-- Rating star -->
                                        <div class="row mb-0">
                                            <div class="col">
                                                {!! renderRating($course->id) !!}
                                            </div>
                                            <div class="col text-end me-2">
                                                {!! getCourseRating($course->id) !!}.0/5.0

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class=" pt-0 pb-3 px-2">

                                    <div class="d-flex justify-content-between">
                                        <span class="h5 fw-bolder mb-0">INR {{$course->price}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>

        </div>

    </section>
@endsection
