<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4</title>
    <style>
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color:gray;
        }
    </style>
</head>
<body>
    <header><center><h2><b>Ejercicio4</b></h2></center></header>
    <p>Elaborar un algoritmo que obtenga e imprima el valor de Y a partir de la ecuación 
        Y = 3*X2+7X-15 (debe solicitar al usuario el valor de X)
    </p>

    <form action="{{route('resultado4')}}" method="post">
        {{ csrf_field() }}
        <label>Ingrese Un numero </label>
        <input type="number" name="x" placeholder="El Valor De 'x' ">
        <input type="submit" name="btn_enviar" value="Enviar">
    
    
    </form>


</body>
</html>