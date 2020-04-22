<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignOutController extends Controller
{
    public function redirect(){
        $cookie = \Cookie::forget('authToken');
        return redirect('login')->withCookie($cookie);
    }
}
