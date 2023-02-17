@extends('layouts.admin-portal')
@section('title',__('Requests'))

@section('content')
    <div class="row mb-2">
        <div class="col">
            <span>

                <h5 class="fw-bolder">
                    {{__('Earnings')}} /<span class="text-secondary">
                      {{__('Requests')}}
                    </span>
                </h5>
                <p class="text-muted">{{__('All of the Requests')}}</p>

            </span>

        </div>
        <div class="col text-end">

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body ">
                    <div class="table-responsive  p-0">
                        <table class="table align-items-center mb-0" id="data_table">
                            <thead class="bg-gray-100">
                            <tr>
                                <th class="text-uppercase  text-xs">{{__('#')}}</th>
                                <th class="text-uppercase  text-xs">{{__('User Name')}}</th>
                                <th class="text-uppercase  text-xs  ps-2">{{__('Diploma Name')}}</th>
                                <th class="text-uppercase  text-xs  ps-2">{{__('Action')}}</th>

                                <th class=""></th>
                            </tr>

                            </thead>

                            <tbody>
                            @foreach($requests as $request)

                                <tr>
                                    <td>
                                        <p class="mb-0">{{$request->id}}</p>
                                    </td>
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
                                    <td class="align-middle text-right">
                                        <a class=" btn btn-info"
                                           href="{{ url('student-about') }}?id={{$user->id}}">{{__('View Student')}}</a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>
        $(document).ready(function () {
            "use strict";
            $('#data_table').DataTable(
            );

        });
    </script>

@endsection

