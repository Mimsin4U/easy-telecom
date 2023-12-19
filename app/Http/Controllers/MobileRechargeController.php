<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileRechargeController extends Controller
{
    function recharge(){
        return view('frontend.mobile_recharge_form');
    }
}
