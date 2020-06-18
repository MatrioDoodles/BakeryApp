<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class LogController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        if (Auth::attempt(['email' => Input::get('email'), 'password' =>  Input::get('passwd')])) {
            // Authentication passed...
            return redirect()->intended('/');
            
        }
        else return redirect()->intended('error');
    }
    public function lgout()
    {
        Auth::logout();
        return redirect()->intended('/');

    }
}