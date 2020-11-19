<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    //
    public function showEmployee()
    {
        return view('finderProfile');
    }

    public function showHirer(){
        return view('hirerProfile');
    }
}
