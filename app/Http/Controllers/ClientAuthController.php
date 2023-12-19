<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientAuthController extends Controller
{
    public function login(){
        return view('frontend.login_page');
    }

    public function registration(){
        return view('frontend.registration_page');
    }


    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'password' => [
                'required',
                'min:6',
                'max:20',
                'confirmed'
            ],
        ]);

        Client::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return to_route('login_page')->with('msg','Rgistered Successfully Please Login!');
    }

    public function clientLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('client')->attempt($request->only('email', 'password'))) {
            return to_route('client.dashboard');
        }

        return redirect()->back()->with('error', 'Invalid, Please Create An Account and Try Again!');
    }


    public function clientLogOut()
    {
        Auth::guard('client')->logout();
        session()->invalidate();
        return to_route('home');
    }
}
