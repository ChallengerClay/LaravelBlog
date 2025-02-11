<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function getSignup(){
        return view('home.signup');
    }

    public function postSignup(SignupRequest $request){

        $validated = $request->validated();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password before saving
        ]);

        Auth::login($user);

        return redirect('/')->with('message', 'Registration successful!');

    }

    public function getLogin(){
        return view('home.login');
    }

    public function postLogin(LoginRequest $request){
        // Retrieve the validated input data
        $validated = $request->validated();

        // Attempt to authenticate the user
        if (Auth::attempt($validated)) {
            // If successful, redirect the user to the dashboard
            return redirect()->intended('/')->with('message','welcome back');
        }

        // If authentication fails, redirect back with an error message
        return back()->with('error', 'Invalid mail or password, try again');
    }

    public function getLogout(){
        Auth::Logout();
        return redirect('login')->with('message','session ended');
    }
}
