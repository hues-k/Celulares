<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Celulare;


class TelefonosControlle extends Controller
{
    public function index(){
        $telefonos = Marca::get();
        return view('home', compact('telefonos'));

    }

    public function SusModelos(Request $request){
        if(isset($request->texto)){
            $susmodelos = Celulare::wheremarca_id($request->texto)->get();
            return response()->json(
                [
                "lista"=> $susmodelos,
                "success" => true
                ]
                );

        }else{
            return response()->json(
            [
               'success' => false
            ]
            );

        }

    }
}
