<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'username' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed',
            'full_name' => 'required|string',
            'profile_picture' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'bio' => 'nullable|string',
        ]);
        $imageName = time().'.'.$request->profile_picture->extension();  

        dd($imageName);

    }

    public function view(){
        return view('auth/register');
    }
}
