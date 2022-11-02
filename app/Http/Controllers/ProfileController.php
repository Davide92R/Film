<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function user(){
        //$films=film::where('author', Auth::user()->name)->get();
        $films = Auth::user()->films()->get();
        return view('user', compact('films'));
    }

    public function storeProfile(Request $request){

        Auth::user()->profile()->create(
            [
                'phone'=>$request->phone,
                'city'=>$request->city,
                'cap'=>$request->cap,
            ]
        );
        // $profile = Profile::create(
        //     [
        //         'phone'=>$request->phone,
        //         'city'=>$request->city,
        //         'cap'=>$request->cap,
        //         'user_id'=>Auth::id(),
        //     ]
        // );
    }
}
