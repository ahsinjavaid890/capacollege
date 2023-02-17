@extends('frontend.layout')
@section('title','Contact Us')
@section('content')

    <section class="">
        <div class="bg-dark-alt position-relative">
            <div class="pb-lg-6 pb-5 pt-7 postion-relative z-index-2">
                <div class="row mt-5">
                    <div class="col-md-8 mx-auto text-center mt-4">
                            <h2 class="text-white">
                                Contact Us
                            </h2>
                        <p class="text-white">
                           Contact Us
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-section2_content">
                        <h2 class="contact-section2__title">Information</h2>
                        <p class="contact-section2__text">Leave your Message</p>
                        <ul class="contact-section2_list">
                            <li>
                                <span class="contact-section2_list__icon" style="width: 103px !important;"><i class="lastudioicon lastudioicon-pin-3-2"></i></span>
                                <span class="contact-section2_list__text">CAPA Chandigarh - Quite Office No. 1, First Floor, ( Flower Market, Opposite Khukhrain Bhawan) Sector 35-A Chandigarh!</span>
                            </li>
                            <li>
                                <span class="contact-section2_list__icon"><i class="lastudioicon lastudioicon-phone-2"></i></span>
                                <span class="contact-section2_list__text">+91 79732 45822</span>
                            </li>
                            <li>
                                <span class="contact-section2_list__icon"><i class="lastudioicon lastudioicon-mail"></i></span>
                                <span class="contact-section2_list__text">cakeuncle.com@gmail.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-section2_formbg">
                        <h2 class="contact-section2_form__title">Say Something...</h2>
                        <form class="contact-section2_form" id="contact-form" action="assets/php/mail.php" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6 col-6 form-p">
                                    <div class="form-group">
                                        <label>First Name*</label>
                                        <input class="form-field" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6 form-p">
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                        <input class="form-field" type="text" name="lastname">
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group">
                                        <label>Email Address*</label>
                                        <input class="form-field" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group">
                                        <label>Message*</label>
                                        <textarea class="form-control text-area" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group mb-0 d-flex justify-content-center">
                                        <button class="btn  btn-success text-white" type="submit" value="Send Massage">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Message Notification -->
                        <div class="form-messege"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="position-relative">
        <div class="section">
            <!-- Google Map Area Start -->
            <div class="google-map-area w-100" data-aos="fade-up" data-aos-duration="1000">
                <iframe class="contact-map" src="https://maps.google.com/maps?q=CAPA Chandigarh - Quite Office No. 1, First Floor, ( Flower Market, Opposite Khukhrain Bhawan) Sector 35-A Chandigarh!&t=&z=10&ie=UTF8&iwloc=&output=embed">

                </iframe>
            </div>
        </div>
    </section>
@endsection
