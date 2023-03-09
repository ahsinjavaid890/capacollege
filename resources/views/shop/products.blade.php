@extends('layouts.admin-portal')
@section('title',__('Products'))
@section('content')
    <div class=" row mb-2">
        <div class="col">
            <div>

                <h5 class="fw-bolder">
                    {{__('Shop')}} /<span class="text-secondary">
                            {{__('Recipes')}}
                    </span>
                </h5>
                <p class="text-muted">{{__('Create, edit or delete recipes.')}}</p>

            </div>

        </div>
        <div class="col text-end">
            <a href="{{ url('add-product')}}" type="button" class="btn btn-info text-white"><i class="fas fa-plus"></i> {{__('Add Recipes ')}}</a>

        </div>
    </div>

        <section class="">
            <div class="">

                @if(!count($products))

                    <div class="card">
                        <div class="card-body">
                            <p>{{__('No items to display. Get started by adding an item.')}}</p>

                            <a href="{{ url('add-product')}}" type="button" class="btn btn-info text-white"><i class="fas fa-plus"></i> {{__('Add Recipes ')}}</a>
                        </div>
                    </div>

                @else

                    <div class="row">
                        <!-- Main content START -->
                        <div class="col-12">

                            <!-- Book Grid START -->
                            <div class="row g-4">

                                <!-- Card item START -->
                                @foreach($products as $product)
                                <div class="col-md-3">
                                    <div class="card recipie_card">
                                        <div class="dropstart threedrop">
                                            <a href="javascript:" class="text-secondary" id="dropdownMarketingCard"
                                               data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3"
                                                aria-labelledby="dropdownMarketingCard">
                                                <li><a class="dropdown-item border-radius-md"
                                                       href="{{ url('add-product')}}?id={{$product->id}}">{{__('Edit')}}</a></li>

                                                <li><a class="dropdown-item border-radius-md"
                                                       href="{{ url('view-product')}}?id={{$product->id}}">{{__('See Details')}}</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li>
                                                    <a class="dropdown-item border-radius-md text-danger"
                                                       href="{{ url('delete/product')}}/{{$product->id}}">{{__('Delete')}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body p-0">
                                            <a href="{{ url('shop')}}/{{$product->slug}}">
                                                @if(empty($product->image))
                                                    <img src="{{ url('public') }}/img/placeholder.jpeg"
                                                         class="w-100 border-radius-lg shadow-lg">
                                                @else
                                                    <img src="{{ url('public') }}/uploads/{{$product->image}}" class="card-img-top">
                                                @endif
                                            </a>
                                            <div class="product_price mt-3 p-3">
                                                <a href="{{ url('shop')}}/{{$product->slug}}">
                                                    <h3>{{$product->name}}</h3>
                                                </a>
                                            </div>
                                            <div class="justify-content-between owner_card p-3 d-flex">
                                                <span class="h6 fw-light mb-0">{{__('By')}} <span class="fw-bolder">{{$product->author_name}}</span></span>
                                                <!-- Price -->
                                                <h3  class="text-success mb-0">
                                                    INR {{$product->price}}
                                                </h3>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Card item END -->

                            </div>
                            <!-- Book Grid END -->

                            <!-- Pagination END -->
                        </div>
                        <!-- Main content END -->
                    </div>

                @endif

            </div>
        </section>

@endsection