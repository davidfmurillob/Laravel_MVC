<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio4Controller extends Controller
{
    public function Ejercicio4(){
        return view('Ejercicio4.actividad4');
    }

    public function Resultado4(Request $request){

        $x = $request->x;

        $y = 3*($x^2)+7*$x-15;

        return view('Ejercicio4.resultado4', compact('y'));
    }
}
