@extends('frontend.master')

@section('content')
<div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="{{asset('/')}}frontend/img/welcome.png" alt="Slide">
						
					</li>
					<li><img src="{{asset('/')}}frontend/img/airtel.png" alt="Slide">
						
					</li>
					<li><img src="{{asset('/')}}frontend/img/banglalink.png" alt="Slide">
						
					</li>
					<li><img src="{{asset('/')}}frontend/img/grameen.png" alt="Slide">
						
					</li>
                    <li><img src="{{asset('/')}}frontend/img/robi.png" alt="Slide">
						
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Money Return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Fast Services</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure Payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New Offers</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
 
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="{{asset('/')}}frontend/img/l-airtel.png" alt="">
                            <img src="{{asset('/')}}frontend/img/l-bl.png" alt="">
                            <img src="{{asset('/')}}frontend/img/l-gp.png" alt="">
                            <img src="{{asset('/')}}frontend/img/l-robi.png" alt="">
                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    
@endsection
