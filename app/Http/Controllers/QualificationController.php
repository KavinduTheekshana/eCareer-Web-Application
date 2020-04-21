<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualification;
use App\Http\Resources\Qualification as QualificationResource;

class QualificationController extends Controller
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
        $qualification = Qualification::orderBy('created_at','desc')->paginate(5);

        // Return collection of articles as a resource
        return QualificationResource::collection($qualification);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get article
        $qualification = Qualification::findOrFail($id);

        // Return single article as a resource
        return new QualificationResource($qualification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get article
        $qualification = Qualification::findOrFail($id);

        if($qualification->delete()) {
            return new QualificationResource($qualification);
        }    
    }


   

  

    public function allqualifications()
    {
        // Get articles
        $qualification = Qualification::orderBy('created_at','desc')->get();

        // Return collection of articles as a resource
        return QualificationResource::collection($qualification);
    }
}
