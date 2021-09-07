<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{

    public function __construct()
{
    $this->middleware('guest')->except('logout');
    $this->redirectTo = url()->previous();
}


    public function auth(Request $request)


    {
        $request->validate([
            'email' => 'required|max:255',
            'password' => 'required',
            ]
            );

            // dd($request);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect()->intended('/home');
        }else{
            return back();
        }
    }
}
