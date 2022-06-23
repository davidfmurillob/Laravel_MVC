<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1</title>
    <style>
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: gray;
        }
        input{
            padding:8px;
        }
    </style>
</head>
<body>
    <center><h2> <b>Ejercicio 1</b></h2></center>
<p> Diseñar un formulario en HTML el cual solicite 2 números enteros y permita realizar las operaciones 
    aritméticas. Devolviendo el valor de estas en pantalla </p>    
    <form action="{{route('resultado1')}}" method="post">
        {{ csrf_field() }}
        <label>Digite El Primer Numero</label>
        <input type="number" name="num1">
        <label>Digite El Segundo Numero</label>
        <input type="number" name="num2">
        <input type="submit" name="btn_enviar"value="Enviar">        
    </form>
</body>
</html>


