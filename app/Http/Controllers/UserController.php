<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function showHalamanUtama(){
        return view('beranda.beranda');
    }

    public function register(Request $request){
        // dd($request);
        $inFields = $request->validate([
            'username' => ['required', 'min:3'],
            'phone' => ['required', 'min:10', Rule::unique('users','phone')],
            'category' => ['required']
        ]);

        $user = User::create($inFields);

        $lastId = $user->id;

        // session('local_ID', $lastId);
        session()->put('local_ID', $lastId);
        
        $survey = Survey::create([
            'user_id' => $lastId,
            'status' => 1
            ]);
            
        $lastSurvey = $survey->id;
            // session('local_survey', $lastSurvey);
        session()->put('local_survey', $lastSurvey);

        auth()->login($user);
        return redirect('/create-survey')->with('success', 'terimakasih telah mengikuti survey');
    }
}

