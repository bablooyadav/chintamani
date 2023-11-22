@extends('frontend.layouts.master')
@section('content')
<section id="funfact-section" class="funfact-section av-py-default funfact-home shapes-section" data-roller="start:0.5" style="    background: #EFF3F8;">
    <div class="av-container">
        <div class="av-columns-area">
            <div class="av-column-12">
                <div class="heading-default heading-white   wow fadeInUp">
                    <h3>Insurance </h3>
                </div>
                <div class="av-columns-area funfact-wrapper">
                    <div class="av-column-3 av-sm-column-6">
                        <div class="funfact-item insurCss">
                            <img class="insuimgCss" src="{{asset('frontend/images/life-insurance.png')}}">
                            <h5> <a class="instxtCss" href="life-insurance.php">Life Insurance</a> </h5>
                        </div>
                    </div>
                    <div class="av-column-3 av-sm-column-6">
                        <div class="funfact-item insurCss">
                            <img class="insuimgCss" src="{{asset('frontend/images/HealthInsurance.png')}}">
                            <h5> <a class="instxtCss" href="life-insurance.php">Health Insurance</a> </h5>
                        </div>
                    </div>
                    <div class="av-column-3 av-sm-column-6">
                        <div class="funfact-item insurCss">
                            <img class="insuimgCss" src="{{asset('frontend/images/car-insurance.png')}}">
                            <h5> <a class="instxtCss" href="life-insurance.php">Car Insurance</a> </h5>
                        </div>
                    </div>
                    <div class="av-column-3 av-sm-column-6">
                        <div class="funfact-item insurCss">
                            <img class="insuimgCss" src="{{asset('frontend/images/HomeInsurance.png')}}">
                            <h5> <a class="instxtCss" href="life-insurance.php">Home Insurance</a> </h5>
                        </div>
                    </div>
                    <div class="av-column-3 av-sm-column-6">
                        <div class="funfact-item insurCss">
                            <img class="insuimgCss" src="{{asset('frontend/images/Two-Wheeler.png')}}">
                            <h5> <a class="instxtCss" href="life-insurance.php">Two-Wheeler</a> </h5>
                        </div>
                    </div>
                    <div class="av-column-3 av-sm-column-6">
                        <div class="funfact-item insurCss">
                            <img class="insuimgCss" src="{{asset('frontend/images/travel-insurance.png')}}">
                            <h5> <a class="instxtCss" href="life-insurance.php">Travel Insurance</a> </h5>
                        </div>
                    </div>
                    <div class="av-column-3 av-sm-column-6">
                        <div class="funfact-item insurCss">
                            <img class="insuimgCss" src="{{asset('frontend/images/Insurance__Plan.png')}}">
                            <h5> <a class="instxtCss" href="life-insurance.php">ULIP Plans</a> </h5>
                        </div>
                    </div>
                    <div class="av-column-3 av-sm-column-6">
                        <div class="funfact-item insurCss">
                            <img class="insuimgCss" src="{{asset('frontend/images/insurance-agent.png')}}">
                            <h5> <a class="instxtCss" href="life-insurance.php">Personal Insurance</a> </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection