<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;

class RegisterIndustryController extends Controller
{
    public function __invoke(Request $request)
    {
            $validator = Validator::make($request->json()->all() , [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6', 
            'nic' => 'required',
        ]);

        if($validator->fails()){
                return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create([
            'name' => $request->json()->get('name'),
            'email' => $request->json()->get('email'),
            'nic' => $request->json()->get('nic'),
            'phone' => $request->json()->get('phone'),
            'company' => $request->json()->get('company'),
            'user_type' => '2',
            'password' => Hash::make($request->json()->get('password')),
        ]);

        return new UserResource($user);
        // return response()->json(compact('user'),201);
    }
}
