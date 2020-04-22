<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualification;
use App\Http\Resources\Qualification as QualificationResource;

class QualificationController extends Controller
{

    public function index()
    {
        $qualification = Qualification::orderBy('created_at','desc')->paginate(5);

        return QualificationResource::collection($qualification);
    }

    public function store(Request $request)
    {
        // return $request->input('name');
        $qualification = $request->isMethod('put') ? Qualification::findOrFail($request->qualification_id) : new Qualification;

        $qualification->id = $request->input('qualification_id');
        $qualification->name = $request->input('name');

        if($qualification->save()) {
            return new QualificationResource($qualification);
        }
        
    }

    public function show($id)
    {
        $qualification = Qualification::findOrFail($id);
        return new QualificationResource($qualification);
    }

    public function destroy($id)
    {
        $qualification = Qualification::findOrFail($id);

        if($qualification->delete()) {
            return new QualificationResource($qualification);
        }    
    }


    public function allqualifications()
    {
        $qualification = Qualification::orderBy('created_at','desc')->get();
        return QualificationResource::collection($qualification);
    }
}
