<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Perawat;
use App\Models\Dokter;
use App\Models\Penunjang;
use App\Models\Farmasi;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
// use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function getchartData(){
        $query = "COUNT(feedback) as jumlah_pendaftaran";
        $pendaftaran = Pendaftaran::selectRaw($query)->groupByRaw('id_survey')->pluck('jumlah_pendaftaran');
        $labels = $pendaftaran->keys();
        $data = $pendaftaran->values();

        // dd($pendaftaran);

        return view('charts', compact('labels','data'));
    }
}
