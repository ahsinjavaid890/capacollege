@extends('frontend.layout')
@section('title','Student Login')
@section('content') 
<section style="background-color:#f3dfe8 !important;" class="py-6 bg-gray-100">
   <div class="container mt-8 mb-5">
      <div class="row justify-content-center">
         <div class="col-lg-4 mb-lg-0 mb-4">
            <div class="card">
               <div class="card-body pt-3">
                    <div class="row text-left signin-card">
                        <div class="col-md-12">
                            <h2>Reset password</h2>
                            <p>You will receive an e-mail in maximum 60 seconds</p>
                        </div>
                    </div>
                    <form role="form " action="{{ url('save-reset-password')}}" method="post">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" aria-label="Email">
                        </div>
                        @csrf
                        <div class="text-center">
                            <button type="submit"
                                    class="btn btn-blue btn-lg w-100 my-4 mb-2">{{__('Send')}}</button>
                        </div>
                    </form>
                
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection