<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 12</title>
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
         * Fecha de creación: 18/10/2021
         * Fecha de última modificación: 18/10/2021
         * 
         * Mostrar el contenido de las variables superglobales.
         */
        /*
          //$GLOBALS
          echo '<h1>Variable $GLOBALS</h1>';
          echo '<pre>';
          print_r($GLOBALS);
          echo '</pre>';

          foreach ($GLOBALS as $key => $value) {
          print_r($value);
          }

          //print_r($_SERVER, true);
         * 
         */

        //$_SERVER
        echo '<h1>Variable $_SERVER</h1>';
        echo '<h2>Mediante foreach (+ tabla)</h2>';
        echo '<table><tr><th>Clave</th><th>Valor</th></th>';
        foreach ($_SERVER as $key => $value) {
            echo '<tr>';
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo '</tr>';
        }
        echo '</table>';


        echo '<h2>Mediante print_r (+ texto preformateado)</h2>';
        echo '<pre>';
        print_r($_SERVER);
        echo '</pre>';
        ?>
    </body>
</html>
