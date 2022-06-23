<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio6Controller extends Controller
{
    public function Ejercicio6(){
        return view('Ejercicio6.actividad6');
    }

    public function Resultado6(Request $request){

        $categoria = $request->categoria;
        $salario = $request->sueldo;
        $nsal = 0;
        $res = "";
        $nuevosalario = "";
        if ($categoria == 1) {
            $nsal = $salario * 0.20;
            $res = "Su Aumento Es: ". $nsal;
            $nuevosalario = "Su nuevo Salario Es: ".($salario + $nsal);
        }elseif ($categoria == 2){
            $nsal = $salario * 0.15;
            $res = "Su Aumento Es: ". $nsal;
            $nuevosalario = "Su nuevo Salario Es: ".($salario + $nsal);
        }elseif ($categoria == 3){
            $nsal =$salario * 0.10;
            $res = "Su Aumento Es: ". $nsal;
            $nuevosalario = "Su nuevo Salario Es: ".($salario + $nsal);
        }elseif($categoria ==4){
            $nsal = $salario * 0.07;
            $res = "Su Aumento Es: ". $nsal;
            $nuevosalario = "Su nuevo Salario Es: ".($salario + $nsal);
        }elseif($categoria > 4){
            $nsal = "";
            $nuevosalario = "Categoria Incorrecta";
        }
         
       

        return view('Ejercicio6.resultado6', compact('res','nuevosalario'));
    }
}
