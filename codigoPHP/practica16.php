<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 24/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 16</title>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 24/10/2021
         * Fecha de última modificación: 24/10/2021
         * 
         * Inicialización y recorrido de un array con el sueldo de cada
         * día de la semana para mostrar el sueldo total.
         */
        
        //Inicialización del array.
        $aSueldo = [
            "lunes" => 78.5,
            "martes" => 101.73,
            "miércoles" => 77.77,
            "jueves" => 81.91,
            "viernes" => 80,
            "sábado" => 55.12,
            "domingo" => 60.25
        ];

        /*
         * Recorrido del array, recogiendo únicamente los valores y no las claves
         * en un acumulador.
         */
        $fTotalSueldo = 0;
        foreach ($aSueldo as $fSueldoDia) {
            $fTotalSueldo+=$fSueldoDia;
        }
        
        ?>
    </body>
</html>
