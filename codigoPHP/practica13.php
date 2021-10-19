<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 19/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 13</title>
        <style>
            h1, h2{
                text-align: center;
            }
            table{
                border-collapse: collapse;
            }
            td, th{
                border: 1px solid gainsboro;
            }
        </style>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 19/10/2021
         * Fecha de última modificación: 19/10/2021
         * 
         * Función que cuenta el número de visitas a la página desde una fecha
         */
        
        function visitas(){
            $archivo = 'visitas.txt'; //Archivo que contiene las visitas.
            
            //fopen = file open
            $lectorArchivo = fopen($archivo, 'r'); //Para lectura (reader).
            if($lectorArchivo){
                $contador = fread($lectorArchivo, filesize($archivo)); //Lectura del archivo.
                $contador++;
                fclose($lectorArchivo);
            }
            
            $lectorArchivo = fopen($archivo, 'w+'); //Para lectura y escritura (writer).
            if($lectorArchivo){
                fwrite($lectorArchivo, $contador);
                fclose($lectorArchivo);
            }            
            return $contador;
        }
        
        echo visitas();
        ?>
    </body>
</html>
