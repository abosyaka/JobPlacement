<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VacancyController extends Controller
{
    public function showAdd(){
        return view('addVacancy');
    }

    public function showCompanyVacancies($id){
        $vacancies = Vacancy::all()->where('company_id','=', $id);

        return view('vacancies', [
            'vacancies' => $vacancies
        ]);
    }

    public function addVacancy(Request $request){

        $company = Auth::guard('recruiter')->user()->company;


        $vacancy = new Vacancy();
        $vacancy->title = $request->input('title');
        $vacancy->position = $request->input('position');
        $vacancy->description = $request->input('desc');
        $vacancy->exp = $request->input('exp');
        $vacancy->salary = $request->input('salary');
        $vacancy->company_id = $company->id;

        $vacancy->save();

        return redirect('/recruiterProfile');
    }
}
