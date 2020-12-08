<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function showSuggestions()
    {
        if (Auth::guard('employee')->check()) {
            $user = Auth::guard('employee')->user();
        }

        $vacancies = Vacancy::all();
        $suggestions = [];

        foreach ($vacancies as $vacancy) {
            if ($vacancy->specialization_id==$user->specialization_id) {
                array_push($suggestions, $vacancy);
            }
        }

        return view('suggestions',[
            'user' => $user,
            'suggestions' => $suggestions
        ]);
    }


}
