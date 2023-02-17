@extends('layouts.admin-portal')
@section('title',__('Dashboard'))
@section('content')

    <div class="bg-dark-alt position-relative border-radius-xl">
        <div class="pb-lg-4  pt-5 ">

            <div class="row ms-2">
                <div class="col">
                    <h5 class="fw-bolder text-white">
                        {{__('Dashboard')}} /<span class="text-secondary">
                            {{__('Overview of your business')}}
                    </span>

                    </h5>
                    <p class="text-muted">{{__('The dashboard contains the important data to get a overview.')}}</p>
                </div>

                <div class="col text-end me-4">

                    <a href="javascript:" class="btn btn-icon-only btn-success"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-plus"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3"
                        aria-labelledby="dropdownMarketingCard">
                        <li><a class="dropdown-item border-radius-md fw-bolder"
                               href="{{ url('new-student')}}">{{__('Add Student')}}</a></li>

                        <li><a class="dropdown-item border-radius-md fw-bolder"
                               href="{{ url('create-course')}}">{{__('Add Course')}}</a>
                        </li>
                        <li><a class="dropdown-item border-radius-md fw-bolder"
                               href="{{ url('add-product')}}">{{__('Add eBook')}}</a>
                        </li>

                    </ul>
                    <a href="{{ url('admin-profile')}}" class="btn btn-icon-only bg-info-light"
                      >
                        <i class="fas fa-user text-info"></i>
                    </a>
                    <a href="{{ url('logout')}}" class="btn btn-icon-only bg-pink-light"
                       >
                        <i class="fas fa-sign-out-alt text-danger"></i>
                    </a>
                </div>


            </div>
        </div>

    </div>





    <div class="row mt-4">

        <div class="col-md-3 mb-4">
            <div class="card  ">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="mb-0 text-capitalize font-weight-bold ">{{__(' Total Students')}}</p>
                                <h5 class="font-weight-bolder   mt-4 ">
                                    {{$total_students}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class=" icon icon-shape bg-info-light rounded-circle  text-center">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather text-info-light feather-users mt-2">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card ">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="mb-0 text-capitalize font-weight-bold">{{__('Total Courses')}}</p><h5 class="font-weight-bolder mt-4">
                                    {{$total_courses}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class=" icon icon-shape bg-info-light  rounded-circle text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid text-info-light ms-auto mt-2 "><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="mb-0 text-capitalize font-weight-bold">{{__('Total Session')}}</p><h5 class="font-weight-bolder mt-4 ">
                                    {{$total_lessons}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class=" icon icon-shape bg-info-light rounded-circle text-center">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class=" text-info-light feather feather-hard-drive mt-2">
                                    <line x1="22" y1="12" x2="2" y2="12"></line>
                                    <path
                                            d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                    <line x1="6" y1="16" x2="6.01" y2="16"></line>
                                    <line x1="10" y1="16" x2="10.01" y2="16"></line>
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="mb-0   font-weight-bold">{{__('Total Recipes')}}</p>

                                <h5 class="font-weight text-white-bolder mt-4">
                                    {{$total_products}}
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class=" icon icon-shape bg-info-light rounded-circle text-center">


                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book text-info-light mt-2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="row ">
        <div class="col-lg-4 col-sm-6">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-capitalize mb-0">{{__('Recent Students')}}</h6>
                        @if(count($recent_students))
                            <a href="{{ url('students')}}" class="btn  bg-purple-light text-purple shadow-none mb-0 ms-2 d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="">
                                {{__('View All')}}
                            </a>
                        @endif
                    </div>


                </div>

                <div class="card-body ">

                    @if(!count($recent_students))
                        <div class="text-center">
                            <p>{{__('No data to display.')}}</p>
                        </div>

                    @else

                        <div class="table-responsive  p-0">
                            <table class="table align-items-center mb-0">

                                <tbody>
                                @foreach($recent_students as $student)

                                    <tr >
                                        <td>
                                            <div class="d-flex mb-1">
                                                <div>
                                                    @if(empty($student['photo']))
                                                        <div class="avatar avatar-md rounded-circle bg-info-light border-radius-md ">
                                                            <h6 class="text-info-light text-uppercase mt-1">{{$student->first_name['0']}}{{$student->last_name['0']}}</h6>
                                                        </div>
                                                    @else

                                                        <img src="{{ url('public') }}/uploads/{{$student->photo}}"
                                                             class="avatar avatar-md rounded-circle  shadow-sm">
                                                    @endif
                                                </div>
                                                <div class="d-flex flex-column justify-content-center ms-3">
                                                    <a href="{{ url('student-about')}}?id={{$student->id}}">
                                                        <h6 class="mb-0">{{$student->first_name}} {{$student->last_name}}</h6>
                                                    </a>

                                                    <p class=" text-sm text-muted mb-0">{{$student->email}}</p>
                                                </div>
                                            </div>
                                        </td>


                                        <td class="align-middle text-right">
                                            <div class="dropstart me-3">
                                                <a href="javascript:" class="text-secondary" id="dropdownMarketingCard"
                                                   data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3"
                                                    aria-labelledby="dropdownMarketingCard">
                                                    <li><a class="dropdown-item border-radius-md"
                                                           href="{{ url('new-student')}}?id={{$student->id}}">{{__('Edit')}}</a></li>

                                                    <li><a class="dropdown-item border-radius-md"
                                                           href="{{ url('student-about')}}?id={{$student->id}}">{{__('See Details')}}</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item border-radius-md text-danger"
                                                           href="{{ url('delete/student')}}/{{$student->id}}">{{__('Delete')}}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    @endif


                </div>
            </div>
        </div>
        <div class="col-lg-8 col-sm-6 mt-sm-0 mt-4">
            <div class="card">
                <div class="card-header border-bottom">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-0 text-capitalize">{{__('Recent Requests')}}</h6>
                        @if(count($recent_orders))
                            <a href="{{ url('requests')}}" class="btn  bg-purple-light text-purple shadow-none mb-0 ms-2 d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="">
                                {{__('View All')}}
                            </a>
                        @endif
                    </div>

                </div>
                <div class="card-body">

                    @if(!count($recent_orders))
                        <div class="text-center">
                            <p>{{__('No data to display.')}}</p>
                        </div>

                    @else
                        <div class="table-responsive  p-0">
                            <table class="table align-items-center mb-0" id="data_table">
                                <thead class="bg-gray-100">
                                <tr>

                                    <th class="text-uppercase  text-xs">{{__('Student')}}</th>
                                    <th class="text-uppercase  text-xs  ps-2">{{__('Diploma Name')}}</th>
                                    <th class="text-uppercase  text-xs  ps-2">{{__('Date')}}</th>

                                    <th class=""></th>
                                </tr>

                                </thead>

                                <tbody>
                                    @foreach($requests as $request)

                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div>
                                                @php
                                                    $user = DB::table('students')->where('id' , $request->user_id)->first();
                                                @endphp
                                                @if(empty($user->photo))
                                                    <div class="avatar avatar-md rounded-circle bg-info-light border-radius-md p-2 ">
                                                        <h6 class="text-info-light text-uppercase mt-1">

                                                            {{ substr($user->first_name, 0, 1) }}
                                                            {{ substr($user->last_name, 0, 1) }}

                                                        </h6>
                                                    </div>
                                                @else
                                                    <img src="" class="avatar avatar-md rounded-circle  shadow-sm">
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column justify-content-center ms-3">
                                                <a href="{{ url('student-about') }}?id={{$user->id}}">
                                                    <h6 class="mb-0">{{$user->first_name}} {{$user->last_name}}</h6>
                                                </a>

                                                <p class=" text-sm text-muted mb-0">{{$user->email}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p>{{ $request->diploma_name}}</p>
                                    </td>
                                    <td>
                                        <p>{{ $request->created_at}}</p>
                                    </td>
                                    <td class="align-middle text-right">
                                        <a class=" btn btn-info"
                                           href="{{ url('student-about') }}?id={{$user->id}}">{{__('View Student')}}</a>

                                    </td>
                                </tr>
                            @endforeach
                               
                                </tbody>
                            </table>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection