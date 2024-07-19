<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){

        return view('web.login');

       }

    public function authenticate(Request $request){
        $validator =Validator::make($request->all(),[
            'password' => ['required'],
            'email' => ['required','email'],
        ]);
        if($validator->passes()){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$request->get('remember'))){
                return redirect()->route('home');
            }
    else {

        return redirect()->route('login')
        ->withInput($request->only('email'))
        ->with('error','Either email and password is incorrect');
    }

        }
        else{
            return redirect()->route('login')
            ->withErrors($validator)
            ->withInput($request->only('email'));
        }
       }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
