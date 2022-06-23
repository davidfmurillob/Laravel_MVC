<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actividad 3</title>
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
    <header><center><h2><b>Ejercicio 3</b></h2></center></header>
    <p> Calcular el salario de un empleado teniendo en cuenta los datos de entrada nombres, horas de trabajo 
        mensual, valor por hora, bonificación, auxilio transporte, crédito 
    
    </p>

    <form action="{{route('resultado3')}}" method="post">
        {{ csrf_field() }}
        <div>

            <label>Nombres</label>
            <input type="text" name="nombres">
        </div>
<div>

    <label>Horas De Trabajo Mensual</label>
    <input type="number" name="horas">
</div>
        <div>
            <label>Valor Por Hora </label>
            <input type="number" name="valorh">

        </div>
<div>

    <label>Bonificacion</label>
    <input type="number" name="bonificacion" >
</div>
        <div>

            <label>Auxlio Transporte</label>
            <input type="number" name="auxiliot">
        </div>
<div>
    <label>Credito</label>
    <input type="number" name="credito">

</div>

        <input type="submit" name="btn_enviar" value="Enviar">

    </form>


</body>
</html>