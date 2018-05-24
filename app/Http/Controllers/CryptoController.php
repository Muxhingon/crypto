<?php

namespace App\Http\Controllers;

use Validator;

use Illuminate\Http\Request;
use App\Http\Requests\CryptoRequest;
class CryptoController extends Controller
{
    //

    public function home(){
        $top = file_get_contents('https://min-api.cryptocompare.com/data/top/totalvol?limit=5&tsym=MXN');
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
        $amounts = explode(",",$request->amounts);
        $baseUrl="https://min-api.cryptocompare.com/data/pricemultifull?";
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

        return view('consult')->with('exchanges',$response->RAW)
                             ->with('amounts',$amounts);
        dd($response);
        
    }
}
