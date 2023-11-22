@extends('frontend.layouts.master')
@section('content')

<!-- Sub banner start -->
<div class="sub-banner abt-sub-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1>About Us</h1>
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- About Us Start -->
<div class="about-real-estate content-area-5">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center">
                    <div class="about-text clearfix">
                        <div class="main-title txt-lft mb-2">
                            <p>About Us</p>
                            <h1 class="mb-0">About in Commercial Lease</h1>
                        </div>
                        <p>Commercial leasing with a passion for facilitating your business success, we've honed our
                            expertise over [number] years to become your trusted partner in securing prime commercial
                            spaces. Whether you're seeking a traditional office space or the flexibility of a co-working
                            environment. Our team of experts is here to assist you every step of the way, ensuring you
                            secure a space that aligns perfectly with your vision and goals.</p>
                        <p class="mb-30">Discover a new way of working with our co-working space leases. Join a vibrant
                            community of professionals, entrepreneurs, and innovators in our modern and collaborative
                            workspace. Enjoy the flexibility to choose from various membership options, all while
                            benefiting from high-speed internet, meeting rooms, and a dynamic environment that fosters
                            creativity and networking.</p>
                        <ul class="clearfix mb-25">
                            <li>
                                <i class="fa fa-hand-o-right"></i> Professional Variations
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right"></i> Guaranteed
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right"></i> Consulting
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right"></i> Happy Clients
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right"></i> Clean design
                            </li>
                            <li>
                                <i class="fa fa-hand-o-right"></i> Advertise
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="hotels-detail-slider simple-slider">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active h-fix">
                                    <img src="{{asset('frontend/assets/img/properties/properties-7.jpg')}}"
                                        class="d-block w-100" alt="about-photo">
                                </div>
                                <div class="carousel-item h-fix">
                                    <img src="{{asset('frontend/assets/img/properties/properties-9.jpg')}}"
                                        class="d-block w-100" alt="about-photo">
                                </div>
                                <div class="carousel-item h-fix">
                                    <img src="{{asset('frontend/assets/img/properties/properties-10.jpg')}}"
                                        class="d-block w-100" alt="about-photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Us end -->

<!-- Why Choose Us start -->
<div class="services-3 whyChooseUs bg-grea-3">
    <div class="container">
        <div class="row">
            <div
                class="col-xxl-4 col-xl-3 col-lg-12 col-sm-12 col-12 align-self-center mb-xxl-0 mb-xl-0 mb-lg-4 mb-sm-4 mb-0 wow fadeInLeft delay-04s">
                <div class="text">
                    <div class="main-title text-xxl-start text-xl-start text-lg-center mb-0">
                        <p>Our Expertise</p>
                        <h1>Why Choose Us</h1>
                    </div>
                    <P class="px">We stand out in the rental market with personalized service and a proven track
                        record of finding you not just a place to live but a place to call home</P>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-9 col-lg-12 col-sm-12 col-12 wow fadeInRight delay-04s">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="service-info-2">
                            <div class="number">1</div>
                            <div class="icon">
                                <i class="flaticon-apartment"></i>
                            </div>
                            <div class="service-info-2-ditels">
                                <h3><a href="services-1.html">Commercial Building</a></h3>
                                <P>Elevate your corporate image and productivity in our strategically located</P>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="service-info-2">
                            <div class="number">2</div>
                            <div class="icon">
                                <i class="flaticon-internet"></i>
                            </div>
                            <div class="service-info-2-ditels">
                                <h3><a href="services-1.html">Office Space</a></h3>
                                <P>Rent office space that suits your vision and fuels your ambition, because
                                    where
                                    you work matters</P>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="service-info-2">
                            <div class="number">3</div>
                            <div class="icon">
                                <i class="flaticon-vehicle"></i>
                            </div>
                            <div class="service-info-2-ditels">
                                <h3><a href="services-1.html">Co-working Space</a></h3>
                                <P>Elevate your workday in our flexible coworking spaces, where creativity and
                                    connections come to life</P>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="service-info-2">
                            <div class="number">4</div>
                            <div class="icon">
                                <i class="flaticon-coins"></i>
                            </div>
                            <div class="service-info-2-ditels">
                                <h3><a href="services-1.html">Shops/Showrrom</a></h3>
                                <P>Elevate your brand and attract customers with our high-visibility,
                                    strategically
                                    located commercial spaces</P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us end -->

