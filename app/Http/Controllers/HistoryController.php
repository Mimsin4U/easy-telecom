<?php

namespace App\Http\Controllers;

use App\Models\AddMoneyRequest;
use App\Models\OfferRequest;
use App\Models\Recharge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    function All_history(){
        $clientID = Auth::guard('client')->user()->id;
        $addMoneys     = AddMoneyRequest::where('client_id', $clientID)->get();
        $recharges     = Recharge::where('client_id', $clientID)->get();
        $offerRequests = OfferRequest::where('client_id', $clientID)->get();
        return view('frontend.history_page',compact('addMoneys', 'recharges', 'offerRequests'));
    }
}
