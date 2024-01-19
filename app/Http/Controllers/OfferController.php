<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\OfferRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OfferController extends Controller
{
    function clientOffers()
    {
        return view('frontend.special_package_page', ['offers' => Offer::where('status',1)->get()]);
    }

    function offerBuyForm($id){
        $offer = Offer::find($id);
        return view('frontend.offer_buy_form',compact('offer'));
    }

    function offerRequestPage()
    {
        $offerRequests = OfferRequest::all();
        return view('backend.offer-request', compact('offerRequests'));
    }

    function perchaseOffer(Request $r){
        $offer = Offer::find($r->offer_id);
        $user = Auth::guard('client')->user();
        if (Hash::check($r->password, $user->password)) {
            if ($user->balance < $offer->discount_price) {
                return back()->with('error', 'Insufficient, Please Cheack Your Current Balance!');
            }
            $offerRequest = new OfferRequest();
            $offerRequest->client_id = Auth::guard('client')->user()->id;
            $offerRequest->offer_id = $offer->id;
            $offerRequest->mobile_no = $r->mobile_no;
            $offerRequest->save();
            return to_route('clientOffers')->with('msg', 'Offer Purchase Request Sent Successfully,Please Wait!');
        }
    }

    function approveOfferRequest($id)
    {
        $offerRequest = OfferRequest::find($id);
        $client = $offerRequest->client;
        $client->balance -= $offerRequest->offer->discount_price;
        $client->save();
        $offerRequest->status = 1;
        $offerRequest->save();

        return back()->with('msg', 'Offer Sent Successfully!');
    }
}
