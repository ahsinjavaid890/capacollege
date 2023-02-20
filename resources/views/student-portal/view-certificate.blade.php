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
                                @if(!empty($students[ $certificate_received->student_id]))
                                    @if(isset($students[ $certificate_received->student_id]))
                                        {{$students[ $certificate_received->student_id]->first_name}}  {{$students[ $certificate_received->student_id]->last_name}}
                                    @endif
                                @endif
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

                                @if(!empty($courses[ $certificate->course_id]))
                                    @if(isset($courses[ $certificate->course_id]))
                                        {{$courses[ $certificate->course_id]->name}}
                                    @endif
                                @endif

                                @endif<br>
                                        </p>
                                    @endif

                            </div>
                        </div>
                        <div class="certificate-footer text-muted">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="text-justify">Place: <span style="text-decoration: underline;">Chandigarh</span></p>
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
                                                Issue Date: 16/Dec/2022
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p class="text-end"> Signature<span style="text-decoration: underline;">:_____________</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection