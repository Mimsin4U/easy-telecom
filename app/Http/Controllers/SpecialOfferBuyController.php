<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialOfferBuyController extends Controller
{
    function OfferPurchase(){
        return view('frontend.offer_buy_form');
    }
}
