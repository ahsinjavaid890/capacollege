<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{config('app.name')}}
    </title>
    <link id="pagestyle" href="{{ url('public/css/app.css') }}" rel="stylesheet"/>

     @if(!empty($super_settings['config_recaptcha_in_user_signup']))
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     @endif
</head>


<section class="">
    <div class="row">
        <div class="col-md-6 bg-dark-alt h-100-vh">
            <div class="mt-4">
                <div class="row justify-content-center">
                    <div class="text-center mx-auto">
                        <h1 class=" text-white mb-4 mt-10">{{__('Learn the best way')}}</h1>
                        <h6 class="text-white text-lead">{{__('from the comfort of your home')}}</h6>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container col-md-9 py-7">
                <div class="mt-5">
                    <div class="card-header text-start pt-4">
                        <h4>{{__('Create Your Account')}}</h4>
                        <p class=" mt-3 mb-0">{{__('Already have an account?')}} <a href="{{ url('student/login')}}"class="text-info-light font-weight-bolder">{{__('Sign in')}}</a>
                    </div>

                    <div class="card-body">
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
                                <button type="submit" class="btn btn-blue btn-rounded  my-4 mb-2">{{__('Sign up')}}</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



</html>
<script>

    (function(){
        "use strict";
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    })();
</script>
