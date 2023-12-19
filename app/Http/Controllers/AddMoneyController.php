<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMoneyController extends Controller
{
    function addMoney(){
        return view('frontend.add_money_form');
    }
}
