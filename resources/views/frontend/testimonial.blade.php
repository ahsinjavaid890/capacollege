@extends('frontend.layout')
@section('title','Testimonials')
@section('content')
    <section class="">
        <div class="bg-dark-alt position-relative">
            <div class="pb-lg-6 pb-5 pt-7 postion-relative z-index-2">
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto text-center mt-4">
                            <h2 class="text-white">
                                Testimonials
                            </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="py-6" style="background-color: #f3dfe8;">
    <div class="testimonial-active-two my-0 mx-auto">
        <div class="container">
            <div class="row">
            	@foreach($data as $r)
            	<div class="col-md-4 mt-4">
            		<div class="testimonial-two text-center">
                        <div class="testimonial-two_quote">
                            <svg width="30" height="30" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.203 16c2.034 0 3.594-1.7 3.594-3.752 0-2.124-1.356-3.61-3.255-3.61-.339 0-.813.07-.881.07C3.864 6.442 5.831 3.611 8 2.124L5.492 0C2.372 2.336 0 6.3 0 10.62 0 14.087 1.966 16 4.203 16zm11 0c2.034 0 3.661-1.7 3.661-3.752 0-2.124-1.423-3.61-3.322-3.61-.339 0-.813.07-.881.07.271-2.266 2.17-5.097 4.339-6.584L16.492 0C13.372 2.336 11 6.3 11 10.62c0 3.468 1.966 5.38 4.203 5.38z" fill="currentColor" fill-rule="nonzero"></path>
                            </svg>
                        </div>
                        <p class="testimonial-two_text">
                            {{ Str::limit($r->testimonial , 150); }}
                        </p>
                        <div class="testimonial-two_image">
                            <img width="56" height="56" src="{{ url('public/images') }}/{{ $r->image }}" alt="Author">
                        </div>
                        <span class="testimonial-two_name">
                            {{ $r->name }}
                        </span>
                    </div>
            	</div>
            	@endforeach
            </div>
        </div>
    </div>
</section>
@endsection