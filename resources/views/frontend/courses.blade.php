@extends('frontend.layout')
@section('title','Courses')
@section('content')
    <section class="section section-lg bg-white line-bottom-soft mt-7 ">
        <div class="container">
            <div class="row mb-10">
                <div class="col-md-12 ">
                    <div class="row mt-6">
                        <!-- Main content START -->
                        <div class="col-12">
                            <!-- Course Grid START -->
                            <div class="row g-4 mx-auto">
                                <!-- Card item START -->
                                @foreach($courses as $course)
                                    @if($course->status !='Draft')
                                        <div class="col-md-4">
                                            <div class="card shadow  h-100">
                                                <!-- Image -->
                                                @if(empty($course->image))
                                                    <img src="{{ url('public') }}/img/placeholder.png"
                                                         class="w-100 border-radius-lg shadow-sm ">
                                                @else
                                                    <img src="{{ url('public') }}/uploads/{{$course->image}}" class="w-100  card-img-top shadow-sm ">
                                            @endif
                                            <!-- Card body -->
                                                <div class="card-body pb-0">
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
                                                    <!-- Title -->
                                                    <h5 class="card-title"><a href="{{ url('course')}}/{{$course->slug}}">{{$course->name}}</a></h5>
                                                    <!-- Rating star -->


                                                </div>
                                                <!-- Card footer -->
                                            </div>
                                        </div>

                                    @endif



                                @endforeach

                            </div>

                        </div>
                        <!-- Main content END -->
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection
