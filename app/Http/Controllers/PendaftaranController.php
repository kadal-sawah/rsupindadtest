<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function storePendaftaran(Request $request){
        // dd($request);
        $nilai_feedack = $request['nilai'];
        $table = $request['table'];
        $data = session()->get('local_survey');
        
        $pendaftaran = Pendaftaran::create([
            'id_survey' => $data,
            'feedback' => $nilai_feedack
            ]);

        return response()->json([
            'success' => true,
            'message' => 'terkirim'
        ]);

    }
}
