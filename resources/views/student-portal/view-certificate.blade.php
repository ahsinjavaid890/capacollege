@extends('layouts.student-portal')
@section('title',__('Certificate'))

@section('content')


    <div class=" row mb-2 d-print-none">
        <div class="col">
            <div class="d-flex">
                
                <h5 class="  fw-bolder">
                {{__('Certificates')}} /<span class="text-secondary">
                          {{__('My Certificate')}}
                    </span>
            </h5>
                <a href="javascript:void(0)" style="margin-left: 10px;" onclick="window.print()" target="_blank">
                    <button type="button" class="btn btn-success">
                        <span class="btn-inner--icon"><i class="fas fa-print"></i> Print Certificate</span>
                    </button>
                </a>
            </div>
            
            <p class="text-muted">{{__('Print and share your certificate')}}</p>

        </div>

    </div>

    <div class=" col-lg-8 col-12 mx-auto mt-5 me-4 d-print-none">
        <ul class="flex-row text-center mt-6 nav ">
            @if (!empty($student->facebook))
                <li class="nav-item ">
                    <a class="nav-link " href="{{$student->facebook}}" target="_blank">
                        <button type="button" class="btn rounded-circle bg-info-alt btn-facebook btn-icon-only">
                            <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                        </button>
                    </a>
                </li>

            @endif

            @if (!empty($student->linkedin))
                <li class="nav-item">
                    <a class="nav-link " href="{{$student->linkedin}}" target="_blank">
                        <button type="button" class="btn rounded-circle bg-info btn-linkedin btn-icon-only">
                            <span class="btn-inner--icon"><i class="fab fa-linkedin text-white"></i></span>
                        </button>
                    </a>
                </li>

            @endif

            @if (!empty($student->twitter))
                <li class="nav-item">
                    <a class="nav-link " href="{{$student->twitter}}" target="_blank">
                        <button type="button" class="btn rounded-circle btn-twitter btn-icon-only">
                            <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
                        </button>
                    </a>
                </li>

            @endif
            <li class="nav-item">
                
            </li>


        </ul>

    </div>


    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card certificate-card">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-12">
                            <div  class="logo_text d-flex certificate">
                                <img style="width: 60px;height: 60px;" src="{{ url('public') }}/uploads/{{$super_settings['favicon']}}" width="100px">
                                <h2>Cake Uncle Academy of Pastry Arts</h2>
                            </div>
                            <div class="certificate-heading text-center">
                                <h2>Certificate</h2>
                                <p>Of </p>
                            </div>
                            <div class="certificate-description text-center mt-4">
                                <p>To Whom It May Concern <br> This is to certify that <br>@if(!empty( $certificate_received->student_id))
                                @if(!empty($students[ $certificate_received->student_id]))
                                    @if(isset($students[ $certificate_received->student_id]))
                                        {{$students[ $certificate_received->student_id]->first_name}}  {{$students[ $certificate_received->student_id]->last_name}}
                                    @endif
                                @endif
                            @endif
                            <br>was is the employment of our organization <br> Cakeuncle Academy of pastry Arts <br> and his employment particulars are as under: </p>
                            <p class="employe_des">
                                <br>
                                <span>Certificate of :</span>@if(!empty( $certificate->course_id))

                        @if(!empty($courses[ $certificate->course_id]))
                            @if(isset($courses[ $certificate->course_id]))
                                {{$courses[ $certificate->course_id]->name}}
                            @endif
                        @endif

                        @endif<br>
                                </p>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="certificate-date">
                                        <p>Date: 16/Dec/2022</p>
                                        <p>Place: Chandigarh</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="certificate-manager">
                                        <p><span>Jaspreet Kaur</span><br>Manager-HR</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="certificate-sign">
                                        <p><br><span>Signature</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection