<?php

namespace App\Http\Controllers;

use App\Models\Recharge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RechargeController extends Controller
{
    function recharge(){
        return view('frontend.mobile_recharge_form');
    }
    function mobileRecharge(Request $r){
        $user = Auth::guard('client')->user();
        if (Hash::check($r->password, $user->password)) {
            if ($user->balance < $r->amount) {
                return back()->with('error', 'Insufficient, Please Cheack Your Current Banance!');
            }
            $recharge = new Recharge();
            $recharge->client_id = Auth::guard('client')->user()->id;
            $recharge->operator = $r->operator;
            $recharge->mobile_no = $r->mobile_no;
            $recharge->amount = $r->amount;
            $recharge->save();
            return back()->with('msg','Recharge Request Sent Successfully,Please Wait!');
        }
        return back()->with('error', 'Password Does not Match!');
    }

    function rechargeRequestPage()
    {
        $recharges = Recharge::all();
        return view('backend.recharge-request', compact('recharges'));
    }

    function approveRecharge($id)
    {
        $recharge = Recharge::find($id);

        $client = $recharge->client;
        $client->balance -= $recharge->amount;
        $client->save();

        $recharge->status = 1;
        $recharge->save();

        return back()->with('msg', 'Recharge Successfull!');
    }
}
