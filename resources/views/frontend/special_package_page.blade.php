@extends('frontend.master')

@section('content')
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <h2 class="section-title">All Offers</h2>
                <div class="col-md-12">
                    <div class="latest-product">
                        <div class="product-carousel">
                            @foreach ($offers as $offer)
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="{{ asset('/') }}{{ $offer->image }}" alt="">
                                        <div class="product-hover">

                                            <a href="{{ route('client.offerBuyForm',$offer->id) }}" class="view-details-link"><i
                                                    class="fa fa-link"></i> Buy</a>
                                        </div>
                                    </div>

                                    <h2><a href="{{ route('client.offerBuyForm',$offer->id) }}">{{ $offer->title }}</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>{{ $offer->discount_price }} tk</ins> <del>{{ $offer->original_price }}
                                            tk</del>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div> <!-- End main content area -->
@endsection
