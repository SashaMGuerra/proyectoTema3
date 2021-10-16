<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DWES - Ejercicio 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
            //date_default_timezone_set('Europe/Lisbon');
            echo strftime('%A');
            echo '<br>'.date('l');
        ?>
    </body>
</html>
