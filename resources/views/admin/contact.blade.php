@extends('layouts.admin-portal')
@section('title',__('Contacts'))
@section('content')

    <div class="row mb-2">
        <div class="col-md-6">
            <span>

                <h5 class="  fw-bolder">
                    {{__('Contacts')}} /<span class="text-secondary">
                      {{__('Contacts List')}}
                    </span>
                </h5>
            </span>

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
                                <th>Name</th>
                                <th>Email</th>
                                <th>phone</th>
                            </tr>

                            </thead>

                            <tbody>
                                @foreach($data as $r)
                                <tr>
                                    <td>
                                       {{ $r->fname }} 
                                       {{ $r->lname }} 

                                    </td>
                                    <td>
                                       {{ $r->email }} 

                                    </td>
                                    <td>
                                       {{ $r->phone }} 

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