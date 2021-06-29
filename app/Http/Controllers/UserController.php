<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function signup(){
        //
    }

    public function signin(){
        //
    }

    public function logout(Request $request){
        try{
            \Auth::user()->token()->delete();

            return response()->json([
                'message' => 'User Successfully logged out'
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'message' => 'Error logging user out'
            ], 400);
        }

    }


    public function resetPassword(){
        //
    }

}

