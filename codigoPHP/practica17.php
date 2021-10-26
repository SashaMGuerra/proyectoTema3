<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 24/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 17</title>
        <style>
            h1{
                text-align: center;
            }
            table{
                width: 100%;
                text-align: center;
                border-collapse: collapse;
                table-layout: fixed;
            }
            td, th{
                border: 1px solid gainsboro;
            }
        </style>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 24/10/2021
         * Fecha de última modificación: 26/10/2021
         * 
         * Inicialización de un arrray bidimensional con los nombres de personas
         * que han reservado un asiento en un teatro de 20 filas de 15 asientos
         * cada una.
         * Recorrido del array con distintas técnicas.
         */
        
        /*
         * Declaración de constantes.
         */
        declare (FILAS = 20); // Filas en el teatro.
        declare (ASIENTOS = 15); //Asientos en cada fila.

        /*
         * Inicialización del teatro (matriz) vacío.
         */
        for($iFila = 0;$iFila < FILAS;$iFila++){
            for($iAsiento = 0;$iAsiento < ASIENTO;$iAsiento++){
            
            }
            
        }
        
        
        $iFilasAsientosSize = sizeof($aFilasAsientos);

        /*
         * Recorrido del array.
         */

        //Recorrido mediante foreach().
        echo '<h1>Recorrido mediante foreach()</h1>';
        //Creación de la tabla para mostrar los datos.
        echo '<table>';
        asientos(sizeof($aFilasAsientos[0]));
        //Se sacan tanto la clave como el valor para mostrar la fila que corresponde.
        foreach ($aFilasAsientos as $iKey => $aFila) {
            
            echo '<tr><th>Fila ' . ($iKey + 1) . '</th>';
            foreach ($aFila as $sAsiento) {
                echo "<td>$sAsiento</td>";
            }
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </body>
</html>
