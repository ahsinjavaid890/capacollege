@extends('layouts.admin-portal')
@section('title',__('Testimonials'))
@section('content')

    <div class="row mb-2">
        <div class="col-md-6">
            <span>

                <h5 class="  fw-bolder">
                    {{__('Testimonials')}} /<span class="text-secondary">
                      {{__('Testimonials List')}}
                    </span>
                </h5>
                <p class="text-muted">{{__('Create, edit or delete the Testimonials')}}</p>

            </span>

        </div>
        <div class="col-md-6 text-end">
            <button type="button" class="btn btn-info  mb-3" data-bs-toggle="modal" data-bs-target="#kt_modal_1"  id="btn_add_new_category"><i class="fas fa-plus"></i>&nbsp;&nbsp; {{__(' Add New Testimonials')}}</button>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                 @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body ">
                    <div class="table-responsive  p-0">
                        <table class="table align-items-center mb-0" id="data_table">
                            <thead class="bg-gray-100">
                            <tr>
                                <th class="text-uppercase  text-xs">{{__('Image')}}</th>

                                <th>Name</th>
                                <th class=""></th>
                            </tr>

                            </thead>

                            <tbody>
                                @foreach($data as $r)
                                <tr>
                                    <td>
                                       <img style="width: 100px;" class="img-thumbnail" src="{{ url('public/images') }}/{{ $r->image }}"> 

                                    </td>
                                    <td>
                                       {{ $r->name }} 

                                    </td>
                                    <td class="align-middle text-right">
                                        <div class="dropstart me-3">
                                            <a href="javascript:" class="text-secondary" id="dropdownMarketingCard"
                                               data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3"
                                                aria-labelledby="dropdownMarketingCard">
                                                <li><a class="dropdown-item border-radius-md" data-bs-toggle="modal" data-bs-target="#edit{{ $r->id }}">{{__('Edit')}}</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <a class="dropdown-item border-radius-md text-danger"
                                                       href="{{ url('testimonial')}}/{{$r->id}}">{{__('Delete')}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>
                              <div class="modal fade" id="edit{{ $r->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="h6 modal-title">Edit Testimonial</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="sp_result_div"></div>
                                                <form enctype="multipart/form-data" method="post" action="{{ url('edittestimonials') }}"  class="">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $r->id }}">
                                                    <!-- Form -->
                                                    <div class="form-group mb-4">
                                                        <label for="name">Name</label>
                                                        <div class="input-group">

                                                            <input type="text" name="name" class="form-control"  id="input_name" value="{{ $r->name }}" autofocus >
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="name">Testimonial</label>
                                                        <div class="input-group">
                                                            <textarea rows="8" class="form-control" name="testimonial" >{{ $r->testimonial }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="image">Select Image</label>
                                                        <div class="input-group">

                                                            <input type="file" name="image" class="form-control"  id="input_name" autofocus >
                                                        </div>
                                                            <img class="img-thumbnail mt-2" src="{{ url('public/images') }}/{{ $r->image }}" width="100">
                                                    </div>
                                                    <!-- End of Form -->

                                                    <button  type="submit" id="btn_submit" class="btn btn-info">{{__('Save')}}</button>
                                                    <input type="hidden" name="category_id" id="category_id" value="">


                                                </form>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="modal fade" id="kt_modal_1" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title">{{__('Add New Testimonial')}}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="sp_result_div"></div>
                    <form enctype="multipart/form-data" method="post" action="{{ url('addtestimonials') }}"  class="">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="name">{{__('Enter Name')}}</label>
                            <div class="input-group">

                                <input type="text" name="name" class="form-control"  id="input_name" autofocus required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="name">{{__('Enter Testimonial')}}</label>
                            <div class="input-group">
                                <textarea class="form-control" name="testimonial" required></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="image">{{__('Select Image')}}</label>
                            <div class="input-group">

                                <input type="file" name="image" class="form-control"  id="input_name" autofocus required>
                            </div>
                        </div>
                        <!-- End of Form -->

                        @csrf
                        <button  type="submit" id="btn_submit" class="btn btn-info">{{__('Save')}}</button>
                        <input type="hidden" name="category_id" id="category_id" value="">


                    </form>


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