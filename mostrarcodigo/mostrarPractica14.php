<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra.
Fecha de creación: 20/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG DWES mostrar 3.14</title>
        <style>
            h1{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
        /**
         * @since 20/10/2021
         * Fecha de modificación: 20/10/2021
         */
        
        echo '<div><h1>Página:</h1>';
            highlight_file("../codigoPHP/practica14.php");
            
        echo '</div><div><h1>Librería:</h1>';
            highlight_file("../codigoPHP/practica14_libreria.php");
        echo '</div>';
        ?>
    </body>
</html>
