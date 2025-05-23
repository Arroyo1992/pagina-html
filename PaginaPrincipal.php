<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Middle Earth Fans</title>
        <style>
            html,body{
                height: 100%;
                display: flex;
                margin: 0;
                flex-direction: column;
            }
            body{
                background-color: blue;
                color: white;
            }
            .navegador{
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                background-color: darkblue;
                border: solid 2px black;
                padding: 30px;
                
            }
            main{
                flex: 1;
                
            }
            footer{
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                background-color: darkblue;
                border: solid 2px black;
                padding: 30px;   
            }
        </style>
    </head>
    <body>
        <nav class="navegador">
            <div class="logo">Middle Earth Fans</div>
            <div class="inicio">Inicio</div>
            <div class="peliculas">Peliculas</div>
            <div class="juegos">Juegos</div>
            <div class="libros">Libros</div>
            <div class="registro">Registro</div>
            
        </nav>
        <main>
            <div class="novedades">Últimas novedades</div>
            
        </main>
        <footer>
            <div class="cookies">Cookies</div>
            <div class="normativa">Normativa</div>
            <div class="terminos">Terminos de uso</div>
            <div class="redes">Nuestras redes</div>
        </footer>
    </body>
</html>
