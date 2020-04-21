<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\NormalUser as NormalUserResource;

class UserController extends Controller
{
     // public function __construct(){
    //     $this->middleware(['auth:api']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get articles
        $user = User::where('user_type', 1)->orWhere('user_type', 2)->orderBy('created_at','desc')->paginate(5);

        // Return collection of articles as a resource
        return NormalUserResource::collection($user);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->middleware(['auth:api']);

        $qualification = $request->isMethod('put') ? Qualification::findOrFail($request->qualification_id) : new Qualification;

        $qualification->id = $request->input('qualification_id');
        $qualification->name = $request->input('name');

        if($qualification->save()) {
            return new QualificationResource($qualification);
        }
        
    }

    public function useractive(Request $request)
    {
        // $this->middleware(['auth:api']);

        $qualification = $request->isMethod('put') ? Qualification::findOrFail($request->qualification_id) : new Qualification;

        $qualification->id = $request->input('qualification_id');
        $qualification->name = $request->input('name');

        if($qualification->save()) {
            return new QualificationResource($qualification);
        }
        
    }

    public function userdiactive(Request $request)
    {
        // $this->middleware(['auth:api']);

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
