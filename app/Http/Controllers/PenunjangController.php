<?php

namespace App\Http\Controllers;

use App\Models\Penunjang;
use Illuminate\Http\Request;

class PenunjangController extends Controller
{
    public function storePenunjang(Request $request){
        $nilai_feedack = $request['nilai'];
        $table = $request['table'];
        $data = session()->get('local_survey');
        
        $penunjang = Penunjang::create([
            'id_survey' => $data,
            'feedback' => $nilai_feedack
            ]);

        return response()->json([
            'success' => true,
            'message' => 'terkirim'
        ]);
    }
}
