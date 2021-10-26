<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 26/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 18</title>
        <style>
            h1{
                text-align: center;
            }
            table{
                width: 100%;
                text-align: center;
                border-collapse: collapse;
                table-layout: fixed;
            }
            td, th{
                border: 1px solid gainsboro;
            }
        </style>
    </head>
    <body>
        <?php
        /**
         * Fecha de creación: 26/10/2021
         * Fecha de última modificación: 26/10/2021
         * 
         * Inicialización de un arrray bidimensional con los nombres de personas
         * que han reservado un asiento en un teatro de 20 filas de 15 asientos
         * cada una.
         * Recorrido del array con funciones.
         */
        
        //Inicialización del array.
        $aFilasAsientos = [
            ["", "Bor", "Bestla", "", "Frigga", "Odín", "", "", "", "", "", "Ra", "", "", ""],
            ["Buri", "", "", "Heimdall", "", "Balder", "Forseti", "Tyr", "", "", "", "", "", "", ""],
            ["", "Sigyn", "Loki", "Hela", "", "Thor", "Sif", "", "", "", "", "", "", "Atón", ""],
            ["", "Býleistr", "Farbauti", "Helblindi", "", "Bragi", "Idunn", "", "", "", "", "", "", "", ""],
            ["", "", "", "", "", "", "", "", "Isis", "Osiris", "Horus", "Hathor", "", "", ""],
            ["", "", "", "Frey", "Freyja", "", "", "", "", "", "", "", "", "Amón", "Mut"],
            ["Nótt", "Máni", "Sól", "Dagr", "", "", "", "", "", "", "", "", "", "", ""],
            ["", "Urdr", "Verdandi", "Skuld", "", "", "", "Bastet", "Anubis", "", "", "", "", "", ""],
            ["", "", "", "", "", "", "Nut", "Geb", "", "Neth", "Neftis", "", "", "", ""],
            ["", "Cloto", "Láquesis", "Átropos", "", "", "", "", "Cibeles", "", "", "", "", "", ""],
            ["", "", "", "", "", "Penélope", "Ulises", "", "Aquiles", "Patroclo", "", "Mitra", "", "", ""],
            ["Iris", "Hestia", "Hermes", "", "", "Teseo", "Perseo", "", "", "", "", "", "", "", ""],
            ["", "Helios", "Apolo", "", "", "Heracles", "", "Dioniso", "Pan", "", "", "", "", "", ""],
            ["Nix", "Selene", "Hipnos", "Tánatos", "", "Hefesto", "", "", "", "", "", "", "", "", ""],
            ["Ares", "Afrodita", "", "Asclepio", "", "", "Ganesha", "Indra", "Agni", "", "Krishná", "Balarama", "", "", ""],
            ["", "", "", "Atenea", "", "Construcción", "", "", "", "Destrucción", "", "", "Sarasvati", "Brahmá", ""],
            ["", "", "", "", "", "", "Cosmos", "Jesucristo", "Caos", "", "", "Laksmí", "Vishnú", "", ""],
            ["", "", "", "Rea", "Cronos", "", "Padre Tiempo", "Amante Irrealidad", "Madre Naturaleza", "", "Durgá", "Shivá", "", "", ""],
            ["Deméter", "Perséfone", "Hades", "Poseidón", "", "", "", "Existencia", "", "", "", "", "", "", ""],
            ["Uranos", "Gea", "", "Hera", "Zeus", "", "", "Dios", "", "", "", "", "", "", ""]
        ];

        $iFilasAsientosSize = sizeof($aFilasAsientos);

        echo '<h1>Recorrido mediante funciones</h1>';
        //Reseteo del puntero.
        reset($aFilasAsientos);
        
        echo '<table>';
        //Recorrido de la matriz.
        while(current($aFilasAsientos)){
            //Recorrido de cada fila de la matriz.
            $aFila = current($aFilasAsientos);
            echo '<tr>';
            /*
             * Dado que hay elementos vacíos dentro del array, el bucle,
             * que es numérico, se recorrerá según la clave.
             */
            while(!is_null(key($aFila))){
                //Mostrado del asiento de cada fila.
                echo '<td>'. current($aFila).'</td>';
                //Avance del puntero de asientos.
                next($aFila);
            }
            echo '</tr>';
            //Avance del puntero de filas.
            next($aFilasAsientos);
        }
        echo '</table>';
        
        
        ?>
    </body>
</html>
