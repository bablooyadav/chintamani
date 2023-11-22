@extends('frontend.layouts.master')
@section('content')
<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-heading wow fadeInLeft">
                        <h2>Career 😊</h2>
                    </div>
                    <ol class="breadcrumb-list wow fadeInRight">
                        <li><a href="index.php"><i class="fa fa-home"></i> HOME</a> &nbsp;-&nbsp;</li>
                        <li class="active">Career</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="post-section" class="post-section av-py-default shapes-section">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="heading-default text-center wow fadeInUp">
                    <h3>Current <span class="primary-color">Job Openings</span></h3>
                    <span class="separator"><span><span></span></span></span>
                </div>
            </div>
        </div>
        <div class="av-columns-area">
            <div class="av-column-4 av-md-column-6">
                <article class="post-items bigJobs">
                    <figure class="post-image post-image-absolute">
                        <div class="featured-image">
                            <a href="javascript:void(0);" class="post-hover">
                                <img src="{{asset('frontend/assets/images/blog/blogFullSize/img01.jpg')}}" alt="post_item">
                            </a>
                        </div>
                    </figure>
                    <div class="post-content">
                        <h5 class="post-title"><a href="javascript:void(0);" rel="bookmark">Talent Acquisition Specialist</a></h5>
                        <div>
                            <p>Hiring for HR professional with having experience in End to end recruitment role.</p>
                            <a href="apply_job.php" class="more-link">Apply Now</a>

                        </div>
                    </div>
                </article>
            </div>
            <div class="av-column-4 av-md-column-6">
                <article class="post-items bigJobs">
                    <figure class="post-image post-image-absolute">
                        <div class="featured-image">
                            <a href="javascript:void(0);" class="post-hover">
                                <img src="{{asset('frontend/assets/images/blog/blogFullSize/img02.jpg')}}" alt="post_item">
                            </a>
                        </div>
                    </figure>
                    <div class="post-content">

                        <h5 class="post-title"><a href="javascript:void(0);" rel="bookmark">Business Development Manager – Health Tech</a></h5>
                        <div>
                            <p>Achieving sales targets through acquisition of new clients and growing business from existing clients.
                                Connecting with the Key persons in the Account handled on a regular basis and maintaining a cordial relationship for generating further sales.</p>
                            <a href="apply_job.php" class="more-link">Apply Now</a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="av-column-4 av-md-column-6">
                <article class="post-items bigJobs">
                    <figure class="post-image post-image-absolute">
                        <div class="featured-image">
                            <a href="javascript:void(0);" class="post-hover">
                                <img src="{{asset('frontend/assets/images/blog/blogFullSize/img03.jpg')}}" alt="post_item">
                            </a>
                        </div>
                    </figure>
                    <div class="post-content">
                        <h5 class="post-title"><a href="javascript:void(0);" rel="bookmark">Business Development Manager – EDtech</a></h5>
                        <div class="post-footer">
                            <p>About Chintamani: Chintamani a series D funded startup, is building an ecosystem to serve every financial need of the aspiring individual. Fibe is a pioneer in providing best in class customer experience along with unique products</p>
                            <a href="apply_job.php" class="more-link">Apply Now</a>
                        </div>
                    </div>
                </article>
            </div>


        </div>
    </div>
    <div class="shape20"><img src="{{asset('frontend/assets/images/blog/clipArt/shape20.png')}}" alt="image"></div>
    <div class="shape21"><img src="{{asset('frontend/assets/images/blog/clipArt/shape21.png')}}" alt="image"></div>
    <div class="shape22"><img src="{{asset('frontend/assets/images/blog/clipArt/shape22.png')}}" alt="image"></div>
    <div class="shape23"><img src="{{asset('frontend/assets/images/blog/clipArt/shape23.png')}}" alt="image"></div>
</section>
@endsection