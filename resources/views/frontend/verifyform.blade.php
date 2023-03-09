@extends('frontend.layout')
@section('title','Verify Certificate')
@section('content') 
<section style="background-color:#f3dfe8 !important;" class="py-6 bg-gray-100">
   <div class="container mt-8 mb-5">
      <div class="row justify-content-center">
         <div class="col-lg-4 mb-lg-0 mb-4">
            <div class="card sign-up">
               <div class="card-body pt-3">
                    <div class="row text-left signin-card">
                        <div class="col-md-12">
                            <h2>Verify Certificate</h2>
                        </div>
                    </div>
                    <form action="{{ url('verifycertificate') }}" method="POST">
                     @csrf
                        @if (session()->has('status'))
                            <div class="alert alert-danger">
                                {{session('status')}}
                            </div>
                        @endif
                       
                    <div class="form-group">
                        <label>Certificate Number</label>
                        <input type="text" name="id" class="form-control border-0" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn  btn-success text-white">Verify</button>
                    </div>
                  </form>                     
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection