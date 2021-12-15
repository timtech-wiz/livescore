<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LivescoreController extends Controller
{
    public function score(){
        $date = date('Y-m-d');
        //$date = '2021-08-01';
        //$response = Http::get("https://api.soccersapi.com/v2.2/livescores/?user=ajetetimothysamuel&token=b3bc2ff8a27faac87e04e74f2470412a&t=today");
       
        $response = Http::get("https://api.soccersapi.com/v2.2/fixtures/?user=ajetetimothysamuel&token=b3bc2ff8a27faac87e04e74f2470412a&t=schedule&d=".$date."&league_id=1609");
      
        return view('index', [
            'response' => $response
        ]);
    }


    public function about(){
        return view('about');
    }
}
