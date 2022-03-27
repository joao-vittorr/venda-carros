<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Financiamento 
{

    public static function calcular($valorEntrada, $parcela, $valorVei){

        $resultado = ($valorEntrada*100)/$valorVei;
        
        if( !empty($resultado) ) 
        {
            if($resultado >= 0 && $resultado <= 20) 
            {
                if($parcela >= 0 && $parcela <= 20) 
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 2.35;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                    echo "O resultado da operação é: $resultadoFinanciamento";                }
                else if($parcela >= 21 && $parcela <= 40)
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 2.40;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                else if($parcela >= 41 && $parcela <= 60)
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 2.45;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
            }


            else if($resultado >= 21 && $resultado <= 40)
            {
                if($parcela >= 0 && $parcela <= 20) 
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 2.20;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                else if($parcela >= 21 && $parcela <= 40)
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 2.25;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                else if($parcela >= 41 && $parcela <= 60){
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 2.30;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
            }


            else if($resultado >= 41 && $resultado <= 60)
            {
                if($parcela >= 0 && $parcela <= 20) 
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 2.05;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                else if($parcela >= 21 && $parcela <= 40)
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 2.10;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                else if($parcela >= 41 && $parcela <= 60)
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 2.15;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
            }


            else if($resultado >= 61 && $resultado <= 80)
            {
                if($parcela >= 0 && $parcela <= 20) 
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 1.9;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                else if($parcela >= 21 && $parcela <= 40)
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 1.95;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                else if($parcela >= 41 && $parcela <= 60)
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 2.0;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                }


            else if($resultado >= 81 && $resultado <= 90)
            {
                if($parcela >= 0 && $parcela <= 20) 
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 1.75;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                else if($parcela >= 21 && $parcela <= 40)
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 1.80;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                else if($parcela >= 41 && $parcela <= 60)
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 1.85;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
            }
            
            
            else if($resultado >= 91 && $resultado <= 100)
            {
                if($parcela >= 0 && $parcela <= 20) 
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 1.6;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                else if($parcela >= 21 && $parcela <= 40)
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 1.65;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
                else if($parcela >= 41 && $parcela <= 60)
                {
                    $valorVei = $valorVei -$valorEntrada;
                    $c = ($valorVei/$parcela);
                    $d = $c * 1.70;
                    $resultadoFinanciamento = $d;
                    $resultadoFinanciamento = number_format($resultadoFinanciamento, 2, '.', '');
                }
            }
            return $resultadoFinanciamento;
        }

    }
}