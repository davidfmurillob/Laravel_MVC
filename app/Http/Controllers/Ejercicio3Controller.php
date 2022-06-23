<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
    public function Ejercicio3(){
        return view('Ejercicio3.actividad3');
    }

    public function Resultado3(Request $request){

        $nombre = $request->nombres;
        $horast = $request->horas;
        $valorhora = $request->valorh;
        $bono = $request->bonificacion;
        $auxiliot = $request->auxiliot;
        $credito = $request->credito;

        $salario = $horast * $valorhora + $bono + $auxiliot + $credito;


        return view('Ejercicio3.resultado3', compact('nombre','salario'));
    }
}
