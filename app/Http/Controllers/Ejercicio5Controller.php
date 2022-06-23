<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio5Controller extends Controller
{
    public function Ejercicio5(){
        return view('Ejercicio5.actividad5');
    }

    public function Resultado5(Request $request){

        $num1 = $request->num1;
        $num2 = $request->num2;
        $caracter = $request->caracter;
        $resultado = 0;

        if ($caracter == '+') {
            $resultado =  "El resultado de la suma es: ".$num1 + $num2;
            
        }
        elseif($caracter == '-') {
            $resultado = "El resultado de la resta es: ". $num1 - $num2;
        }
        elseif($caracter == '*') {
            $resultado = "El resultado de la multiplicación es: ". $num1 * $num2;
        }
        elseif($caracter == '/') {
            $resultado = "El cociente es: ". $num1 / $num2;
        }
        elseif($caracter == '%') {
            $resultado = "El residuo es: ". $num1 % $num2;
        }
        else{
            $resultado = "Caracter Incorrecto";
        }


        return view('Ejercicio5.resultado5', compact('resultado'));
    }
}