<!-- Counters strat -->
<div class="counters-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center wow fadeInLeft delay-04s">
                <div class="heading">
                    <P>Our Experience</P>
                    <h1>More than 10 Years of Experience</h1>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight delay-04s">
                <div class="infos clearfix">
                    <div class="counter-box b-button b-right d-flex">
                        <div class="icon">
                            <i class="flaticon-tag"></i>
                        </div>
                        <div class="detail">
                            <h1 class="counter Starting">967</h1>
                            <p>Properties Sold</p>
                        </div>
                    </div>
                    <div class="counter-box b-button d-flex">
                        <div class="icon">
                            <i class="flaticon-business"></i>
                        </div>
                        <div class="detail">
                            <h1 class="counter">1276</h1>
                            <p>Workers Employed</p>
                        </div>
                    </div>
                    <div class="counter-box b-right d-flex">
                        <div class="icon">
                            <i class="flaticon-people"></i>
                        </div>
                        <div class="detail">
                            <h1 class="counter">396</h1>
                            <p>Awards Wining</p>
                        </div>
                    </div>
                    <div class="counter-box d-flex">
                        <div class="icon">
                            <i class="flaticon-people-1"></i>
                        </div>
                        <div class="detail">
                            <h1 class="counter">177</h1>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- Testimonial start -->
<div class="testimonial-3 comon-slick">
    <div class="container">
        <div class="main-title mb-5">
            <p>Our Testimonials</p>
            <h1>Outstanding product quality and <br>exceptional customer suppor</h1>
        </div>
        <div class="slick row comon-slick-inner wow fadeInUp delay-04s"
            data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            <div class="item slide-box">
                <div class="testimonial-inner">
                    <div class="content-box">
                        <div class="user">
                            <a href="#">
                                <img src="{{asset('frontend/assets/img/avatar/avatar-1.jpg')}}" alt="avatar">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>Karen Paran</h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>Reting</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text everLorem industry's standard dummy text
                                everLorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="testimonial-inner">
                    <div class="content-box">
                        <div class="user">
                            <a href="#">
                                <img src="{{asset('frontend/assets/img/avatar/avatar-2.jpg')}}" alt="avatar">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>
                                Pitarshon Roky
                            </h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>Reting</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text everLorem industry's standard dummy text
                                everLorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item slide-box">
                <div class="testimonial-inner">
                    <div class="content-box">
                        <div class="user">
                            <a href="#">
                                <img src="{{asset('frontend/assets/img/avatar/avatar-3.jpg')}}" alt="avatar">
                            </a>
                        </div>
                        <div class="testimonial-info">
                            <h3>
                                Roky Kitarshon
                            </h3>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-full"></i>
                                <span>Reting</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text everLorem industry's standard dummy text
                                everLorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial end -->

<!-- Partners strat -->
<div class="partners bg-grea-3">
    <div class="container">
        <h4>Brands <span>$ Partners</span></h4>
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-slider slide-box-btn">
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-1.png')}}" alt="brand">
                    </div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-2.png')}}" alt="brand">
                    </div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-3.png')}}" alt="brand">
                    </div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-4.png')}}" alt="brand">
                    </div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-5.png')}}" alt="brand">
                    </div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-6.png')}}" alt="brand">
                    </div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-1.png')}}" alt="brand">
                    </div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-2.png')}}" alt="brand">
                    </div>
                    <div class="custom-box"><img src="{{asset('frontend/assets/img/brand/brand-3.png')}}" alt="brand">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners end -->

@endsection