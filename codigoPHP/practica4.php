<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DWES - Ejercicio 4</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            date_default_timezone_set('Europe/Lisbon');
            //setlocale(LC_ALL, "pt_PT", 'Portuguese_Portugal', 'Portuguese');
            $weekday = date('N');
            $month = date('m');
            
             
            print '<div>';
            echo $weekday.date(", d ").$month.date(" Y - H:m:s");
            print '</div>';
            
            //También en Marruecos
           
        ?>
    </body>
</html>
