<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use Illuminate\Http\Request;

class PerawatController extends Controller
{
    public function storePerawat(Request $request){
        $nilai_feedack = $request['nilai'];
        $table = $request['table'];
        $data = session()->get('local_survey');
        
        $perawat = Perawat::create([
            'id_survey' => $data,
            'feedback' => $nilai_feedack
            ]);

        return response()->json([
            'success' => true,
            'message' => 'terkirim'
        ]);
    }
}
