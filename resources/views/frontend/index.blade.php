@extends('frontend.layouts.master')
@section('content')
@include('frontend.includes.slider')
<div id="content" class="gradiant-content">
    <section id="funfact-section" class="funfact-section bg__tsy av-py-default funfact-home shapes-section" data-roller="start:0.5">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default heading-white text-left wow fadeInUp">
                        <h3>FINANCIAL SPECIALISTS </h3>
                        <span class="separator idosCss"><span><span></span></span></span>
                        <p class="text-darkss">Chintamani Finlease Limited is one of the fastest growing <br>Financial Company (NBFC) in India. Within a span of 28+ years of operations.</p>
                    </div>
                    <div class="av-columns-area funfact-wrapper">
                        @foreach($financial as $value)
                        <div class="av-column-3 av-xs-column-6 mobielCss">
                            <div class="team-member bsoy__css">
                                <div class="team-thumb" tabindex="0">
                                    <img class="imag__fsxctwo" src="{{asset('uploads/article')}}/{{$value->image}}" alt="team_item" title="Chintamani">
                                    <div class="team-thumber">
                                        <aside class="widget widget_social_widget">
                                            <p class="red__more">{{$value->content}}.</p>
                                            <a class="p__whitess" href="#!">Read More</a>
                                        </aside>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h5 class="text-dark"><a href="javascript:void(0);">{{$value->heading}}<i class="fa fa-angle-right" aria-hidden="true"></i></a></h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features-section" class="features-section av-py-default features-home shapes-section">
        <div class="av-container">
            <div class="av-columns-area wow fadeInUp">
                <div class="av-column-7">
                    <div class="av-columns-area">
                        <div class="av-column-12">
                            <div class="heading-default less__respons text-left wow fadeInUp">
                                <h3>WHO WE ARE? </h3>
                                <span class="separator"><span><span></span></span></span>
                                <p>{{!$complete->content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="av-column-5 featuresbgwrapper">
                    <div class="features-image-wrap">
                        <div class="features-image">
                            <img src="{{asset('uploads/article')}}/{{$complete->image}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="client-section" class=" av-py-default client-home" style="background-image: url('{{ asset('frontend/images/banner__products.jpg') }}');background-size: 100% 100%;">
        <div class="av-container ">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default heading-white text-center wow fadeInUp">
                        <h3> <span class="blackhs">WE BELIEVE IN YOUR</span>
                            <span class="typewrite text-fff" data-period="2000" data-type='[ "DREAMS", "GOALS", "JOURNEY", "DREAMS" ]'>
                                <span class="wrap"></span>
                            </span>
                        </h3>
                        <span class="separator"><span><span></span></span></span>
                        <p class="blackhs">Explore our suite of customized solutions for your every financial need.</p>
                    </div>
                </div>
            </div>
            <div class="av-columns-area ">
                <div class="av-column-12">
                    <div class="av-columns-area">
                        <div class="av-column-3">
                            <div class="team-member">
                                <div class="team-thumb" tabindex="0">
                                    <img class="serv__imgs" src="{{asset('frontend/images/Business__loan.jpg')}}" alt="Chintamani All Types Loan Services Provider" title="Chintamani All Types Loan Services Provider">
                                    <div class="team-view"><a href="personal-loan-for-CA.php"><i class="fa fa-eye"></i></a></div>
                                    <div class="team-thumber">
                                        <aside class="widget widget_social_widget">
                                            <ul>
                                                <li><a href="#!"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#!"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#!"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#!"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </aside>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h5><a href="personal-loan-for-CA.php">Business Loan</a></h5>
                                    <p>Unique solutions to achieve your business needs</p>
                                </div>
                            </div>
                        </div>
                        <div class="av-column-3">
                            <div class="team-member">
                                <div class="team-thumb" tabindex="0">
                                    <img class="serv__imgs" src="{{asset('frontend/images/Business__loan.jpg')}}" alt="Chintamani All Types Loan Services Provider" title="Chintamani All Types Loan Services Provider">
                                    <div class="team-view"><a href="personal-loan-for-CA.php"><i class="fa fa-eye"></i></a></div>
                                    <div class="team-thumber">
                                        <aside class="widget widget_social_widget">
                                            <ul>
                                                <li><a href="#!"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#!"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#!"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#!"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </aside>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h5><a href="personal-loan-for-CA.php">Business Loan</a></h5>
                                    <p>Unique solutions to achieve your business needs</p>
                                </div>
                            </div>
                        </div>
                        <div class="av-column-3">
                            <div class="team-member">
                                <div class="team-thumb" tabindex="0">
                                    <img class="serv__imgs" src="{{asset('frontend/images/Personal__Loan.jpg')}}" alt="Chintamani All Types Loan Services Provider" title="Chintamani All Types Loan Services Provider">
                                    <div class="team-view"><a href="personal-loan-for-CA.php"><i class="fa fa-eye"></i></a></div>
                                    <div class="team-thumber">
                                        <aside class="widget widget_social_widget">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </aside>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h5><a href="personal-loan-for-CA.php">Personal Loan</a></h5>
                                    <p>Meet your every dream with ease</p>
                                </div>
                            </div>
                        </div>
                        <div class="av-column-3">
                            <div class="team-member">
                                <div class="team-thumb" tabindex="0">
                                    <img class="serv__imgs" src="{{asset('frontend/images/Home___Loan.webp')}}" alt="Chintamani All Types Loan Services Provider" title="Chintamani All Types Loan Services Provider">
                                    <div class="team-view"><a href="personal-loan-for-CA.php"><i class="fa fa-eye"></i></a></div>
                                    <div class="team-thumber">
                                        <aside class="widget widget_social_widget">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </aside>
                                    </div>
                                </div>
                                <div class="team-info">
                                    <h5><a href="personal-loan-for-CA.php">Lap Loan</a></h5>
                                    <p>Take a step into your <br> dream Lap Loan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features-section" class="features-section av-py-default shapes-section">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default text-center wow fadeInUp">
                        <h3 class="yyeuCss">Why choose Chintamani Finlease Limited? </h3>
                        <span class="separator"><span><span></span></span></span>
                    </div>
                </div>
            </div>
            <div class="av-columns-area wow fadeInUp">
                <div class="av-column-4 av-sm-column-6 tilter">
                    <div class="tilter__figure">
                        <div class="features-item">
                            <div class="features-inner tilter__caption">
                                <div class="features-icon">
                                    <img class="iconsgs__css" src="{{asset('frontend/images/iconsimg-1.png')}}">
                                </div>
                                <div class="features-content">
                                    <h6 class="features-title"><a href="#">Lower Interest Rates</a></h6>
                                    <p>Get loans for multiple purposes at lower interest rates to suit your needs</p>
                                </div>
                                <div class="modern-icon">
                                    <img class="iocns__tsy" src="{{asset('frontend/images/logo/iocns.png')}}">
                                </div>
                            </div>
                            <div class="tilter__deco--lines"></div>
                        </div>
                    </div>
                </div>
                <div class="av-column-4 av-sm-column-6 tilter">
                    <div class="tilter__figure">
                        <div class="features-item">
                            <div class="features-inner tilter__caption">
                                <div class="features-icon">
                                    <img class="iconsgs__css" src="{{asset('frontend/images/iconsimg__2.png')}}">
                                </div>
                                <div class="features-content">
                                    <h6 class="features-title"><a href="#">Fast Processing and Disbursal</a></h6>
                                    <p>Apply online, check your eligibility and get money directly in your bank in 10 minutes</p>
                                </div>
                                <div class="modern-icon">
                                    <img class="iocns__tsy" src="{{asset('frontend/images/logo/iocns.png')}}">
                                </div>
                            </div>
                            <div class="tilter__deco--lines"></div>
                        </div>
                    </div>
                </div>
                <div class="av-column-4 av-sm-column-6 tilter">
                    <div class="tilter__figure">
                        <div class="features-item">
                            <div class="features-inner tilter__caption">
                                <div class="features-icon">
                                    <img class="iconsgs__css" src="{{asset('frontend/images/iconsimg__3.png')}}">
                                </div>
                                <div class="features-content">
                                    <h6 class="features-title"><a href="#">Easy Repayment Options</a></h6>
                                    <p>Repay the loan amount in easy EMI with flexible tenure options</p>
                                </div>
                                <div class="modern-icon">
                                    <img class="iocns__tsy" src="{{asset('frontend/images/logo/iocns.png')}}">
                                </div>
                            </div>
                            <div class="tilter__deco--lines"></div>
                        </div>
                    </div>
                </div>
                <div class="av-column-4 av-sm-column-6 tilter">
                    <div class="tilter__figure">
                        <div class="features-item">
                            <div class="features-inner tilter__caption">
                                <div class="features-icon">
                                    <img class="iconsgs__css" src="{{asset('frontend/images/iconsimg__4.png')}}">
                                </div>
                                <div class="features-content">
                                    <h6 class="features-title"><a href="#">100% Paperless</a></h6>
                                    <p>No paperwork or physical documentation is required, and you can apply and get a personal loan completely online.</p>
                                </div>
                                <div class="modern-icon">
                                    <img class="iocns__tsy" src="images/logo/iocns.png">
                                </div>
                            </div>
                            <div class="tilter__deco--lines"></div>
                        </div>
                    </div>
                </div>
                <div class="av-column-4 av-sm-column-6 tilter">
                    <div class="tilter__figure">
                        <div class="features-item">
                            <div class="features-inner tilter__caption">
                                <div class="features-icon">
                                    <img class="iconsgs__css" src="{{asset('frontend/images/iconsimg-4.png')}}">
                                </div>
                                <div class="features-content">
                                    <h6 class="features-title"><a href="#">Safe, Secure and Transparent</a></h6>
                                    <p>Our loan application process is fully secured and safe and there are no hidden charges.</p>
                                </div>
                                <div class="modern-icon">
                                    <img class="iocns__tsy" src="{{asset('frontend/images/logo/iocns.png')}}">
                                </div>
                            </div>
                            <div class="tilter__deco--lines"></div>
                        </div>
                    </div>
                </div>
                <div class="av-column-4 av-sm-column-6 tilter">
                    <div class="tilter__figure">
                        <div class="features-item">
                            <div class="features-inner tilter__caption">
                                <div class="features-icon">
                                    <img class="iconsgs__css" src="{{asset('frontend/images/iconsimg-5.png')}}">
                                </div>
                                <div class="features-content">
                                    <h6 class="features-title"><a href="#">Collateral Free</a></h6>
                                    <p>No collateral is required to apply for our personal loans. <br><br></p>
                                </div>
                                <div class="modern-icon">
                                    <img class="iocns__tsy" src="{{asset('frontend/images/logo/iocns.png')}}">
                                </div>
                            </div>
                            <div class="tilter__deco--lines"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape1"><img src="{{asset('frontend/assets/images/service/clipArt/shape1.png')}}" alt="image"></div>
        <div class="shape2"><img src="{{asset('frontend/assets/images/service/clipArt/shape2.png')}}" alt="image"></div>
        <div class="shape3"><img src="{{asset('frontend/assets/images/service/clipArt/shape3.png')}}" alt="image"></div>
        <div class="shape4"><img src="{{asset('frontend/assets/images/service/clipArt/shape4.png')}}" alt="image"></div>
    </section>
    <section id="funfact-section" class=" funfscats av-py-default funfact-home shapes-section" data-roller="start:0.5">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="av-columns-area funfact-wrapper">
                        <div class="av-column-3 av-sm-column-6">
                            <div class="funfact-item">
                                <img src="{{asset('frontend/images/loan.png')}}">
                                <h3><span>3 Lakhs</span> +</h3>
                                <p>Max. Loan Amount</p>
                            </div>
                        </div>
                        <div class="av-column-3 av-sm-column-6">
                            <div class="funfact-item">
                                <img src="{{asset('frontend/images/thumbs-up.png')}}">
                                <h3><span>2.5 Crore</span> +</h3>
                                <p>Loans Approved</p>
                            </div>
                        </div>
                        <div class="av-column-3 av-sm-column-6">
                            <div class="funfact-item">
                                <img src="{{asset('frontend/images/rating.pn')}}g">
                                <h3><span>70 Lakhs</span> K</h3>
                                <p>Happy Customers</p>
                            </div>
                        </div>
                        <div class="av-column-3 av-sm-column-6">
                            <div class="funfact-item">
                                <img src="{{asset('frontend/images/activeuser.png')}}">
                                <h3><span>85 Lakhs</span> K</h3>
                                <p>Active Users</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="creadi___css home-bg" style="background-image: url('images/bgs--banner.jpg');">
        <div class=" ">
            <div class="av-container">
                <div class="av-columns-area">
                    <div class="av-column-6">
                        <!-- <h2>Credit Healthy Toh Credit Wealthy</h2> -->
                        <img class="resCimag" src="{{asset('frontend/images/Boost-Your-Credit-Score-With-A-Personal-Loan.jpg')}}">
                    </div>
                    <div class="av-column-6">
                        <div class="banner-form bgstyww focus-box" style="margin-top:-49px;">
                            <h2 class="txt-bold mg-0 txt-white text-center">QUICK ENQUIRY</h2>
                            <form class="signup-banner-form" id="signup-banner-form" novalidate="novalidate">
                                <div class="form-group mgtp2o pdd-sty1">
                                    <div class="input-group"> <input class="text-center number-only-field form-control input-lg trigger-ga font-18 txt-regular in-pad" id="mobile-banner-new" data-event-category="signup-organic" type="tel" name="phone_home" placeholder="Enter Your Name" maxlength="10"></div>
                                </div>
                                <div class="form-group mgtp2o pdd-sty1">
                                    <div class="input-group"> <input class="text-center number-only-field form-control input-lg trigger-ga font-18 txt-regular in-pad" id="mobile-banner-new" data-event-category="signup-organic" type="tel" name="phone_home" placeholder="Enter Mobile Number" maxlength="10"></div>
                                </div>
                                <div class="form-group mgtp2o pdd-sty1">
                                    <div class="input-group"> <input class="text-center number-only-field form-control input-lg trigger-ga font-18 txt-regular in-pad" id="mobile-banner-new" data-event-category="signup-organic" type="tel" name="phone_home" placeholder="Enter Email Address" maxlength="10"></div>
                                </div>
                                <div class="form-group mgtp2o pdd-sty1">
                                    <div class="input-group">
                                        <textarea class="text-center number-only-field form-control input-lg trigger-ga font-18 txt-regular in-pad" placeholder="Message.."></textarea>
                                    </div>
                                </div>

                                <div class="text-center pdd-sty2"><input class="btn btn-orange w-100 font-18 txt-bold tc-check" type="submit" value="Check FREE Credit Score"></div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cta-section" style="background-image:url('images/white-bg.jpg'); background-attachment: fixed; background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;">
        <div class="styl__pading">
            <div class="av-container">
                <div class="av-columns-area">
                    <div class="av-column-5  ">
                        <div class="call-wrapper">
                            <div class="cta-info">
                                <img src="{{asset('frontend/images/mobile__phonss.png')}}">
                            </div>
                        </div>
                    </div>
                    <div class="av-column-7  ">
                        <div class="cta-content-wrap">
                            <div class="  app-download-content">
                                <span class="sub-title">Download App</span>
                                <h2>Supporting Your Customers On <br> The Go With Our Mobile App</h2>
                                <br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut labore.</p>
                                <div class="btn-box">
                                    <a href="https://play.google.com/store/apps/details?id=com.chintamani.cflinstantloan" target="_blank" class="play-store-btn">
                                        <img src="{{asset('frontend/images/playstore.png')}}" alt="image">
                                        Get it on
                                        <span>Google Play</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
        .JoinDasa {
            text-align: center !important;
            font-size: 32px;
            color: #1e1e1e;
            margin-top: 56px;
        }

        .bgnary {
            font-size: 24px;
            background: #fff;
            padding: 9px 52px;
            text-transform: capitalize;
            text-decoration: none;
            font-weight: 600;
            border-radius: 63px;
            box-shadow: 3px 5px 6px 1px #071680;
        }

        .joiunUs {
            font-size: 44px;
            font-family: sans-serif;
            color: #000;
        }

        .pBcome {
            font-size: 22px;
            color: #000;
        }
    </style>
    <section id="cta-section bgerasn" style="background-image: url(images/chintaPartner.jpg);
    background-size: cover;
    height: 462px;">
        <div class="styl__pading">
            <div class="av-container">
                <div class="av-columns-area">
                    <div class="av-column-7"> </div>
                    <div class="av-column-5">
                        <div class="JoinDasa">
                            <h2 class="text-white joiunUs">JOIN AS A DSA <br> PARTNER </h2>
                            <p class="pBcome">Become a Partner Earn Upto <br> Rs 50,000 Every Month</p>
                            <a class="btn bgnary aapsCss" href="#!">JOIN AS DSA</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="post-section" class="post-section av-py-default blog-home shapes-section">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default text-center wow fadeInUp">
                        <h3>Our <span class="primary-color">Blogs</span></h3>
                        <span class="separator"><span><span></span></span></span>
                    </div>
                </div>
            </div>
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="post-carousel owl-carousel owl-theme">
                        <article class="post-items">
                            <figure class="post-image post-image-absolute">
                                <div class="featured-image">
                                    <a href="blogs-details.php" class="post-hover">
                                        <img src="{{asset('frontend/assets/images/blog/blogFullSize/img01.jpg')}}" alt="blog_item">
                                    </a>
                                </div>
                            </figure>
                            <div class="post-content">
                                <span class="post-date"> <a href="blogs-details.php"><span>14</span>Dec 2022</a> </span>
                                <h5 class="post-title"><a href="blogs-details.php" rel="bookmark">5 Tax Tips Your Workforce Should Know</a></h5>
                                <div class="post-footer">
                                    <p>We don’t need a survey to gauge how many salaried individuals would like to earn more by saving on their taxes. A key issue expected during</p>
                                    <a href="blogs-details.php" class="more-link">Read More</a>
                                    <span class="post-count">01</span>
                                </div>
                            </div>
                        </article>
                        <article class="post-items">
                            <figure class="post-image post-image-absolute">
                                <div class="featured-image">
                                    <a href="blogs-details.php" class="post-hover">
                                        <img src="{{asset('frontend/assets/images/blog/blogFullSize/img02.jpg')}}" alt="blog_item">
                                    </a>
                                </div>
                            </figure>
                            <div class="post-content">
                                <span class="post-date"> <a href="blogs-details.php"><span>15</span>Dec 2022</a> </span>
                                <h5 class="post-title"><a href="blogs-details.php" rel="bookmark">Chintamani: Your One-Click Solution For Instant Loans</a></h5>
                                <div class="post-footer">
                                    <p>Unexpected expenses can crop up at any time. In case of an emergency, getting an instant cash loan</p>
                                    <a href="blogs-details.php" class="more-link">Read More</a>
                                    <span class="post-count">02</span>
                                </div>
                            </div>
                        </article>
                        <article class="post-items">
                            <figure class="post-image post-image-absolute">
                                <div class="featured-image">
                                    <a href="javascript:void(0);" class="post-hover">
                                        <img src="{{asset('frontend/assets/images/blog/blogFullSize/img03.jpg')}}" alt="blog_item">
                                    </a>
                                </div>
                            </figure>
                            <div class="post-content">
                                <span class="post-date"> <a href="javascript:void(0);"><span>16</span>Dec 2022</a> </span>
                                <h5 class="post-title"><a href="javascript:void(0);" rel="bookmark">How To Get Personal Loans Without A Credit Score?</a></h5>
                                <div class="post-footer">
                                    <p>Life can be a journey full of surprises. You can never anticipate when it will throw a curveball. </p>
                                    <a href="javascript:void(0);" class="more-link">Read More</a>
                                    <span class="post-count">03</span>
                                </div>
                            </div>
                        </article>
                        <article class="post-items">
                            <figure class="post-image post-image-absolute">
                                <div class="featured-image">
                                    <a href="javascript:void(0);" class="post-hover">
                                        <img src="{{asset('frontend/assets/images/blog/blogFullSize/img01.jpg')}}" alt="blog_item">
                                    </a>
                                </div>
                            </figure>
                            <div class="post-content">
                                <span class="post-date"> <a href="javascript:void(0);"><span>17</span>Dec 2022</a> </span>
                                <h5 class="post-title"><a href="javascript:void(0);" rel="bookmark">5 Tax Tips Your Workforce Should Know</a></h5>
                                <div class="post-footer">
                                    <p>We don’t need a survey to gauge how many salaried individuals would like to earn more by saving on their taxes. A key issue expected during</p>
                                    <a href="javascript:void(0);" class="more-link">Read More</a>
                                    <span class="post-count">01</span>
                                </div>
                            </div>
                        </article>
                        <article class="post-items">
                            <figure class="post-image post-image-absolute">
                                <div class="featured-image">
                                    <a href="javascript:void(0);" class="post-hover">
                                        <img src="{{asset('frontend/assets/images/blog/blogFullSize/img02.jpg')}}" alt="blog_item">
                                    </a>
                                </div>
                            </figure>
                            <div class="post-content">
                                <span class="post-date"> <a href="javascript:void(0);"><span>18</span>Dec 2022</a> </span>
                                <h5 class="post-title"><a href="javascript:void(0);" rel="bookmark">Chintamani: Your One-Click Solution For Instant Loans</a></h5>
                                <div class="post-footer">
                                    <p>Unexpected expenses can crop up at any time. In case of an emergency, getting an instant cash loan</p>
                                    <a href="javascript:void(0);" class="more-link">Read More</a>
                                    <span class="post-count">02</span>
                                </div>
                            </div>
                        </article>
                        <article class="post-items">
                            <figure class="post-image post-image-absolute">
                                <div class="featured-image">
                                    <a href="javascript:void(0);" class="post-hover">
                                        <img src="{{asset('frontend/assets/images/blog/blogFullSize/img03.jpg')}}" alt="blog_item">
                                    </a>
                                </div>
                            </figure>
                            <div class="post-content">
                                <span class="post-date"> <a href="javascript:void(0);"><span>19</span>Dec 2022</a> </span>
                                <h5 class="post-title"><a href="javascript:void(0);" rel="bookmark">How To Get Personal Loans Without A Credit Score?</a></h5>
                                <div class="post-footer">
                                    <p>Life can be a journey full of surprises. You can never anticipate when it will throw a curveball. </p>
                                    <a href="javascript:void(0);" class="more-link">Read More</a>
                                    <span class="post-count">03</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape20"><img src="{{asset('frontend/assets/images/blog/clipArt/shape20.png')}}" alt="image"></div>
        <div class="shape21"><img src="{{asset('frontend/assets/images/blog/clipArt/shape21.png')}}" alt="image"></div>
        <div class="shape22"><img src="{{asset('frontend/assets/images/blog/clipArt/shape22.png')}}" alt="image"></div>
        <div class="shape23"><img src="{{asset('frontend/assets/images/blog/clipArt/shape23.png')}}" alt="image"></div>
    </section>
    <section id="testimonial-section" class="tes__mobgs av-py-default">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="heading-default heading-white text-center wow fadeInUp">
                        <h3>What Our Client's <span class="primary-color">Say's?</span></h3>
                        <span class="separator"><span><span></span></span></span>
                        <p class="blab__tset">Since our inception year 1995, we continuously thrive towards becoming reputed NBFC through ensuring highest quality delivery and customer relations.</p>
                    </div>
                </div>
            </div>
            <div class="av-columns-area">
                <div class="av-md-column-10 av-xs-column-12 mx-auto">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <div class="testimonials-item">
                            <div class="testimonials-client-thumb">
                                <div class="img-fluid">
                                    <img src="{{asset('frontend/assets/images/about/testimonial/testimonial01.png')}}" alt="testimonial" data-img-url="assets/images/about/testimonial/testimonial01.png">
                                </div>
                            </div>
                            <div class="testimonials-content">
                                <div class="testimonials-icon"><i class="fa fa-quote-right"></i></div>
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                <h4 class="blab__tset">Review's</h4>
                                <p class="blab__tset">If you really in need of money you can apply for personal loan at Chintamani Finlease Ltd they approved my Loan in just 5Hrs and disbursed the loan amount by the 2pm of next day.</p>
                                <div class="testimonials-title">
                                    <h5 class="blab__tset">Ashish Malik</h5>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials-item">
                            <div class="testimonials-client-thumb">
                                <div class="img-fluid">
                                    <img src="{{asset('frontend/assets/images/about/testimonial/testimonial02.png')}}" alt="testimonial" data-img-url="assets/images/about/testimonial/testimonial02.png">
                                </div>
                            </div>
                            <div class="testimonials-content">
                                <div class="testimonials-icon"><i class="fa fa-quote-right"></i></div>
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                <h4 class="blab__tset">Review's</h4>
                                <p class="blab__tset">If you really in need of money you can apply for personal loan at Chintamani Finlease Ltd they approved my Loan in just 5Hrs and disbursed the loan amount by the 2pm of next day.</p>
                                <div class="testimonials-title">
                                    <h5 class="blab__tset">Ashish Malik</h5>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials-item">
                            <div class="testimonials-client-thumb">
                                <div class="img-fluid">
                                    <img src="{{asset('frontend/assets/images/about/testimonial/testimonial03.png')}}" alt="testimonial" data-img-url="assets/images/about/testimonial/testimonial03.png">
                                </div>
                            </div>
                            <div class="testimonials-content">
                                <div class="testimonials-icon"><i class="fa fa-quote-right"></i></div>
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                <h4 class="blab__tset">Review's</h4>
                                <p class="blab__tset">If you really in need of money you can apply for personal loan at Chintamani Finlease Ltd they approved my Loan in just 5Hrs and disbursed the loan amount by the 2pm of next day.</p>
                                <div class="testimonials-title">
                                    <h5 class="blab__tset">Ashish Malik</h5>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials-item">
                            <div class="testimonials-client-thumb">
                                <div class="img-fluid">
                                    <img src="{{asset('frontend/assets/images/about/testimonial/testimonial04.png')}}" alt="testimonial" data-img-url="assets/images/about/testimonial/testimonial04.png">
                                </div>
                            </div>
                            <div class="testimonials-content">
                                <div class="testimonials-icon"><i class="fa fa-quote-right"></i></div>
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                <h4 class="blab__tset">Review's</h4>
                                <p class="blab__tset">If you really in need of money you can apply for personal loan at Chintamani Finlease Ltd they approved my Loan in just 5Hrs and disbursed the loan amount by the 2pm of next day.</p>
                                <div class="testimonials-title">
                                    <h5 class="blab__tset">Ashish Malik</h5>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials-item">
                            <div class="testimonials-client-thumb">
                                <div class="img-fluid">
                                    <img src="{{asset('frontend/assets/images/about/testimonial/testimonial05.png')}}" alt="testimonial" data-img-url="assets/images/about/testimonial/testimonial05.png">
                                </div>
                            </div>
                            <div class="testimonials-content">
                                <div class="testimonials-icon"><i class="fa fa-quote-right"></i></div>
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                <h4 class="blab__tset">Review's</h4>
                                <p class="blab__tset">If you really in need of money you can apply for personal loan at Chintamani Finlease Ltd they approved my Loan in just 5Hrs and disbursed the loan amount by the 2pm of next day.</p>
                                <div class="testimonials-title">
                                    <h5 class="blab__tset">Ashish Malik</h5>
                                </div>
                            </div>
                        </div>
                        <div class="testimonials-item">
                            <div class="testimonials-client-thumb">
                                <div class="img-fluid">
                                    <img src="{{asset('frontend/assets/images/about/testimonial/testimonial06.png')}}" alt="testimonial" data-img-url="assets/images/about/testimonial/testimonial06.png">
                                </div>
                            </div>
                            <div class="testimonials-content">
                                <div class="testimonials-icon"><i class="fa fa-quote-right"></i></div>
                                <div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                <h4 class="blab__tset">Review's</h4>
                                <p class="blab__tset">If you really in need of money you can apply for personal loan at Chintamani Finlease Ltd they approved my Loan in just 5Hrs and disbursed the loan amount by the 2pm of next day.</p>
                                <div class="testimonials-title">
                                    <h5 class="blab__tset">Ashish Malik</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cta-section" class="cta-section cta-home" style="background-image:url('assets/images/cta_bg.jpg'); background-attachment: fixed;">
        <div class="cta-overlay">
            <div class="av-container">
                <div class="av-columns-area">
                    <div class="av-column-5 my-auto">
                        <div class="call-wrapper">
                            <div class="call-icon-box"><i class="fa fa-user"></i></div>
                            <div class="cta-info">
                                <div class="call-title">Call Us:</div>
                                <div class="call-phone"><a href="#">+(91) 9212132955</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="av-column-7 my-auto">
                        <div class="cta-content-wrap">
                            <div class="cta-content">
                                <span class="cta-icon-wrap"><i class="fa fa-phone"></i></span>
                                <h4>Professional and fastest growing Financial Company</h4>
                                <p>Chintamani Finlease Limited is one of the fastest growing Financial Company (NBFC) in India. Within a span of 28+ years of operations.</p>
                            </div>
                            <div class="cta-btn">
                                <a href="#!" class="av-btn av-btn-primary av-btn-bubble">Apply Loan <i class="fa fa-arrow-right"></i> <span class="bubble_effect"><span class="circle top-left"></span> <span class="circle top-left"></span> <span class="circle top-left"></span> <span class="button effect-button"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq-section" class="faq-section av-py-default">
        <div class="av-container">
            <div class="av-columns-area">
                <div class="av-column-9">
                    <div class="heading-default wow fadeInUp">
                        <h3>Frequently Asked <span class="danger-color">Question?</span></h3>
                        <h4>How Can We Help You?</h4>
                        <p>We’ve put together many of the commonly raised questions our customers have. Here’s everything you need to know about our products & services. Simply use the search function below, or view all questions based on categories. Go ahead, ask us anything!</p>
                    </div>
                </div>
                <div class="av-column-3">
                    <div class="heading-default text-center wow fadeInUp">
                        <img class="img-fluid" src="{{asset('frontend/images/FAQ-hero-1.gif')}}">
                    </div>
                </div>
            </div>
            <div class="av-columns-area">
                <div class="av-column-12">
                    <div class="av-columns-area faq-type">
                        <div class="av-column-6 faqwbCss faq-item technical">
                            <div class="accordion accordion-default">
                                <div class="accordion-title"><button type="button" class="accordion-button"><span class="text-white">Chintamani & the benefits </span> <i class="fa fa-plus"></i></button></div>
                                <div class="accordion-content">
                                    <p>Chintamani Finlease Limited is one of the fastest growing Non-Banking Financial Company (NBFC) for Personal loan in Delhi Ncr, business loan, gold loan, loan against property and car loan. Within a span of 28+ years of operations, it has created a distinct image for itself in the industry. We are an RBI registered NBFC and acting as a quick and easy credit provider to all the sections of the society.</p>
                                    <p>Since our inception year 1995, we continuously thrive towards becoming reputed NBFC through ensuring highest quality delivery and customer relations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="av-column-6 faqwbCss faq-item general">
                            <div class="accordion accordion-default">
                                <div class="accordion-title"><button type="button" class="accordion-button"><span class="text-white">What is Chintamani ? </span> <i class="fa fa-plus"></i></button></div>
                                <div class="accordion-content">It is a long established fact that a reader will distracted by the readable content of a page when.</div>
                            </div>
                        </div>
                        <div class="av-column-6 faqwbCss faq-item pre-sales">
                            <div class="accordion accordion-default">
                                <div class="accordion-title"><button type="button" class="accordion-button"><span class="text-white">Frequently Asked </span> <i class="fa fa-plus"></i></button></div>
                                <div class="accordion-content">It is a long established fact that a reader will distracted by the readable content of a page when.</div>
                            </div>
                        </div>
                        <div class="av-column-6 faqwbCss faq-item common">
                            <div class="accordion accordion-default">
                                <div class="accordion-title"><button type="button" class="accordion-button"><span class="text-white">Frequently Asked </span> <i class="fa fa-plus"></i></button></div>
                                <div class="accordion-content">It is a long established fact that a reader will distracted by the readable content of a page when.</div>
                            </div>
                        </div>
                        <div class="av-column-6 faqwbCss faq-item affiliates">
                            <div class="accordion accordion-default">
                                <div class="accordion-title"><button type="button" class="accordion-button"><span class="text-white">Frequently Asked </span> <i class="fa fa-plus"></i></button></div>
                                <div class="accordion-content">It is a long established fact that a reader will distracted by the readable content of a page when.</div>
                            </div>
                        </div>
                        <div class="av-column-6 faqwbCss faq-item common">
                            <div class="accordion accordion-default">
                                <div class="accordion-title"><button type="button" class="accordion-button"><span class="text-white">Frequently Asked </span> <i class="fa fa-plus"></i></button></div>
                                <div class="accordion-content">It is a long established fact that a reader will distracted by the readable content of a page when.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection