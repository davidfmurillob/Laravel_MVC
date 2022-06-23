<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <style>
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: gray;
        }
        div{
            display:flex;
            justify-content: space-between;
            width: 40%;
        }
    </style>
</head>
<body>
    
    <header>
        <style>

        </style><center>
            <h2><b>Ejercicio 5</b></h2></center>
        </header>
    <p>Escribir y ejecutar un programa que simule una calculadora. Solicite al usuario dos números y un 
        carácter. Si el carácter es +, se imprime la suma; si el carácter es un -, se imprime la diferencia; si el 
        carácter es un *, se imprime el producto; si el carácter es un /, se imprime el cociente; y si es una %, 
        se imprime el residuo
    </p>

    <form action="{{route('resultado5')}}" method="post">
        {{ csrf_field() }}
        <div>

            <label>Ingrese Un Numero</label>
            <input type="number" name="num1">
        </div>
        <div>
            <label>Ingrese Un Numero</label>
            <input type="number" name="num2">

        </div>
        <div>

            <label>Ingrese Un Caracter</label>
            <input type="text" name="caracter">
        </div>

        <input type="Submit" value="Enviar">
    </form>
    
</body>
</html>