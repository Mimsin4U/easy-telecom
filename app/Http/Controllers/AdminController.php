<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Client;
use App\Models\AddMoneyRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin(){
        return view('backend.admin-dashboard');
    }

    function addMoneyRequestPage(){
        $addMoneys = AddMoneyRequest::all();
        return view('backend.add-money-request-page',compact('addMoneys'));
    }

    function approveAddMoney($id){
        $addMoney = AddMoneyRequest::find($id);

        $client = $addMoney->client;
        $client->balance += $addMoney->amount + (2 / 100) * $addMoney->amount;
        $client->save();

        $addMoney->status = 1;
        $addMoney->save();

        return back()->with('msg','Amount Added To Client Balance!');

    }
}
