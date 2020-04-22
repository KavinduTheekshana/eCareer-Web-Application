<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\NormalUser as NormalUserResource;

class UserController extends Controller
{

    public function index()
    {
        $user = User::where('user_type', 1)->orWhere('user_type', 2)->orderBy('created_at','desc')->paginate(5);
        return NormalUserResource::collection($user);
    }

    public function store(Request $request)
    {
        $qualification = $request->isMethod('put') ? Qualification::findOrFail($request->qualification_id) : new Qualification;

        $qualification->id = $request->input('qualification_id');
        $qualification->name = $request->input('name');

        if($qualification->save()) {
            return new QualificationResource($qualification);
        }
        
    }

    public function useractive(Request $request)
    {
        $qualification = $request->isMethod('put') ? Qualification::findOrFail($request->qualification_id) : new Qualification;

        $qualification->id = $request->input('qualification_id');
        $qualification->name = $request->input('name');

        if($qualification->save()) {
            return new QualificationResource($qualification);
        }
        
    }

    public function userdiactive(Request $request)
    {
        $qualification = $request->isMethod('put') ? Qualification::findOrFail($request->qualification_id) : new Qualification;

        $qualification->id = $request->input('qualification_id');
        $qualification->name = $request->input('name');

        if($qualification->save()) {
            return new QualificationResource($qualification);
        }
        
    }




    public function users()
    {
        return view('users');
    }
}
