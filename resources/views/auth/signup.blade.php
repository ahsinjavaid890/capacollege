@extends('frontend.layout')
@section('title','Sign Up')
@section('content') 
<section style="background-color:#f3dfe8 !important;" class="py-6 bg-gray-100">
   <div class="container mt-8 mb-5">
      <div class="row justify-content-center">
         <div class="col-lg-5 mb-lg-0 mb-4">
            <div class="card sign-up">
               <div class="card-body pt-3">
                    <div class="row text-left signin-card">
                        <div class="col-md-12">
                            <h2>Create Your Account</h2>
                            <p>Already have an account? <a href="{{ url('student/login')}}">Sign In</a></p>
                        </div>
                    </div>
                    <form role="form text-left" method="post" action="{{ url('student-signup-post')}}">
                        @if (session()->has('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label>{{__('First Name')}}</label>
                        <div class="mb-3">
                            <input name="first_name" class="form-control" type="text" placeholder="First name"
                                   aria-describedby="email-addon">
                        </div>
                        <label>{{__('Last Name')}}</label>
                        <div class="mb-3">
                            <input type="text" name="last_name" class="form-control" placeholder="Last name"
                                   aria-describedby="email-addon">
                        </div>
                        <label>{{__('Your Email')}}</label>
                        <div class="mb-3">
                            <input type="email" placeholder="Email" name="email" class="form-control"
                                   aria-label="Email" aria-describedby="email-addon">
                        </div>
                        <label>{{__('Choose Password')}}</label>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                   aria-label="Password" aria-describedby="password-addon">
                        </div>

                            @if(!empty($super_settings['config_recaptcha_in_user_signup']))
                                <div class="g-recaptcha" data-sitekey="{{$super_settings['recaptcha_api_key']}}">

                                </div>
                            @endif
                        @csrf
                        <div class="text-start">
                            <button type="submit" class="btn  btn-success text-white">{{__('Sign up')}}</button>
                        </div>

                    </form>
                
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection