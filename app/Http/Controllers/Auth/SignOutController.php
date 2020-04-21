<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignOutController extends Controller
{
    // public function __construct(){
    //     auth()->logout();
    // }


    // public function __invoke()
    // {
    //     auth()->logout();
    // }

    public function redirect(){
        $cookie = \Cookie::forget('authToken');
        return redirect('login')->withCookie($cookie);
        // Cookie::queue(Cookie::forget('authToken'));
        // auth()->logout();
    }
}
