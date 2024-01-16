<?php

namespace App\Http\Controllers;

use App\Models\Farmasi;
use Illuminate\Http\Request;

class FarmasiController extends Controller
{
    public function storeFarmasi(Request $request){
        $nilai_feedack = $request['nilai'];
        $table = $request['table'];
        $data = session()->get('local_survey');
        
        $farmasi = Farmasi::create([
            'id_survey' => $data,
            'feedback' => $nilai_feedack
            ]);

        return response()->json([
            'success' => true,
            'message' => 'terkirim'
        ]);
    }
}
