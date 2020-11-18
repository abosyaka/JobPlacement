<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogInController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        if (Auth::guard('employee')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('/employeeProfile');
        }

        return back();
    }

    public function logout()
    {
        Auth::guard('employee')->logout();
        return redirect('/');
    }
}
