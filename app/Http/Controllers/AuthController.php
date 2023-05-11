<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function sigin(){
        return view('sigin');
    }

    public function login(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',

        ]);
        if (Auth::attempt($validatedData)) {
            if (auth()->user()->is_admin)
            return redirect()-> route('dashboard');
            return redirect()-> route('service');

        }
        else{
            return view ('sigin' );
        }
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string',

        ]);
        $user=User::create([
        'name' => $validatedData['name'],
         'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),]);
        if (Auth::attempt([
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ])) {

            return redirect()-> route('service');

        }
        else{
            return view ('sigin' );
        }
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();
        return redirect()-> route('index');
    }

}
