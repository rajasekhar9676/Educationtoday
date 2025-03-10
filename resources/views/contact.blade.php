@extends('layouts.frontend')

@section('title', 'Contact Us')

@section('content')
    <!-- Banner -->
    <div class="container-fluid p-0">
        <img src="{{ asset('assets/images/Rectangle 810.png') }}" alt="Banner" class="img-fluid w-100">
    </div>

    <!-- Contact Section -->
    <div id="contact" class="contact-area section-padding mt-5">
        <div class="container">
            <div class="section-title text-center">
                <h1>Contact Us</h1>
            </div>

            <div class="row">
                <div class="col-lg-5">
                    <div class="single_address">
                        <i class="fa fa-map-marker"></i>
                        <h4>Our Address</h4>
                        <p>3481 Melrose Place, Beverly Hills</p>
                    </div>
                    <div class="single_address">
                        <i class="fa fa-envelope"></i>
                        <h4>Email Us</h4>
                        <p>info@example.com</p>
                    </div>
                    <div class="single_address">
                        <i class="fa fa-phone"></i>
                        <h4>Call Us</h4>
                        <p>(+1) 517 397 7100</p>
                    </div>
                    <div class="single_address">
                        <i class="fa fa-clock-o"></i>
                        <h4>Working Hours</h4>
                        <p>Mon - Fri: 08.00 - 16.00 | Sat: 10.00 - 14.00</p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact">
                        <form method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-12 mt-4">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group col-md-12 mt-4">
                                    <textarea rows="6" name="message" class="form-control" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="col-md-12 text-center mt-4">
                                    <button type="submit" class="btn custom-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
