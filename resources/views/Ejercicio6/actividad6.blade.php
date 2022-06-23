<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6</title>
    <style>
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: gray;
        }
    </style>
</head>
<body>
    <header><center><h2><b>Ejercicio 6</b></h2></center></header>
    <p>Construir un algoritmo que lea la categoría y el sueldo de un trabajador, calcule el aumento
        correspondiente teniendo en cuenta la siguiente tabla. (Se debe solicitar al usuario el numero de 
        categoría para hacer el cálculo.)</p>

        <form action="{{route('resultado6')}}" method="post">
        {{ csrf_field() }}

        <label>Ingrese Su Categoria (1 a 4) </label>
        <input type="number" min="1" max="4" name="categoria">
        <label>Ingrese Su Sueldo</label>
        <input type="number" name="sueldo">

        <input type="submit" name="btn_enviar" value="Enviar">
        
        </form>

</body>
</html>