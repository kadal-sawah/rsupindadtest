<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function storeDokter(Request $request){
        $nilai_feedack = $request['nilai'];
        $table = $request['table'];
        $data = session()->get('local_survey');
        
        $dokter = Dokter::create([
            'id_survey' => $data,
            'feedback' => $nilai_feedack
            ]);

        return response()->json([
            'success' => true,
            'message' => 'terkirim'
        ]);
    }
}
