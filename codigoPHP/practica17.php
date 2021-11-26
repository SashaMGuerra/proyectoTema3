<!DOCTYPE html>
<!--
Autor: Isabel Martínez Guerra
Fecha de creación: 24/10/2021
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>IMG - DWES 3 - 17</title>
        <link href="../webroot/css/commonTema3.css" rel="stylesheet" type="text/css"/>
        <style>
            table{
                width: 100%;
                max-width: max-content;
                margin: auto;
                text-align: center;
                table-layout: fixed;
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
             * @since 24/10/2021
             * Fecha de última modificación: 26/10/2021
             * 
             * Inicialización de un arrray bidimensional con los nombres de personas
             * que han reservado un asiento en un teatro de 20 filas de 15 asientos
             * cada una.
             * Recorrido del array con distintas técnicas.
             */
            /*
             * Declaración de constantes.
             */
            define("FILAS", 20); //Filas en el teatro.
            define("ASIENTOS", 15); //Asientos en cada fila.

            /*
             * Inicialización del teatro (matriz) vacío.
             */
            for ($iFila = 0; $iFila < FILAS; $iFila++) {
                for ($iAsiento = 0; $iAsiento < ASIENTOS; $iAsiento++) {
                    $aTeatro[$iFila][$iAsiento] = '';
                }
            }

            /*
             * Introducción de datos.
             */
            $aTeatro[0][1] = "Buri";
            $aTeatro[0][2] = "Bestla";
            $aTeatro[0][4] = "Frigga";
            $aTeatro[0][5] = "Odín";
            $aTeatro[1][0] = "Buri";
            $aTeatro[1][3] = "Heimdall";
            $aTeatro[1][5] = "Balder";
            $aTeatro[1][6] = "Forseti";
            $aTeatro[1][7] = "Tyr";
            $aTeatro[2][1] = "Sigyn";
            $aTeatro[2][2] = "Loki";
            $aTeatro[2][3] = "Hela";
            $aTeatro[2][5] = "Thor";
            $aTeatro[2][6] = "Sif";
            $aTeatro[3][1] = "Býleist";
            $aTeatro[3][2] = "Farbauti";
            $aTeatro[3][3] = "Helblindi";
            $aTeatro[3][5] = "Bragi";
            $aTeatro[3][6] = "Idunn";
            $aTeatro[5][3] = "Frey";
            $aTeatro[5][4] = "Freya";
            $aTeatro[6][0] = "Nótt";
            $aTeatro[6][1] = "Máni";
            $aTeatro[6][2] = "Sól";
            $aTeatro[6][3] = "Dagr";
            $aTeatro[7][1] = "Urdr";
            $aTeatro[7][2] = "Verdandi";
            $aTeatro[7][3] = "Skuld";

            $aTeatro[0][11] = "Ra";
            $aTeatro[2][13] = "Atón";
            $aTeatro[4][8] = "Isis";
            $aTeatro[4][9] = "Osiris";
            $aTeatro[4][10] = "Horus";
            $aTeatro[4][11] = "Hathor";
            $aTeatro[5][13] = "Amón";
            $aTeatro[5][14] = "Mut";
            $aTeatro[7][7] = "Bastet";
            $aTeatro[7][8] = "Anubis";
            $aTeatro[8][6] = "Nut";
            $aTeatro[8][7] = "Geb";
            $aTeatro[8][9] = "Neth";
            $aTeatro[8][10] = "Neftis";

            $aTeatro[9][1] = "Cloto";
            $aTeatro[9][2] = "Láquesis";
            $aTeatro[9][3] = "Átropos";
            $aTeatro[11][0] = "Iris";
            $aTeatro[11][1] = "Hestia";
            $aTeatro[11][2] = "Hermes";
            $aTeatro[12][1] = "Helios";
            $aTeatro[12][2] = "Apolo";
            $aTeatro[12][7] = "Dioniso";
            $aTeatro[12][8] = "Pan";
            $aTeatro[13][0] = "Nix";
            $aTeatro[13][1] = "Selene";
            $aTeatro[13][2] = "Hipnos";
            $aTeatro[13][3] = "Tánatos";
            $aTeatro[13][5] = "Hefesto";
            $aTeatro[14][0] = "Ares";
            $aTeatro[14][1] = "Afrodita";
            $aTeatro[14][3] = "Asclepio";
            $aTeatro[15][3] = "Atenea";
            $aTeatro[17][3] = "Rea";
            $aTeatro[17][4] = "Cronos";
            $aTeatro[18][0] = "Deméter";
            $aTeatro[18][1] = "Perséfone";
            $aTeatro[18][2] = "Hades";
            $aTeatro[18][3] = "Poseidón";
            $aTeatro[19][0] = "Uranos";
            $aTeatro[19][1] = "Gea";
            $aTeatro[19][3] = "Hera";
            $aTeatro[19][4] = "Zeus";
            $aTeatro[10][5] = "Penélope";
            $aTeatro[10][6] = "Ulises";
            $aTeatro[10][8] = "Aquiles";
            $aTeatro[10][9] = "Patroclo";
            $aTeatro[11][5] = "Teseo";
            $aTeatro[11][6] = "Perseo";
            $aTeatro[12][5] = "Heracles";
            $aTeatro[9][8] = "Cibeles";
            $aTeatro[10][11] = "Mitra";

            $aTeatro[14][6] = "Ganesha";
            $aTeatro[14][7] = "Indra";
            $aTeatro[14][8] = "Agni";
            $aTeatro[14][10] = "Krishná";
            $aTeatro[14][11] = "Balarama";
            $aTeatro[15][12] = "Sarasvati";
            $aTeatro[15][13] = "Brahmá";
            $aTeatro[16][11] = "Laksmí";
            $aTeatro[16][12] = "Vishnú";
            $aTeatro[17][10] = "Durgá";
            $aTeatro[17][11] = "Shivá";

            $aTeatro[15][5] = "Construcción";
            $aTeatro[15][9] = "Destrucción";
            $aTeatro[16][6] = "Cosmos";
            $aTeatro[16][8] = "Caos";
            $aTeatro[17][6] = "Padre Tiempo";
            $aTeatro[17][7] = "Amante Irrealidad";
            $aTeatro[17][8] = "Madre Naturaleza";
            $aTeatro[18][7] = "Existencia";

            $aTeatro[16][7] = "Jesucristo";
            $aTeatro[19][7] = "Dios";

            /*
             * Recorrido del array.
             */

            //Recorrido mediante foreach(). Crea una tabla con los datos.
            echo '<h1>Recorrido mediante foreach()</h1>';

            echo '<table>';
            asientos(ASIENTOS); //Línea de números de asiento en la tabla resultante.
            /*
             * Recorrido de cada fila.
             */
            foreach ($aTeatro as $iKey => $aFila) {
                echo '<tr><th>Fila ' . ($iKey + 1) . '</th>';
                /*
                 * Recorrido de cada asiento en la fila.
                 */
                foreach ($aFila as $sAsiento) {
                    echo "<td>$sAsiento</td>";
                }
                echo '</tr>';
            }
            echo '</table>';

            //Recorrido mediante for(). Crea una tabla con los datos.
            echo '<h1>Recorrido mediante for()</h1>';

            echo '<table>';
            asientos(ASIENTOS); //Línea de números de asiento en la tabla resultante.
            /*
             * Inicialización y aumento del contador de filas recorridas
             * hasta el máximo de filas.
             */
            for ($iFila = 0; $iFila < FILAS; $iFila++) {
                echo '<tr><th>Fila ' . ($iFila + 1) . '</th>';

                // Inicialización de una variable con los datos del array de la fila.
                $aFila = $aTeatro[$iFila];

                /*
                 * Inicialización del contador de asientos recorridos
                 * hasta el máximo de asientos en la fila.
                 */
                for ($iAsiento = 0; $iAsiento < ASIENTOS; $iAsiento++) {
                    echo '<td>' . $aFila[$iAsiento] . '</td>';
                }
                echo '</tr>';
            }
            echo '</table>';

            //Recorrido mediante while(). Crea una tabla con los datos.
            echo '<h1>Recorrido mediante while()</h1>';


            echo '<table>';
            asientos(ASIENTOS); //Línea de números de asiento en la tabla resultante.
            // Inicialización del contador de filas recorridas.
            $iFila = 0;
            /*
             * Recorrido de las filas hasta alcanzar el máximo de filas.
             */
            while ($iFila < FILAS) {
                echo '<tr><th>Fila ' . ($iFila + 1) . '</th>';

                //Inicialización de una variable con los datos del array de la fila.
                $aFila = $aTeatro[$iFila];

                //Inicialización del contador de asientos recorridos.
                $iAsiento = 0;
                /*
                 * Recorrido de los asientos en la fila hasta alcanzar el máximo de asientos.
                 */
                while ($iAsiento < ASIENTOS) {
                    echo '<td>' . $aFila[$iAsiento] . '</td>';

                    //Aumento del contador de asientos recorridos en 1.
                    $iAsiento++;
                }
                echo '</tr>';

                //Aumento del contador de filas recorridas en 1.
                $iFila++;
            }
            echo '</table>';

            /**
             * Añade a una tabla una fila con los números de asientos según su cantidad.
             * @param type $iCantidad
             */
            function asientos($iCantidad) {
                echo '<tr><th>Asientos: </th>';
                for ($iAsiento = 0; $iAsiento < $iCantidad; $iAsiento++) {
                    echo '<th>' . ($iAsiento + 1) . '</th>';
                }
                echo '</tr>';
            }
            ?>
        </main>
        <?php include_once './elementoFooter.php'; // Footer ?>
        
    </body>
</html>
