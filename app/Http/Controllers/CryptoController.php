<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CryptoController extends Controller
{
    //

    public function home(){
        $top = file_get_contents('https://min-api.cryptocompare.com/data/top/totalvol?limit=12&tsym=MXN');
        $top = json_decode($top);

        $data = file_get_contents('https://min-api.cryptocompare.com/data/all/coinlist');
        $data = json_decode($data);

        $curr = file_get_contents('https://openexchangerates.org/api/currencies.json');
        $curr = json_decode($curr);

        return view('welcome')->with('top',$top)
                              ->with('coins',$data->Data)
                              ->with('currency',$curr);
    }

    public function getTop(){
        $response = file_get_contents('https://openexchangerates.org/api/currencies.json');
        $response = json_decode($response);
        dd($response);
    }

    public function getExchange(Request $request){
        $baseUrl="https://min-api.cryptocompare.com/data/pricemulti?";
        $fsyms="fsyms=";
        $tsyms="&tsyms=";
        foreach($request->crypto as $cryp){
            $fsyms.=$cryp.",";
        }

        foreach($request->currencies as $curr){
            $tsyms.=$curr.",";
        }
        $baseUrl.=$fsyms;
        $baseUrl.=$tsyms;
        $response = file_get_contents($baseUrl);
        $response = json_decode($response);

        return view('consult')->with('exchanges',$response);
        dd($response);
        
    }
}
