<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class SurveyController extends Controller
{
    public function viewLayanan(){
        return view('survey.layanan');
    }

    public function sendWhatapps(Array $data){
        // dd($data);
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.fonnte.com/send',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
        'target' => $data['phone'],
        'message' => 
        "Hallo ".$data['nama'].
        ", Terima kasih atas partisipasi anda mengisi survey pelayanan pasien di RUMAH SAKIT UMUM PINDAD.Penilaian anda sangat berharga untuk peningkatan pelayanan kami", 
        'countryCode' => '62', //optional
        'delay' => 10,
        ),
        CURLOPT_HTTPHEADER => array(
            'Authorization: 2qB#yoP6MKX2Z3_pDZfj' //change TOKEN to your actual token
        ),
        ));

        $response = curl_exec($curl);
        if (curl_errno($curl)) {
        $error_msg = curl_error($curl);
        }
        curl_close($curl);

        if (isset($error_msg)) {
        echo $error_msg;
        }
        echo $response;
    }

    public function endSurvey(){
        Alert::success('Survey Selesai', 'Terima kasih atas partisipasi anda mengisi survey pelayanan pasien di RUMAH SAKIT UMUM PINDAD.Penilaian anda sangat berharga untuk peningkatan pelayanan kami');
        $data['nama'] = auth()->user()->username;
        $data['phone'] = auth()->user()->phone;
        $this->sendWhatapps($data);
        auth()->logout();
        return redirect('/beranda')->with('success', 'terimakasih telah mengisi survey');
    }

    public function viewChart(){
        return view('charts');
    }

}
