<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Recruiter;
use App\Models\Specialization;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function show()
    {
        $spec = Specialization::all();
        $companies = Company::all();

        return view('/registration', [
            'specializations' => $spec,
            'companies' => $companies
        ]);
    }

    public function registerEmployee(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->input('name');
        $employee->surname = $request->input('surname');
        $employee->phone_num = $request->input('tel');
        $employee->email = $request->input('email');
        $employee->password = bcrypt($request->input('password'));
        $employee->specialization_id = $request->input('specialization', 1);

        $employee->save();
        return redirect('/login');
    }

    public function registerHirer(Request $request)
    {
        $recruiter = new Recruiter();
        $recruiter->name = $request->input('name');
        $recruiter->surname = $request->input('surname');
        $recruiter->phone_num = $request->input('phone');
        $recruiter->email = $request->input('email');
        $recruiter->password = bcrypt($request->input('password'));
        $recruiter->company_id = $request->input('company', 1);

        $recruiter->save();
        return redirect('/login');
    }
}
