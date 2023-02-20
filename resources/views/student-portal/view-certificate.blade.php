@extends('layouts.student-portal')
@section('title',__('Certificate'))

@section('content')

<style type="text/css">
    .certificate:after{
        background-image: url('{{ url('public/img/favicon_icon.png') }}');
    } 
</style>
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
    <div class="row">
        <div class="col-md-12 mb-3">
<<<<<<< Updated upstream
            <div class="card certificate-card">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-12">
                            <div  class="logo_text d-flex certificate justify-content-center">
                                <img style="width: 60px;height: 60px;" src="{{ url('public') }}/uploads/{{$super_settings['favicon']}}" width="100px">
                                <h2>Cake Uncle Academy of Pastry Arts</h2>
                            </div>
                            <div class="certificate-heading text-center">
                                @if($certificate->type == 'appriciation')
                                <h2>Appreciation Certificate</h2>
                                @else
                                <h2>{{ $certificate->title }}</h2>
                                @endif
                            </div>
                            <div class="certificate-description text-center mt-4">
                                <p>To Whom It May Concern <br> This is to certify that <br><span style="font-family: monospace;">@if(!empty( $certificate_received->student_id))
=======
            <div class="certificate-container">
                <div class="certificate" >
                    <div class="water-mark-overlay"></div>
                    <div class="certificate-header">
                        <img src="{{ url('public') }}/uploads/{{$super_settings['favicon']}}" class="logo" alt="">
                    </div>
                    <div class="certificate-body">
                       
                        <p class="certificate-title"><strong>Cake Uncle Academy of Pastry Arts</strong></p>
                        <h1>@if($certificate->type == 'appriciation')Appreciation Certificate @else{{ $certificate->title }} @endif
                        <p class="student-name">
                            @if(!empty( $certificate_received->student_id))
>>>>>>> Stashed changes
                                @if(!empty($students[ $certificate_received->student_id]))
                                    @if(isset($students[ $certificate_received->student_id]))
                                        {{$students[ $certificate_received->student_id]->first_name}}  {{$students[ $certificate_received->student_id]->last_name}}
                                    @endif
                                @endif
<<<<<<< Updated upstream
                            @endif</span>
                            <br>was is the employment of our organization <br> Cakeuncle Academy of pastry Arts <br> and his employment particulars are as under: </p>
                            @if($certificate->type == 'appriciation')
                            <p class="employe_des">
                                <span>Certificate of :</span>Appreciation Certificate
                                </p>
                            @else
                            <p class="employe_des">
                                <span>Certificate of :</span>@if(!empty( $certificate->course_id))
=======
                            @endif
                        </p>
                        <div class="certificate-content">
                            <p class="topic-title" style="font-size: 32px;">
                                was is the employment of our organization <br> Cakeuncle Academy of pastry Arts <br> and his employment particulars are as under: 
                            </p>
                            <div class="text-center">
                                 @if($certificate->type == 'appriciation')
                                    <p class="topic-description" style="font-size: 32px;">
                                        <span>Certificate of :</span>Appreciation Certificate
                                        </p>
                                    @else
                                    <p class="topic-description" style="font-size: 32px;">
                                        <span>Certificate of :</span>@if(!empty( $certificate->course_id))
>>>>>>> Stashed changes

                                @if(!empty($courses[ $certificate->course_id]))
                                    @if(isset($courses[ $certificate->course_id]))
                                        {{$courses[ $certificate->course_id]->name}}
                                    @endif
                                @endif

                                @endif<br>
                                        </p>
                                    @endif

<<<<<<< Updated upstream
                        @endif<br>
                                </p>
                            @endif


                            
                            </div>
                            <div class="d-flex justify-content-around">
                                <div class="p-2"><div class="certificate-date">
                                        <p>Issue Date: 16/Dec/2022</p>
                                        <p>Place: Chandigarh</p>
                                    </div></div>
                                <div class="p-2"><div class="certificate-manager">
                                        <p><span>Jaspreet Kaur</span><br>Manager-HR</p>
                                    </div></div>
                                <div class="p-2"><div class="certificate-sign">
                                        <p><br><span>Signature</span></p>
                                    </div></div>
=======
                            </div>
                        </div>
                        <div class="certificate-footer text-muted">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="text-justify">Place: <span style="text-decoration: underline;">Chandigarh</span></p>
                                    <p class="text-justify">Issue Date: <span style="text-decoration: underline;">16/Dec/2022</span></p>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                Jaspreet Kaur : <span style="text-decoration: underline;"> Manager-HR</span>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                Signature :_____________
                                            </p>
                                        </div>
                                    </div>
                                </div>
>>>>>>> Stashed changes
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection