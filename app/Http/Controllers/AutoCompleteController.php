<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutoCompleteController extends Controller
{
    public function index(){
        return view('home');
    }

    public function search(Request $request){
        $search = $request->input('search');

        if($search == ''){
            $result = Vacancy::all();
        }else{
            $result = DB::table('vacancies')
                ->select('id','title')
                ->where('title','LIKE','%'.$search.'%')
                ->get();
        }

        $response = array();
        foreach($result as $vacancy){
            $response[] = array("value"=>'/vacancyDetails/'.$vacancy->id,"label"=>$vacancy->title);
        }


        return response()->json($response);
    }

    public function searchAll(Request $request){
        $search = $request->input('search');

        $result = DB::table('vacancies')
            ->where('title','LIKE','%'.$search.'%')
            ->get();

        return view('search', [
            'result'=>$result
        ]);
    }
}
