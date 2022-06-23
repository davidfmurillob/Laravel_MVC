<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio1Controller extends Controller
{
    public function Ejercicio1(){
        return view('Ejercicio1.actividad1');
    }

    public function Resultado1(Request $request){
        $num1 = $request->num1;
        $num2 = $request->num2;

        $resultado = $num1 + $num2;
        return view('Ejercicio1.resultado1', compact('resultado'));

    }
}
