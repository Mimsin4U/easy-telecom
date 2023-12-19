<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    function All_history(){
        return view('frontend.history_page');
    }
}
