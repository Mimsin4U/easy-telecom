@extends('frontend.master')

@section('content')

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">All History</h2>
                    <div class="product-carousel">
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('/')}}frontend/img/product-1.jpg" alt="">
                                <div class="product-hover">
                                    
                                    <a href="" class="view-details-link"><i class="fa fa-link"></i> Buy</a>
                                </div>
                            </div>
                            
                            <h2><a href="">Banglalink 1000 min</a></h2>
                            
                            <div class="product-carousel-price">
                                <ins>460 tk</ins> <del>607 tk</del>
                            </div> 
                        </div>
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->
@endsection