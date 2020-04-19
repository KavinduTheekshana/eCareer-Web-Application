<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function index()
    {
        return view('qualification');
    }

    public function addqualifications()
    {
        return view('addqualification');
    }
}
