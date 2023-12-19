<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialPackagesController extends Controller
{
    function special_offer(){
        return view('frontend.special_package_page');
    }
}
