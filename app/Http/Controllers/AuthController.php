<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_view()
    {
        return view('auth.login');
    }

    public function login_action(LoginRequest $request) {
        if(auth()->guard('admin')->attempt($request->only('username', 'password'))){

            return redirect()->route('dashboard');
        }
        return redirect()->route('login.view')
            ->with(['error' => "البيانات غير صحيحة"]);
    }

    public function logout() {
        auth()->guard('admin')->logout();
        return redirect()->route('login.view');
    }
}
