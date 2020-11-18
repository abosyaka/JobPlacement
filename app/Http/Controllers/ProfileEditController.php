<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileEditController extends Controller
{
    public function showEdit()
    {
        if (Auth::guard('employee')->check()) {
            $user = Auth::guard('employee')->user();
        }

        return view('editProfile',[
            'user' => $user,
            'specializations' => Specialization::all()
        ]);
    }

    public function edit(Request $request){
        $user = Auth::guard('employee')->user();
        $user->name = $request->input('name');
        $user->avatar = $request->input('avatar');
        $user->specialization_id = $request->input('specialization');

        if(isset($request['password']) && !empty($request['password'])){
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect('/employeeProfile');
    }
}
