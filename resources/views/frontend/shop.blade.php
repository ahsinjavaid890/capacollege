
@extends('frontend.layout')
@section('title','Shop')
@section('content')

    <section class="py-6 mt-5">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class=" bg-dark-alt p-4 rounded-3 position-relative overflow-hidden">

                        <!-- Svg decoration -->

                        <div class="row position-relative align-items-center">

                            <!-- Content -->
                            <div class="col-md-6 px-md-5">
                                <!-- Title -->
                                <h1 class="mb-3 text-white">{{__('New Release')}}!</h1>
                                <p class="mb-3 text-muted">{{__('Welcome to our store, buy the best sellers!!  ')}}  </p>

                                <!-- Search -->

                            </div>

                        </div> <!-- Row END -->
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row">
                <!-- Main content START -->
                <div class="col-md-12">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-md-4 mb-4">
                            <div class="card recipie_card">
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
                                        <h3>INR {{$product->price}}</h3>
                                    </div>
                                    <div class="cart_btn p-3">
                                        <a href="{{ url('add-to-cart')}}/{{$product->id}}?type=ebook" class="btn btn-dark btn-block mb-2 mb-sm-0 me-00 "><i class="bi bi-cart3 "></i>{{__('Add to Cart')}}</a>
                                    </div>   
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Main content END -->
            </div>
        </div>
    </section>

@endsection









