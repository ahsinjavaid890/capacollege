@extends('frontend.layout')
@section('title','Login')
@section('content') 
<section style="background-color:#f3dfe8 !important;" class="py-6 bg-gray-100">
   <div class="container mt-8 mb-5">
      <div class="row justify-content-center">
         <div class="col-lg-4 mb-lg-0 mb-4">
            <div class="card sign-up">
               <div class="card-body pt-3">
                    <div class="row text-left signin-card">
                        <div class="col-md-12">
                            <h2>Login</h2>
                            <p>New Here ? <a href="{{ url('signup')}}">Create Account</a></p>
                        </div>
                    </div>
                    <form role="form text-left" method="post" action="{{ url('login') }}">

                        @if (session()->has('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert bg-pink-light text-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label>{{__('Your Email')}}</label>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                   aria-label="Email" aria-describedby="email-addon">
                        </div>
                        <div>
                            <label class="fw-bolder">{{__('Password')}}
                            </label>

                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                   aria-label="Password" aria-describedby="password-addon">
                        </div>

                        <div class="mb-4 d-flex justify-content-between mb-4">
                            <div class="form-check">
                                <input class="form-check-input" name="remember" type="checkbox" id="rememberMe" checked="">
                                <label class="form-check-label" for="exampleCheck1">{{__('Remember me')}}</label>
                            </div>
                            <div class="text-primary-hover">
                                <a href="{{ url('forgot-password')}}" class="text-info-light">
                                    <u>{{__('Forgot Password?')}}</u>
                                </a>
                            </div>

                        </div>
                            @if(!empty($super_settings['config_recaptcha_in_admin_login']))
                                <div class="g-recaptcha" data-sitekey="{{$super_settings['recaptcha_api_key']}}">

                                </div>
                            @endif

                        <div class="text-center mt-3">
                            @csrf
                            <button type="submit" class="btn  btn-success text-white">{{__('Sign in')}}</button>
                        </div>
                    </form>
                
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection