<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class SpecialPackagesController extends Controller
{
    function special_offer(){
        return view('frontend.special_package_page',['offers'=>Offer::all()]);
    }
}
