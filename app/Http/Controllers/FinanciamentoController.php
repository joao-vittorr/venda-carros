<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Advert;
use App\Models\Financiamento;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FinanciamentoController extends Controller
{
    
    public function validator(array $data){
            
        $rules = [
            'valorEntrada' => 'required| numeric',
            'quantidadeParcela' => 'required| numeric',
        ];

        return Validator::make($data, $rules)->validate();
    }
    

    public function calcular(Request $request, Advert $advert){

        $arr = $request->all();
        $arr['valorEntrada'] = str_replace([".",","],["","."],$arr['valorEntrada']);
        

        $this->validator($arr);
        
        $resultado = Financiamento::calcular($arr['valorEntrada'], $arr['quantidadeParcela'], $advert->price);
    
        return view("financiamento.form", ['data' => $advert, 'res' => $resultado]);
    }

    public function index(Advert $advert){
        return view("financiamento.form", ['data'=>$advert] );
    }


}