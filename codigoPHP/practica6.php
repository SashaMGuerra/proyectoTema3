<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 18/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3-6</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php include_once './elementoBtVolver.php'; ?>
        </header>
        <main>
            <?php
            /**
             * @since 18/10/2021
             * Fecha de última modificación: 18/10/2021
             * 
             * Operaciones con fechas.
             */
            //Construcción de un DateTime:
            $dateTimeNow = new DateTime();
            //$otroDateTime = date_create('9-9-2007 09:09:09', new DateTimeZone('Europe/Madrid'));

            $format = 'l d-m-Y h:m:s';

            echo 'Ahora: ' . $dateTimeNow->format('l d-m-Y h:m:s');

            //El constructor de DateInterval requiere la P inicial.
            $dateTimeNow->add(new DateInterval('P60D'));

            echo '<br>En 60 días: ' . $dateTimeNow->format('l d-m-Y h:m:s');
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer  ?>
    </body>
</html>
