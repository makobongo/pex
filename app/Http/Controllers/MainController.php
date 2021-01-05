<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function volumes(){
        $results = Http::get('https://poloniex.com/public?command=return24hVolume')->json();
        return ['msg' => $results];
    }
    public function ticker(){
        $results = Http::get('https://poloniex.com/public?command=returnTicker')->json();
        return ['msg' => $results];
    }
}
