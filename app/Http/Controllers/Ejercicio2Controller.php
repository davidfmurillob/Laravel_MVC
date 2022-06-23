<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{
    public function Ejercicio2(){
        return view('Ejercicio2.actividad2');
    }

    public function Resultado2(Request $request){

        $num1 = $request->num1;
        $num2 = $request->num2;
        $num3 = $request->num3;

        $practica = $request->practica;
        $notafinal = $request->nfinal;
        
        $prom = ($num1 + $num2 + $num3)/3;

        $promnotas = $prom * 0.5;
        $pract = $practica * 0.30;
        $nfin = $notafinal * 0.20;

        $promedio = $promnotas + $pract + $nfin ;

        return view('Ejercicio2.resultado2', compact('promedio'));
    }
}
