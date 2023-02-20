@extends('layouts.student-portal')
@section('title',__('PTS'))
@section('content')


    <div class="row mb-2">
        <div class="col-md-6">
            <span>

                <h5 class="  fw-bolder">
                    {{__('PTS ')}} /<span class="text-secondary">
                      {{__('PTS List')}}
                    </span>
                </h5>
                <p class="text-muted">{{__('Create, edit or delete the PTS')}}</p>

            </span>

        </div>
        <div class="col-md-6 text-end">
            <button type="button" class="btn btn-info  mb-3" data-bs-toggle="modal" data-bs-target="#kt_modal_1"  id="btn_add_new_category"><i class="fas fa-plus"></i>&nbsp;&nbsp; {{__(' Add New PTS')}}</button>
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
                                    <th class="text-uppercase  text-xs">{{__('Name')}}</th>
                                    <th>Price</th>
                                    <th>Reach Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                       <img style="width: 100px;" class="img-thumbnail" src="{{ url('public/images') }}"> 

                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td>
                                       
                                    </td>
                                    <td >
                                        <a class="btn btn-primary border-radius-md mx-4" data-bs-toggle="modal" data-bs-target="#edit">{{__('Edit')}}</a>
                                        <a class="btn btn-danger text-white border-radius-md text-danger"
                                           href="{{ url('deletestudentprenuer')}}/">{{__('Delete')}}
                                        </a>

                                    </td>
                                </tr>
                              <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="h6 modal-title">Edit Testimonial</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="sp_result_div"></div>
                                                <form enctype="multipart/form-data" method="post" action="{{ url('editstudentprenuer') }}"  class="">
                                                    @csrf
                                                    <input type="hidden" name="id" value="">
                                                    <!-- Form -->
                                                    <div class="form-group mb-4">
                                                        <label for="name">Name</label>
                                                        <div class="input-group">
                                                            <input type="text" name="name" class="form-control"  id="input_name" value="" autofocus >
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="name">Bakery Name</label>
                                                        <div class="input-group">
                                                            <input type="text" name="bakery_name" class="form-control"  id="input_name" value="" autofocus >
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <label for="image">Select Image</label>
                                                        <div class="input-group">

                                                            <input type="file" name="image" class="form-control"  id="input_name" autofocus >
                                                        </div>
                                                            <img class="img-thumbnail mt-2" src="{{ url('public/images') }}" width="100">
                                                    </div>
                                                    <!-- End of Form -->

                                                    <button  type="submit" id="btn_submit" class="btn btn-info">{{__('Save')}}</button>
                                                </form>


                                            </div>

                                        </div>
                                    </div>
                                </div>
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
                    <h2 class="h6 modal-title">{{__('Add New Studentprenuer')}}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="sp_result_div"></div>
                    <form enctype="multipart/form-data" method="post" action="{{ url('addpts') }}"  class="">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="name">{{__('Enter Name')}}</label>
                            <div class="input-group">

                                <input  name="name" type="text" class="form-control"  id="input_name" autofocus required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="name">{{__('Enter Price')}}</label>
                            <div class="input-group">
                                <input type="text" name="price" class="form-control" id="input_name" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="name">{{__('Enter Reach Price')}}</label>
                            <div class="input-group">
                                <input type="text" name="reach_price" class="form-control" id="input_name" required>
                            </div>
                        </div>
 
                        @csrf
                        <button  type="submit" id="btn_submit" class="btn btn-info">{{__('Save')}}</button>
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