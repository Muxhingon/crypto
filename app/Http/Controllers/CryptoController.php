<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptoController extends Controller
{
    //

    public function home(){
        $top = file_get_contents('https://min-api.cryptocompare.com/data/top/totalvol?limit=12&tsym=MXN');
        $top = json_decode($top);

        return view('welcome')->with('top',$top);
    }

    public function getTop(){
        $response = file_get_contents('https://min-api.cryptocompare.com/data/all/coinlist');
        $response = json_decode($response);
        dd($response);
    }
}
