@extends('frontend.layouts.master')
@section('content')


<!-- Sub banner start -->
<div class="sub-banner contctBg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1>Contact Us</h1>
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->


<!-- Get in Touch start -->
<div class="contact-3 content-area-5">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <p>Get in touch</p>
            <h1>Contact us</h1>
        </div>
        <div class="contact-innner">
            <div class="row g-0">
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="contact-info">
                        <h3>Contact Info</h3>
                        <div class="ci-box d-flex">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="detail align-self-center">
                                <h4>Office Address</h4>
                                <p>20/F Green Road, Dhaka</p>
                            </div>
                        </div>
                        <div class="ci-box d-flex">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="detail align-self-center">
                                <h4>Phone Number</h4>
                                <p>
                                    <a href="tel:0477-0477-8556-552">Office: 0477 8556 552</a>
                                </p>
                            </div>
                        </div>
                        <div class="ci-box d-flex">
                            <div class="icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="detail align-self-center">
                                <h4>Email Address</h4>
                                <p>
                                    <a href="mailto:info@themevessel.com">info@themevessel.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="ci-box d-flex mb-30">
                            <div class="icon">
                                <i class="fa fa-fax"></i>
                            </div>
                            <div class="detail align-self-center">
                                <h4>Fax:</h4>
                                <p>
                                    <a href="tel:0477-0477-8556-552">0477 8556 552</a>
                                </p>
                            </div>
                        </div>
                        <h3>Follow Us</h3>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-12">
                    <div class="contact-form">
                        <h3>Send us a Message</h3>
                        <form action="#" method="GET" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floating-full-name" placeholder="Full Name">
                                        <label for="floating-full-name">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floating-email-address" placeholder="Email Address">
                                        <label for="floating-email-address">Email address</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floating-subject" placeholder="Subject">
                                        <label for="floating-subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floating-phone-Number" placeholder="Phone Number">
                                        <label for="floating-phone-Number">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">Comments</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="send-btn text-center">
                                        <button type="submit" class="btn-4 btn-round-3">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Get in Touch end -->


  <!-- Partners strat -->
  <div class="partners bg-grea-3">
    <div class="container">
        <h4>Brands <span>$ Partners</span></h4>
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-slider slide-box-btn">
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-1.png')}}" alt="brand"></div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-2.png')}}" alt="brand"></div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-3.png')}}" alt="brand"></div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-4.png')}}" alt="brand"></div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-5.png')}}" alt="brand"></div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-6.png')}}" alt="brand"></div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-1.png')}}" alt="brand"></div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-2.png')}}" alt="brand"></div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-3.png')}}" alt="brand"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Partners end -->

    @endsection