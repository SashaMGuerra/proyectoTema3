<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 12</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
        <style>
            table{
                margin: auto;
                border-collapse: collapse;
            }
            tr:first-child th{
                border: 1px solid black;
            }
            tr:nth-child(even) td{
                background-color: gainsboro;
            }
            td{
                border: 1px solid gainsboro;
            }
        </style>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
        </header>
        <main>
            <?php
            /**
             * @author Isabel Mtnez.
             * @version 1.0
             * 
             * @since 18/10/2021
             * Fecha de última modificación: 18/10/2021
             * 
             * Mostrado del contenido de las variables superglobales.
             */
            /*
             * Se muestra el contenido de los arrays de variables globales.
             * Guardan la información de forma clave => valor (asociativos).
             */


            //$_SERVER: información sobre el servidor.
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
            // La etiqueta <pre> formatea el texto.
            echo '<pre>';
            print_r($_SERVER);
            echo '</pre>';


            /*
             * $_REQUEST: información devuelta en formularios enviados.
             * Contiene la información de $_POST, $_GET y $_COOKIES.
             */
            echo '<h1>Variable $_REQUEST</h1>';
            echo '<h2>Mediante foreach (+ tabla)</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_REQUEST as $key => $value) {
                echo '<tr>';
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo '</tr>';
            }
            echo '</table>';


            echo '<h2>Mediante print_r (+ texto preformateado)</h2>';
            echo '<pre>';
            print_r($_REQUEST);
            echo '</pre>';


            //$_FILES: variables de subida de ficheros HTTP.
            echo '<h1>Variable $_FILES</h1>';
            echo '<h2>Mediante foreach (+ tabla)</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_FILES as $key => $value) {
                echo '<tr>';
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo '</tr>';
            }
            echo '</table>';


            echo '<h2>Mediante print_r (+ texto preformateado)</h2>';
            echo '<pre>';
            print_r($_FILES);
            echo '</pre>';


            //$_ENV: variables de entorno.
            echo '<h1>Variable $_ENV</h1>';
            echo '<h2>Mediante foreach (+ tabla)</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_ENV as $key => $value) {
                echo '<tr>';
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo '</tr>';
            }
            echo '</table>';


            echo '<h2>Mediante print_r (+ texto preformateado)</h2>';
            echo '<pre>';
            print_r($_ENV);
            echo '</pre>';

            //$_SESSION: variables de sesión.
            echo '<h1>Variable $_SESSION</h1>';
            echo '<h2>Mediante foreach (+ tabla)</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_SESSION as $key => $value) {
                echo '<tr>';
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo '</tr>';
            }
            echo '</table>';


            echo '<h2>Mediante print_r (+ texto preformateado)</h2>';
            echo '<pre>';
            print_r($_SESSION);
            echo '</pre>';

            /*
             * $GLOBALS: array de arrays, Contiene todos los anteriores.
             */
            echo '<h1>Variable $GLOBALS</h1>';
            echo '<h2>Mediante foreach (+ tabla)</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($GLOBALS as $key => $value) {
                echo '<tr>';
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo '</tr>';
            }
            echo '</table>';


            echo '<h2>Mediante print_r (+ texto preformateado)</h2>';
            echo '<pre>';
            print_r($GLOBALS);
            echo '</pre>';
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
        
    </body>
</html>
