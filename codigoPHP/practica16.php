<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 24/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 16</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
        </header>
        <main>
            <?php
            /**
             * @since 24/10/2021
             * Fecha de última modificación: 26/10/2021
             * 
             * Inicialización y recorrido con funciones de un array con el sueldo de
             * cada día de la semana para mostrar el sueldo total.
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
             * Recorrido del array mediante funciones.
             */
            echo '<h1>Recorrido del array</h1>';
            //Avance del puntero mediante bucle. Cuando apunta a una posición vacía, sale.
            while (current($aSueldo)) {
                //Mostrado de la clave y el elemento en la posición actual.
                echo "<div>En " . key($aSueldo) . " el sueldo es de " . current($aSueldo), "</div>";
                //Avance del puntero.
                next($aSueldo);
            }

            //Posición del puntero al final del array.
            end($aSueldo);

            echo '<h1>Recorrido inverso</h1>';
            //Recorrido inverso del array.
            while (current($aSueldo)) {
                //Mostrado de la clave y el elemento en la posición actual.
                echo "<div>En " . key($aSueldo) . " el sueldo es de " . current($aSueldo), "</div>";
                //Avance del puntero hacia atrás.
                prev($aSueldo);
            }

            //Reseteo del puntero del array al inicio del mismo.
            reset($aSueldo);

            echo '<h1>Recorrido con each</h1>';
            echo '<pre>';
            do {
                //Inicialización de variable con el array resultante y avance del puntero.
                $aKeyValue = each($aSueldo);
                //Mostrado del array.
                print_r($aKeyValue);
            } while ($aKeyValue != null);
            echo '</pre>';
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
        
    </body>
</html>
