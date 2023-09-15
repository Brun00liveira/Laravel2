<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show() {
        return view('auth.register');
    }

    public function register(RegisterRequest $request){

        $user = User::create($request->validated());
        $user->password = Hash::make($request->password);
        auth()->login($user);
        return redirect('/login')->with('success', "Account successfully registered.");
    }
}
