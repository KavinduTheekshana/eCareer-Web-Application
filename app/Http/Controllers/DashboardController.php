<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $student = DB::table('users')->where('user_type','1')->count();
        $industry = DB::table('users')->where('user_type','2')->count();
        $qualifications = DB::table('qualifications')->count();
        $categories = DB::table('categories')->count();
        $users = DB::table('users')->orderBy('id', 'desc')->paginate();
        return view('dashboard',['student'=>$student,
                            'industry'=>$industry,
                            'qualifications'=>$qualifications,
                            'categories'=>$categories,
                            'users'=>$users]);
    }
}
