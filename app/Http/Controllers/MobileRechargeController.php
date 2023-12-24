<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Client;
use App\Models\Recharge;
use App\Models\Recharges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MobileRechargeController extends Controller
{
    function recharge(){
        return view('frontend.mobile_recharge_form');
    }
    function mobileRecharge(Request $r){
        if (Hash::check($r->password, Auth::guard('client')->user()->password)) {
        $recharge = new Recharge();
        $recharge->client_id = Auth::guard('client')->user()->id;
        $recharge->operator = $r->operator;
        $recharge->mobile_no = $r->mobile_no;
        $recharge->amount = $r->amount;
        $recharge->save();

        $client = $recharge->client;
        $client->balance -= $r->amount;
        $client->save();

        return back()->with('msg','Recharge Request Sent Successfully,Please Wait!');
        }
        return back()->with('error', 'Password Does not Match!');

    }
}
