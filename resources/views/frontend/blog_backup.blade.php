@extends('frontend.layout')
@section('title','News')
@section('content')
<section class="">
    <div class="bg-dark-alt position-relative">
        <div class="pb-lg-6 pb-5 pt-7 postion-relative z-index-2">
            <div class="row mt-5">
                <div class="col-md-8 mx-auto text-center mt-4">
                        <h2 class="text-white">
                            News
                        </h2>
                    <p class="text-muted">
                       News
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="py-8">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">

                    <h2>{{__('Read the articles of our News')}} </h2>
                    <p class="">
                        {{__('Here you can find the latest news about our courses and events')}}
                    </p>
                </div>
            </div>
            <div class="row mb-4">
                @foreach($blogs as $blog)
                    <div class="col-md-4 mb-3">
                        <hr class="vertical dark d-lg-block d-none">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative z-index-1">
                                <a href="javascript:;" class="d-block">
                                    @if(!empty($blog->cover_photo))
                                        <img src="{{ url('public') }}/uploads/{{$blog->cover_photo}}" class="img-fluid border-radius-md" alt="...">
                                    @endif
                                </a>
                            </div>

                            <div class="card-body pt-3">
                                <h4 class="mb-3">
                                    <a href="{{ url('news')}}/{{$blog->slug}}" class="text-darker font-weight-bolder">
                                        {{$blog->title}}
                                    </a>
                                </h4>
                                <span class="badge mb-2 rounded bg-success-light text-success me-2">{{$blog->topic}}</span>

                                <div class="author">
                                    @if(!empty($users[$blog->admin_id]->photo))
                                        <img alt="" class=" avatar shadow " src="{{ url('public') }}/uploads/{{$users[$blog->admin_id]->photo}}">
                                    @else
                                        <div class="avatar mt-4 rounded-circle bg-purple-light  border-radius-md ">
                                            <h6 class="text-purple mt-1">{{$users[$blog->admin_id]->first_name[0]}}{{$users[$blog->admin_id]->last_name[0]}}</h6>
                                        </div>
                                    @endif
                                    <div class="name ps-3 my-auto">
                                        <p class="text-sm text-darker font-weight-bold mb-0"> @if(!empty($users[$blog->admin_id]))
                                                <span>{{$users[$blog->admin_id]->first_name}}  {{$users[$blog->admin_id]->last_name}}</span>

                                            @endif</p>
                                        <div class="stats">
                                            <p class="text-xs text-secondary mb-0">{{$blog->updated_at->diffForHumans()}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
