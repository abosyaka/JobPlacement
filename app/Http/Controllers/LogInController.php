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
        } elseif (Auth::guard('recruiter')->attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect('/recruiterProfile');
        }

        return back();
    }

    public function logout()
    {
        if(Auth::guard('employee')->check()) {
            Auth::guard('employee')->logout();
        }
        elseif (Auth::guard('recruiter')->check()){
            Auth::guard('recruiter')->logout();
        }
        return redirect('/');
    }
}
