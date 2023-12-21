<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;

class CreateOfferController extends Controller
{
    public static $path = 'offer-images/';
    
    function create_offers(){
        return view('backend.create_offers_form');
    }


    function add_offers(Request $r){

        $imgName ='Offer-image'.time().'.'.$r->image->getClientOriginalExtension();
        $r->image->move(public_path(self::$path),$imgName);


        $offer =new Offer();
        $offer->title           = $r->title;
        $offer->original_price  = $r->original_price;
        $offer->discount_price  = $r->discount_price;

        $offer->image           = self::$path.$imgName;

        $offer->save(); 

        return back()->with('notification', 'Offer Added Successfully');
    }
}
