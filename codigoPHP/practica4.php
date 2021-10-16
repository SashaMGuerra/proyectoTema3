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
            switch ($weekday) {
                case 1:
                    $weekday = 'Segunda-feira';
                    break;
                case 2:
                    $weekday = 'Terça-feira';
                    break;
                case 3:
                    $weekday = 'Quarta-feira';
                    break;
                case 4:
                    $weekday = 'Quinta-feira';
                    break;
                case 5:
                    $weekday = 'Sexta-feira';
                    break;
                case 6:
                    $weekday = 'Sábado';
                    break;
                case 7:
                    $weekday = 'Domingo';
                    break;
            }

            switch ($month) {
                case 1:
                    $month = 'Janeiro';
                    break;
                case 2:
                    $month = 'Fevereiro';
                    break;
                case 3:
                    $month = 'Março';
                    break;
                case 4:
                    $month = 'Abril';
                    break;
                case 5:
                    $month = 'Maio';
                    break;
                case 6:
                    $month = 'Junho';
                    break;
                case 7:
                    $month = 'Julho';
                    break;
                case 8:
                    $month = 'Agosto';
                    break;
                case 9:
                    $month = 'Setembro';
                    break;
                case 10:
                    $month = 'Outubro';
                    break;
                case 11:
                    $month = 'Novembro';
                    break;
                case 12:
                    $month = 'Dezembro';
                    break;
            }
            
            print '<div>';
            echo $weekday.date(", d ").$month.date(" Y - H:m:s");
            print '</div>';
        ?>
    </body>
</html>
