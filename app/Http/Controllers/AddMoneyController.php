<?php

namespace App\Http\Controllers;

use App\Models\AddMoneyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AddMoneyController extends Controller
{
    function addMoneyForm(){
        return view('frontend.add_money_form');
    }

    function addMoneyRequest(Request $r){

        if (Hash::check($r->password, Auth::guard('client')->user()->password)) {
            $addMoney = new AddMoneyRequest();
            $addMoney->client_id = Auth::guard('client')->user()->id;
            $addMoney->payment_method = $r->payment_method;
            $addMoney->transaction_id = $r->transaction_id;
            $addMoney->amount = $r->amount;
            $addMoney->save();

            // $addMoney->amount = $r->amount + $r->amount*100/2;
            return to_route('home')->with('msg','Added Successfully,Please wait for Approval!');
        }
        return back()->with('error','Password Does not Match!');
    }
}
