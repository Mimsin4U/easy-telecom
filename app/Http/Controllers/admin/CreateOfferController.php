<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\OfferRequest;

class CreateOfferController extends Controller
{
    public static $path = 'offer-images/';

    function index(){
        $offers = Offer::all();
        return view('backend.manage-offer',compact('offers'));
    }

    function changeOfferStatus($id){
        $offer = Offer::find($id);
        if($offer->status == 1){
            $offer->status = 0;
        }else{
            $offer->status = 1;
        }
        $offer->save();
        return back()->with('msg', 'Offer Status Updated!');
    }

    function deleteOffer($id){
        $offer = Offer::find($id);
        $pendingOfferRequests = OfferRequest::where('offer_id',$offer->id)->where('status',0)->get(['id']);
        if($pendingOfferRequests->count() > 0 ){
            return back()->with('error', 'Can not Delete,This Offer Has Some Pending  Request!');
        }
        $offerRequests = OfferRequest::where('offer_id',$offer->id)->get(['id']);
        OfferRequest::destroy($offerRequests->toArray());
        $offer->delete();
        return back()->with('msg', 'Offer Deleted !');
    }

    function create_offers(){
        return view('backend.create_offers_form');
    }

    function add_offers(Request $r){
        $imgName ='Offer-image'.time().'.'.$r->image->getClientOriginalExtension();
        $r->image->move(public_path(self::$path),$imgName);
        $offer = new Offer();
        $offer->title           = $r->ttlei;
        $offer->original_price  = $r->original_price;
        $offer->discount_price  = $r->discount_price;
        $offer->image           = self::$path.$imgName;
        $offer->save(); 

        return back()->with('msg', 'Offer Added Successfully');
    }
}
