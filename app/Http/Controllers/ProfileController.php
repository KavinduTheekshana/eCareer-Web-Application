<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;

class ProfileController extends Controller
{

    public function index()
    {
        return view('profile');
    }

    public function updateprofile(Request $request)
    {
        $user = $request->isMethod('put') ? User::findOrFail($request->id) : new User;

        $user->id = $request->input('id');
        $user->name = $request->input('name');


        if($user->save()) {
            return new UserResource($user);
        }
        
    }
    
}
