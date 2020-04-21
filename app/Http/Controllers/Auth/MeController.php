<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;

class MeController extends Controller
{
    public function __construct(){
        $this->middleware(['auth:api']);
    }

    public function __invoke(Request $request)
    {
        $user = $request->user();
        return new UserResource($user);

        // return response()->json([
        //     'email' => $user->email,
        //     'name' => $user->name,
        //     'profile_pic' => $user->profile_pic
        // ]);
    }
}
