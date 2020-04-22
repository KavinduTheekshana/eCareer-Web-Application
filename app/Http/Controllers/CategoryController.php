<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Resources\Category as CategoryResource;
use DB;

class CategoryController extends Controller
{

    public function index()
    {
       $category = DB::table('categories')
       ->join('qualifications', 'categories.qualification_id', '=', 'qualifications.id')
       ->select('categories.*', 'qualifications.name as qualification','qualifications.id as qualificationid')
       ->orderBy('categories.created_at','desc')->paginate(5);

       return CategoryResource::collection($category);
    }

    public function store(Request $request)
    {
        $category = $request->isMethod('put') ? Category::findOrFail($request->category_id) : new Category;
        $category->id = $request->input('category_id');
        $category->qualification_id = $request->input('qualification_id');
        $category->name = $request->input('name');

        if($category->save()) {
            return new CategoryResource($category);
        }
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if($category->delete()) {
            return new CategoryResource($category);
        } 
    }


    
    public function category()
    {
        return view('category');
    }
}
