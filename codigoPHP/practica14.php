<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 20/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 14</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
        </header>
        <main>
            <?php
            /**
             * Fecha de creación: 20/10/2021
             * Fecha de última modificación: 20/10/2021
             * 
             * Librería de funciones personal: uso.
             */
            include '../core/practica14_libreria.php';

            $iNum = 6;

            /* Comprueba si el número es par */
            echo '<div>';
            if (esPar($iNum)) {
                echo $iNum . ' es par y ';
            } else {
                echo $iNum . ' es impar y ';
            }

            /* Comprueba si el número es primo */
            if (esPrimo($iNum)) {
                echo 'es primo.';
            } else {
                echo 'no es primo.';
            }
            echo '</div>';

            /* Calcula y muestra el factorial del número */
            echo '<div>' . show_factorial($iNum) . '</div>';

            /* Comprueba y devuelve información sobre un fichero */
            $sFichero = '../doc/textopara14.txt';
            $sInfoFichero = comprobarFile($sFichero);
            echo $sInfoFichero;
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
        
    </body>
</html>
