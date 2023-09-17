<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
/* 
use Illuminate\Auth\Events\Registered; */


class AuthController extends Controller
{
    //
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        $username = $credentials['username'];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('profile/'.$username)->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');;
        }
        return back()->withErrors(['invalid' => 'Invalid credentials! Please try again.']);
    }

    public function store(Request $request){
        
        $request->validate([
            'username' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed',
            'full_name' => 'required|string',
            'profile_picture' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'bio' => 'nullable|string',
        ]);
        [$username, $password] = [$request->username, $request->password];


        $path = $request->file('profile_picture')->store('avatars');
        
        $result = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'path' => $path,
            'bio' => $request->bio,
        ]);

   

        if(Auth::attempt(['username' => $username, 'password' => $password])){
            $user = Auth::user();
            $request->session()->regenerate();
            return redirect()->intended('verification.notice');
        }
        

    }
    public function destroy(Request $request){
        auth()->logout();

        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
    public function view(){
        return view('auth/register');
    }
}
