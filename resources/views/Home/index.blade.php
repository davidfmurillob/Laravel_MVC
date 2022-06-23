<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <title>Actividad</title>
    <style type="text/css">
              body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: gray;
        }
              h1{
                  padding: 35px;
              }
              nav { 
              height: 50px; 
              background-color: #292f36; 
              
              font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif}
             
              ul { 
              padding-top: 14px;
              display: flex;
              list-style: none;
              text-decoration: none;
              justify-content: space-around; 
              
        }

        a{
            color:white;
        }
        a:link{
            text-decoration: none;
        }
        a:hover{
            
            border-radius: 4px;
            background-color: #4ecdc4;
        }
         

        
    </style>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="{{url('http://127.0.0.1:8000')}}">Inicio</a>
            </li>

            <li>
                <a href="{{'actividad1'}}">Ejercicio 1</a>
            </li>

            <li>
                <a href="{{'actividad2'}}">Ejercicio 2</a>
            </li>

            <li>
                <a href="{{'actividad3'}}">Ejercicio 3</a>
            </li>

            <li>
                <a href="{{'actividad4'}}">Ejercicio 4</a>
            </li>

            <li>
                <a href="{{'actividad5'}}">Ejercicio 5</a>
            </li>

            <li>
                <a href="{{'actividad6'}}">Ejercicio 6</a>
            </li>
        </ul>
    </nav>
 
</body>

</html>