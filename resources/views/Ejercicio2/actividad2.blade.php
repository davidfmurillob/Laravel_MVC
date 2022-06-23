<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promedio</title>
    <style>
        body{
            background-color:gray;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }
        .btn{
            display:block;
            border-rounded: 5px;
        }
        div{
            display:flex;
            justify-content: space-between;
            width: 40%;
        }
    </style>
</head>
<body>
    <center><h2><b>Ejercicio 2</b></h2></center>  
    <p>
        Elaborar un algoritmo para calcular el promedio final de una asignatura. Dicha calificación se compone 
        de los siguientes porcentajes.
        50% -- corresponde al promedio de los 3 parciales(debes solicitar estas 3 calificaciones)
        30% -- corresponde a 1 practica
        20%-- corresponde a examen final 
    </p>
    <form action="{{route('resultado2')}}" method="post">
        {{ csrf_field() }}
        <div>
           <label>Ingrese su Primera nota</label>
           <input type="number" name="num1"> 
        </div>
        
        <div>
            <label>Ingrese su Segunda nota</label>
            <input type="number" name="num2">
        </div>
        <div>
            <label>Ingrese su Tercera nota</label>
        <input type="number" name="num3">
        </div>
        <div>
             <label>Ingrese Nota Practica</label>
        <input type="number" name="practica">
        </div>
       <div>
        <label>Ingrese Nota Examen Final</label>
        <input type="number" name="nfinal">
       </div>
        
        <input class="btn" type="submit" name="btn_enviar" value="Enviar">
    </form>

        
</body>
</html>


