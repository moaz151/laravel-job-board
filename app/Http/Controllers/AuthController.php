<?php

namespace App\Http\Controllers;

use App\models\user;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\LoginRequest;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // signup(GET) signup(POST) login(GET) login(POST) logout(POST)

    public function showSignupForm()
    {
        return view('auth.signup', ['pagetitle' => 'Sign Up']);
    }

    public function signup(SignupRequest $request)
    {
        $user = new user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();
        Auth::login($user);
        // auth()->login($user);
        return redirect('/');

    }

    public function showLoginForm()
    {
        return view('auth.login', ['pagetitle' => 'Login']);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/');
            
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
        // auth()->logout();
    }

}
