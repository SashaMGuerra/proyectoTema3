<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 24/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 15</title>
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
                $fTotalSueldo += $fSueldoDia;
            }

            /*
             * Mostrado del contenido del array en una lista.
             */
            echo '<ul>';
            foreach ($aSueldo as $sDia => $iSueldoDiario) {
                echo "<li>El día $sDia se ha ganado $iSueldoDiario</li>";
            }
            echo '</ul>';

            echo '<h3>Texto formateado con printf</h3>';
            //Mostrado del sueldo total, dado un formato float con dos decimales.
            printf("<div>El total del sueldo semanal es de %01.2f €</div>", $fTotalSueldo);
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
        
    </body>
</html>
