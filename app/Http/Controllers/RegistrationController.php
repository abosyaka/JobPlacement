<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Specialization;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function show()
    {
        $spec = Specialization::all();

        return view('/registration', [
            'specializations' => $spec
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
        //TODO
    }
}
