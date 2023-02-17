@extends('layouts.admin-portal')
@section('title',__('Gallary Images'))
@section('content')

    <div class="row mb-2">
        <div class="col-md-6">
            <span>

                <h5 class="  fw-bolder">
                    {{__('Gallary Images')}} /<span class="text-secondary">
                      {{__('Gallary Images List')}}
                    </span>
                </h5>
                <p class="text-muted">{{__('Create, edit or delete the Gallary Images')}}</p>

            </span>

        </div>
        <div class="col-md-8 text-end">
            <button type="button" class="btn btn-info  mb-3" data-bs-toggle="modal" data-bs-target="#kt_modal_1"  id="btn_add_new_category"><i class="fas fa-plus"></i>&nbsp;&nbsp; {{__(' Add New Gallary Images')}}</button>
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
                                <th class="text-uppercase  text-xs">{{__('Image')}}</th>

                                <th>Crated At</th>
                                <th class=""></th>
                            </tr>

                            </thead>

                            <tbody>
                            @foreach($data as $r)

                                <tr>
                                    <td>
                                        
                                        <img style="width: 120px;" class="img-thumbnail" src="{{ url('public/images') }}/{{ $r->image }}">

                                    </td>
                                    <td>
                                        @if(!empty($r->created_at))
                                            {{(\App\Supports\DateSupport::parse($r->created_at))->format(config('app.date_format'))}}

                                        @endif
                                    </td>
                                    <td class="align-middle text-right">
                                        <div class="dropstart me-3">
                                            <a href="javascript:" class="text-secondary" id="dropdownMarketingCard"
                                               data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3"
                                                aria-labelledby="dropdownMarketingCard">
      
                                                <li>
                                                    <a class="dropdown-item border-radius-md text-danger"
                                                       href="{{ url('delete/gallaery')}}/{{$r->id}}">{{__('Delete')}}
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
                </div>
            </div>
        </div>
    </div>
  <div class="modal fade" id="kt_modal_1" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title">{{__('Add New Image')}}</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="sp_result_div"></div>
                    <form enctype="multipart/form-data" method="post" action="{{ url('addnewgallaeryimage') }}"  class="">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="email">{{__('Select Image')}}</label>
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